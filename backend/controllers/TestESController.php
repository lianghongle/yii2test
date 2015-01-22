<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;

use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;
use common\models\vo\TestESModel;
use yii\helpers\Json;

/*
 * 
 * http://192.168.2.130:9200/_plugin/head/
 * 
 */
class TestESController extends BaseTestController
{
	public function actionAdd()
	{
		$esModel = new TestESModel();
		$esModel->primaryKey = 5; // in this case equivalent to $customer->id = 1;
		//$esModel->name = 'dgdfgdfg';
		$esModel->attributes = [
			'name' => 'hugh',
			'age' => 25,
			'registration_date' => time()
		];
		$result = $esModel->save();
		var_dump($result);
		
		return $this->render('index');
	}
	
	public function actionGet()
	{
		// get a record by pk
// 		$esModel = TestESModel::get(8);
// 		var_dump(ArrayHelper::toArray($esModel));die;

		// get multiple records by pk
// 		$esModel = TestESModel::mget([1,6,8,9]); 
// 		var_dump(ArrayHelper::toArray($esModel));die;
		
		// find by query, note that you need to configure mapping for this field in order to find records properly
// 		$esModel = TestESModel::find()->where(['name' => 'test'])->one(); 
// 		var_dump(ArrayHelper::toArray($esModel));die;
		
		// find all by query (using the `active` scope)
// 		$esModel = TestESModel::find()->asArray()->active()->all(); 
// 		var_dump($esModel);die;
		
		// http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/query-dsl-match-query.html
		// articles whose title contains "yii"
		$result = TestESModel::find()->query(["match" => ["name" => "test"]])->count(); 
// 		var_dump($result);die;
		var_dump(ArrayHelper::toArray($result));
		
		// http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/query-dsl-flt-query.html
// 		$query = TestESModel::find()->query([
// 				"fuzzy_like_this" => [
// 						"fields" => ["title", "description"],
// 						"like_text" => "This query will return articles that are similar to this text :-)",
// 						"max_query_terms" => 12
// 					]
// 				]);
		
		// gives you all the documents
// 		$query->all(); 
		
		// you can add facets to your search:
// 		$query->addStatisticalFacet('click_stats', ['field' => 'visit_count']);
		
		// gives you all the records + stats about the visit_count field. e.g. mean, sum, min, max etc...
// 		$query->search(); 
		
		return $this->render('get');
	}
	
}
