<?php

namespace backend\controllers;

use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

use yii;

/**
 * 
 * @author neil.liang
 *
 */
class TestAPIController extends \backend\controllers\base\BaseAPIController
{
	public function actionIndex()
	{
		$return = [
			'code' => 0,
			'msg' => 'test ok',
			'data' => []
		];
		
// 		var_dump($return);
		return $return;
	}
}
