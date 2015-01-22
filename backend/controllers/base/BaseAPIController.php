<?php

namespace backend\controllers\base;

class BaseAPIController extends \yii\web\Controller
{	
	public function beforeAction($action)
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		return parent::beforeAction($action) ? true : false;
	}
	
	public function actionBase(){
		
	}
	
}
