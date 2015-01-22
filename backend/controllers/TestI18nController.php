<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;

use yii\helpers\VarDumper;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

use yii;

/**
 * 
 * 依靠BasePath/messages/LanguageID/CategoryName.php 这样约定好的翻译文件格式可省略配置 fileMap 。
 * 
 * @author neil.liang
 *
 */
class TestI18nController extends BaseTestController
{
	public function actionIndex()
	{
		//基础
		$test_1 = Yii::t('test', 'test');
		var_dump($test_1);
		
		//命名占位符
		$username = 'Alexander';
		$test_2 = Yii::t('test', 'Hello, {username}', [
				'username' => $username,
				]);
		var_dump($test_2);
		
		$sum = 42;
		
		//位置占位符
		$test_3 = Yii::t('test', 'Balance: {0}', $sum);
		var_dump($test_3);
		
		//高级占位符格式
		$test_4 = Yii::t('test', 'Balance: {0, number}', $sum);
		var_dump($test_4);
		
		//你可以指定内置格式风格 (integer, currency, percent)的其中一个：
		$test_5 = Yii::t('test', 'Balance: {0, number, currency}', $sum);
		var_dump($test_5);
		
		//或指定自定义格式：
		$test_6 = Yii::t('test', 'Balance: {0, number, ,000,000000}', $sum);
		var_dump($test_6);
		
		$test_7 = Yii::t('test', 'Balance: {0, number, ,000,000000}---{1, number, currency}', [$sum,$sum]);
		var_dump($test_7);
		
		return $this->render('index');
	}
}
