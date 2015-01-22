<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;

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
class TestRedisController extends BaseTestController
{
	public function actionIndex()
	{
		$redisModel = new TestRedisModel();
		$redisModel->attributes = [
			'name' => 'neil',
			'age' => '26',
		];
		$redisModel->save();
		// id will automatically be incremented if not set explicitly
		echo $redisModel->id; 
		
		return $this->render('index');
	}
	
	public function actionGet()
	{
		// find by query
		$redisModel = TestRedisModel::find()->where(['name' => 'test'])->one();
		var_dump(ArrayHelper::toArray($redisModel));
		
		// find all by query (using the `active` scope)
		//$redisModel = TestRedisModel::find()->active()->all(); // find all by query (using the `active` scope)
		
		return $this->render('get');
	}
	
	public function actionTest(){
		$result = RedisActiveRecord::getDb()->executeCommand('keys',['*a:*']);
		var_dump($result);
	}
}
