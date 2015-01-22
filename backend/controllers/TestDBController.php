<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;
use common\models\po\TestModel;
use common\models\po\TestShardingModel;
use yii\helpers\Json;

class TestDBController extends BaseTestController
{
	public function actionIndex()
	{
		$currentTime = time();
		echo date('Y-m-d H:i:s', $currentTime);
		
		//当前controller的name
// 		var_dump($this->id);

		//当前action的name
// 		var_dump($this->action->id);
		
		$allData = TestModel::find(1);
// 		$allData = TestModel::find()->groupBy(['gender'])->asArray()->select('max(id),gender')->all();
// 		$allData = TestModel::findBySql('SELECT max(id),gender FROM user group by gender')->asArray()->all();
// 		$allData = TestModel::find()->all();
// 		$allData = Json::decode(Json::encode($allData),TRUE);
// 		var_dump($allData);
		
		//主键查询，修改
// 		$primaryKey = 1;
// 		$oneData = TestModel::findOne($primaryKey);
// 		$oneData->name = 'test'.$currentTime;
// 		$oneData->save();
		
		//对象转数组
// 		var_dump(Json::decode(Json::encode($oneData),TRUE));
		
		
		return $this->render('index');
	}
	
	public function actionSharding()
	{
		$currentTime = time();
		echo date('Y-m-d H:i:s', $currentTime);
		
		//当前controller的name
// 		var_dump($this->id);
		
		//当前action的name
// 		var_dump($this->action->id);
	
		$shardingId = 1;
		 		
		//取到表
		$tableData = TestShardingModel::find($shardingId)->asArray()->all();
// 		var_dump($tableData);
		
		//取到具体数据
// 		$oneData = TestShardingModel::findOne($shardingId);
// 		var_dump($oneData);sharding
		return $this->render('sharding');
	}
	
}
