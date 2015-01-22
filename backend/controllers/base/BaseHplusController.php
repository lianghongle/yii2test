<?php

namespace backend\controllers\base;

class BaseHplusController extends BaseController
{
	public $layout = 'hplus';
	
	public function actionBase(){
		
		return $this->render('base');
	}
	
}
