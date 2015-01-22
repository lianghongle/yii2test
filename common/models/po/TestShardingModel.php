<?php

namespace common\models\po;

use Yii;

class TestShardingModel extends \common\models\po\base\ShardingActiveRecord
{
	public static function tableName()
	{
		return 'user';
	}
	
	public static function getDB()
	{
		return Yii::$app->mytest;
	}
	
//     public static function shardingKey()
// 	{
// 		return 'id';
// 	}

// 	public static function shardingTable($shardingId)
// 	{
// 		$dbIndex = $shardingId % 10;
// 		$tbIndex = ( $shardingId / 10 ) % 10;
// 		return "mytest_{$dbIndex}.user_{$tbIndex}";
// 	}

//     public static function tableName($shardingId = 1)
//     {
//         return static::shardingTable($shardingId);
//     }

//     public static function getDb()
//     {
//         return Yii::$app->get('mytest');
//     }
}
