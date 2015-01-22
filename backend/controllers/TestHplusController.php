<?php

namespace backend\controllers;

use backend\controllers\base\BaseHplusController;

class TestHplusController extends BaseHplusController
{
	public function actionIndex()
	{
		return $this->render('index');	
	}
	
	public function actionTest1()
	{
		return $this->render('test1');
	}
	
	public function actionTest2()
	{
		return $this->render('test2');
	}
	
}

