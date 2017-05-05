<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use linslin\yii2\curl;
/**
* 
*/
class Api extends yii\base\Model {
    public static function tableName() {
        return '{{%user}}';
    }

    public static function tariffs() {
        $url = 'https://missaapitest.life.com.by/api/v1/bundles/getAllTariffs?client=web_app';

        $curl = new curl\Curl();
        $response = $curl->get($url);

        if ($curl->errorCode === null) {
            return $response;
        } else {
            switch ($curl->errorCode) {
                case 6:
                    //host unknown example
                    break;
            }
        }
    }
}