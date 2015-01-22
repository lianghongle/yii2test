<?php

namespace backend\controllers\base;

class BaseEasyuiController extends BaseController
{
	public $layout = 'easyui';
	
	public function actionBase(){
		
		return $this->render('base');
	}
	
}
