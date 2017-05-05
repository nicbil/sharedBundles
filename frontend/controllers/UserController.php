<?php 
namespace frontend\controllers;

use yii\rest\ActiveController;
use linslin\yii2\curl;


class UserController extends ActiveController {
	public $modelClass = 'common\models\Api';
}