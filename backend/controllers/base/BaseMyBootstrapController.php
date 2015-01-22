<?php

namespace backend\controllers\base;

class BaseMyBootstrapController extends BaseController
{
	public $layout = 'mybootstrap';
	
	public function actionBase(){
		
		return $this->render('base');
	}
	
}
