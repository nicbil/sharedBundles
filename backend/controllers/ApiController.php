<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\rest\ActiveController;
use SoapClient;
use SimpleXMLElement;
use SoapVar;
use linslin\yii2\curl;
use app\models\YandexGeoContentSearch;
use app\models\YandexGeoTabsSearch;
use app\models\YandexGeoMessagesSearch;

class ApiController extends ActiveController {
    public $modelClass = 'app\models\Api';

    public function actionYandex_geo($msisdn) {
        $client = new SoapClient(\Yii::$app->params['myUrl']['yandex_geo'], array(
            "login"      => "OM",
            "password"   => "P@ssw0rd",
            "trace" => true,
            "exceptions"=> 0
        ));

        $params = [
            "fulfill" => array(
                "fulfillRequest" => array(
                    "profileId" => "ORDER_WITHOUT_SEGMENT",
                    "channel" => "WEB",
                    "searchKey" => array(
                        "values" => array(
                            "entry" => array(
                                "0" => array("key" => "MSISDN", "value" => $msisdn),
                                "1" => array("key" => "Agent", "value" => "WEBSITE")
                            )
                        )
                    ),
                    "product" => new SoapVar(
                        array('productOffering' =>
                            new SoapVar(array(
                                'id' => 'S_INTERNET_UNLIM_YANDEX_GEO'), SOAP_ENC_OBJECT, 'ns1:simpleProductOffering')
                        ), SOAP_ENC_OBJECT, 'ns1:productComponent'
                    )
                )
            )
        ];

        $client->__soapCall("fulfill", $params);
        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $client->__last_response);
        $xml = new SimpleXMLElement($response);
        $body = $xml->xpath('//SBody')[0];
        $array = json_decode(json_encode((array)$body), TRUE);

        return $array['ns2fulfillResponse']['response'];
    }

    public function actionAuth() {
        $data = json_decode(trim(file_get_contents('php://input')), true);
        $curl = new curl\Curl();

        $params = array(
            'grant_type' => 'password',
            'client_id' => 'web_app',
            'client_secret' => 'LO*34VsdqB',
            'username' => $data['msisdn'],
            'password' => $data['password']
        );

        $response = $curl->setPostParams($params)
            ->post(\Yii::$app->params['myUrl']['auth']);

        $responseDecode = json_decode($response);

        if (!empty($responseDecode->error)) {
            return $response;
        } else {
            return $this->actionYandex_geo($data['msisdn']);
        }
    }

    public function actionPages() {
        $searchModelContent = new YandexGeoContentSearch();
        $dataProviderContent =$searchModelContent->search(Yii::$app->request->queryParams);

        $searchModelTabs = new YandexGeoTabsSearch();
        $dataProviderTabs = $searchModelTabs->search(Yii::$app->request->queryParams);

        $searchModelMessages = new YandexGeoMessagesSearch();
        $dataProviderMessages = $searchModelMessages->search(Yii::$app->request->queryParams);

        return array([
            'content' => $dataProviderContent->getModels(),
            'tabs' =>  $dataProviderTabs->getModels(),
            'messages' =>  $dataProviderMessages->getModels()
        ]);
    }
}
