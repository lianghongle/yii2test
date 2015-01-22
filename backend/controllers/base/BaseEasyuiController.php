<?php

namespace backend\controllers\base;

class BaseEasyuiController extends Controller
{
	public $layout = 'easyui';
	
	public function actionBase(){
		
		return $this->render('base');
	}
	
}
