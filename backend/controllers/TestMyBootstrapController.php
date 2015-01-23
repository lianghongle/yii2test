<?php

namespace backend\controllers;

class TestMyBootstrapController extends BaseMyBootstrapController
{
	public function actionIndex()
	{
		return $this->render('index');	
	}
	
}

