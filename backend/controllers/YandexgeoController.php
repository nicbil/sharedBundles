<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\YandexGeoContentSearch;
use app\models\YandexGeoTabsSearch;
use app\models\YandexGeoMessagesSearch;
use yii\filters\AccessControl;

/**
 * YandexgeoController implements the CRUD actions for Yandexgeo model.
 */
class YandexgeoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update', 'delete', 'index'],
                'rules' => [
                    // deny all POST requests
                    [
                        'allow' => true,
                        'verbs' => ['POST'],
                    ],
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Yandexgeo models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModelContent = new YandexGeoContentSearch();
        $dataProviderContent = $searchModelContent->search(Yii::$app->request->queryParams);

        $searchModelTabs = new YandexGeoTabsSearch();
        $dataProviderTabs = $searchModelTabs->search(Yii::$app->request->queryParams);

        $searchModelMessages = new YandexGeoMessagesSearch();
        $dataProviderMessages = $searchModelMessages->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModelContent' => $searchModelContent,
            'dataProviderContent' => $dataProviderContent,
            'searchModelTabs' => $searchModelTabs,
            'dataProviderTabs' => $dataProviderTabs,
            'searchModelMessages' => $searchModelMessages,
            'dataProviderMessages' => $dataProviderMessages
        ]);
    }

    /**
     * Displays a single Yandexgeo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Yandexgeo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Yandexgeo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Yandexgeo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        //print_r($model); die();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
/*            $model = (object)[];

            $model->id = '3';
            $model->conten = '1';
            $model->tabs = '1';
            $model->errors = '1';*/

            //print_r($model); die();
            return $this->render('update', [
                'model' => $model
            ]);
        }
    }

    /**
     * Deletes an existing Yandexgeo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Yandexgeo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Yandexgeo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Yandexgeo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
