<?php

namespace backend\controllers\base;

class BaseTestController extends BaseController
{	
	public $layout = 'test';
	
	public function actionBase(){
		
		return $this->render('base');
	}
}
