<?php

namespace backend\controllers;

class TestEasyuiController extends \backend\controllers\base\BaseEasyuiController
{
	public function actionIndex()
	{
		return $this->render('index');	
	}
	
}

