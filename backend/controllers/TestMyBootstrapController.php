<?php

namespace backend\controllers;

use backend\controllers\base\BaseMyBootstrapController;

class TestMyBootstrapController extends BaseMyBootstrapController
{
	public function actionIndex()
	{
		return $this->render('index');	
	}
	
}

