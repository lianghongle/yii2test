<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;

use yii;
use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

use common\models\vo\base\RedisActiveRecord;
use common\models\vo\TestRedisModel;

/**
 * 
 * @author neil.liang
 *
 */
class TestMongodbController extends BaseTestController
{
	public function actionIndex()
	{

		$collection = \Yii::$app->get('mongodb')->getCollection('customer');
		var_dump($collection);
// 		$collection->insert(['name' => 'John Smith', 'status' => 1]);
		
		return $this->render('index');
	}
}
