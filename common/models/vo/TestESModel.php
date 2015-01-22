<?php

namespace common\models\vo;

use yii;

class TestESModel extends \common\models\vo\base\ESActiveRecord
{
	/**
	 * define the index this record
	 *
	 * @return string the name of the index this record is stored in.
	 */
	public static function index()
	{
		return 'neil';
	}
	
	/**
	 * define type this record
	 *
	 * @return string the name of the type of this record.
	 */
	public static function type()
	{
		return 'testes';
	}
	
// 	public function rules()
// 	{
// 		return [
// 			[
// 				['id', 'name', 'age', 'registration_date'], 'safe'
// 			]
// 		];
// 	}
	
	/**
	 * 保存字段
	 *
	 * The attributes() method of elasticsearch ActiveRecord must to be implemented by child classes.
	 *
	 * @return array the list of attributes for this record
	 */
	public function attributes()
	{
		// path mapping for '_id' is setup to field 'id'
		return [
			'id',
			'name',
			'age',
			'registration_date'
		];
	}
	
	/**
	 * Defines a scope that modifies the `$query` to return only active(status = 1) customers
	 */
// 	public static function active($query)
// 	{
// 		$query->andWhere(['status' => 1]);
// 	}
}
