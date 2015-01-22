<?php

namespace backend\controllers;

use backend\controllers\BaseEasyuiController;

class TestEasyuiController extends BaseEasyuiController
{
	public function actionIndex()
	{
		return $this->render('index');	
	}
	
}

