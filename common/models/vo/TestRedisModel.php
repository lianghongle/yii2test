<?php

namespace common\models\vo;

use yii;

class TestRedisModel extends \common\models\vo\base\RedisActiveRecord
{
	/**
	 * 保存字段
	 *
	 * The attributes() method of reids ActiveRecord must to be implemented by child classes.
	 *
	 * @return array the list of attributes for this record
	 */
	public function attributes()
	{
		return [
			'id',
			'name',
			'age',
			'registration_date'
		];
	}
	
	public function rules()
	{
		return [
			[['id', 'name', 'age', 'registration_date'], 'safe']
		];
	}
}
