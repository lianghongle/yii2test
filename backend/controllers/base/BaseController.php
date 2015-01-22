<?php

namespace backend\controllers\base;

class BaseController extends \yii\web\Controller
{	
	public function actionBase(){
		
		return $this->render('base');
	}
}
