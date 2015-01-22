<?php

namespace common\models\po\base;

use yii;
use yii\db\ActiveQuery;
// use yii\base\InvalidParamException;
// use yii\base\NotSupportedException;
// use yii\base\InvalidConfigException;
// use yii\helpers\ArrayHelper;
// use yii\helpers\Inflector;
// use yii\helpers\StringHelper;

class ShardingActiveRecord extends \common\strong\ActiveRecord
{
	public static function find($shardingId = 0)
	{	
// 		return Yii::createObject(ActiveQuery::className(), [get_called_class()]);
		
// 		return TestModel::find();
		$find = Yii::createObject(ActiveQuery::className(), [get_called_class()]);
// 		var_dump($find);
		return $find;
	}
	
//     public static function shardingKey(){
//         throw new NotSupportedException(__METHOD__ . ' is not supported.');
//     }

//     public static function shardingTable($id){
//         throw new NotSupportedException(__METHOD__ . ' is not supported.');
//     }

//     public function getShardingValue()
//     {
//         $shardingKey = static::shardingKey();
//         return $this->getAttribute($shardingKey);
//     }

//     protected static function findByCondition($id = null, $condition = null, $one = null)
//     {
//         if(null === $condition){
//             throw new InvalidParamException(__METHOD__ . ' $condition Invalid Param Exception');
//         }

//         if(null === $one){
//             throw new InvalidParamException(__METHOD__ . ' $one Invalid Param Exception');
//         }

//         if(null === $id){
//             throw new InvalidParamException(__METHOD__ . ' $id Invalid Param Exception');
//         }

//         $query = static::find();
//         $query->sharding($id);

//         if (!ArrayHelper::isAssociative($condition)) {
//             // query by primary key
//             $primaryKey = static::primaryKey();
//             if (isset($primaryKey[0])) {
//                 $pk = $primaryKey[0];
//                 if (!empty($query->join) || !empty($query->joinWith)) {
//                     $pk = static::tableName() . '.' . $pk;
//                 }
//                 $condition = [$pk => $condition];
//             } else {
//                 throw new InvalidConfigException(get_called_class() . ' must have a primary key.');
//             }
//         }

//         return $one ? $query->andWhere($condition)->one() : $query->andWhere($condition)->all();
//     }

//     public static function updateAll($id = null, $attributes = null, $condition = '', $params = [])
//     {
//         if(null === $attributes){
//             throw new InvalidParamException(__METHOD__ . ' $attributes Invalid Param Exception');
//         }

//         if(null === $id){
//             throw new InvalidParamException(__METHOD__ . ' $id Invalid Param Exception');
//         }

//         $table = static::shardingTable($id);

//         $command = static::getDb()->createCommand();
//         $command->update($table, $attributes, $condition, $params);

//         return $command->execute();
//     }

//     public static function updateAllCounters($id = null, $counters = null, $condition = '', $params = [])
//     {
//         if(null === $counters){
//             throw new InvalidParamException(__METHOD__ . ' $counters Invalid Param Exception');
//         }

//         if(null === $id){
//             throw new InvalidParamException(__METHOD__ . ' $id Invalid Param Exception');
//         }

//         $table = static::shardingTable($id);

//         $n = 0;
//         foreach ($counters as $name => $value) {
//             $counters[$name] = new Expression("[[$name]]+:bp{$n}", [":bp{$n}" => $value]);
//             $n++;
//         }
//         $command = static::getDb()->createCommand();
//         $command->update($table, $counters, $condition, $params);

//         return $command->execute();
//     }

//     public static function deleteAll($id = null, $condition = '', $params = [])
//     {
//         if(null === $id){
//             throw new InvalidParamException(__METHOD__ . ' $id Invalid Param Exception');
//         }

//         $table = static::shardingTable($id);

//         $command = static::getDb()->createCommand();
//         $command->delete($table, $condition, $params);

//         return $command->execute();
//     }

//     public static function find()
//     {
//         return Yii::createObject(ActiveQuery::className(), [get_called_class()]);
//     }

//     public static function getTableSchema($id = 1)
//     {
//     	$schema = static::getDb()->getSchema()->getTableSchema(static::shardingTable($id));
//         if ($schema !== null) {
//             return $schema;
//         } else {
//             throw new InvalidConfigException("The table does not exist: " . static::tableName());
//         }
//     }

//     protected function insertInternal($attributes = null)
//     {
//         $shardingValue = $this->getShardingValue();
//         $table = static::shardingTable($shardingValue);

//         if (!$this->beforeSave(true)) {
//             return false;
//         }
//         $values = $this->getDirtyAttributes($attributes);
//         if (empty($values)) {
//             foreach ($this->getPrimaryKey(true) as $key => $value) {
//                 $values[$key] = $value;
//             }
//         }
//         $db = static::getDb();
//         $command = $db->createCommand()->insert($table, $values);
//         if (!$command->execute()) {
//             return false;
//         }
//         $table = $this->getTableSchema($shardingValue);
//         if ($table->sequenceName !== null) {
//             foreach ($table->primaryKey as $name) {
//                 if ($this->getAttribute($name) === null) {
//                     $id = $table->columns[$name]->phpTypecast($db->getLastInsertID($table->sequenceName));
//                     $this->setAttribute($name, $id);
//                     $values[$name] = $id;
//                     break;
//                 }
//             }
//         }

//         $changedAttributes = array_fill_keys(array_keys($values), null);
//         $this->setOldAttributes($values);
//         $this->afterSave(true, $changedAttributes);

//         return true;
//     }

//     public function updateAttributes($attributes)
//     {
//         $shardingValue = $this->getShardingValue();

//         $attrs = [];
//         foreach ($attributes as $name => $value) {
//             if (is_integer($name)) {
//                 $attrs[] = $value;
//             } else {
//                 $this->$name = $value;
//                 $attrs[] = $name;
//             }
//         }

//         $values = $this->getDirtyAttributes($attrs);
//         if (empty($values)) {
//             return 0;
//         }

//         $rows = $this->updateAll($shardingValue, $values, $this->getOldPrimaryKey(true));

//         $oldAttributes = $this->getOldAttributes();
//         $attributes = $this->getAttributes();
//         foreach ($values as $name => $value) {
//             $oldAttributes[$name] = $attributes[$name];
//         }
//         $this->setOldAttributes($oldAttributes);

//         return $rows;
//     }

//     protected function deleteInternal()
//     {
//         $shardingValue = $this->getShardingValue();

//         $result = false;
//         if ($this->beforeDelete()) {
//             // we do not check the return value of deleteAll() because it's possible
//             // the record is already deleted in the database and thus the method will return 0
//             $condition = $this->getOldPrimaryKey(true);
//             $lock = $this->optimisticLock();
//             if ($lock !== null) {
//                 $condition[$lock] = $this->$lock;
//             }
//             $result = $this->deleteAll($shardingValue, $condition);
//             if ($lock !== null && !$result) {
//                 throw new StaleObjectException('The object being deleted is outdated.');
//             }
//             $this->setOldAttributes(null);
//             $this->afterDelete();
//         }

//         return $result;
//     }

//     public function updateCounters($counters)
//     {
//         $shardingValue = $this->getShardingValue();

//         $oldAttributes = $this->getOldAttributes();
//         $attributes = $this->getAttributes();
//         if ($this->updateAllCounters($shardingValue, $counters, $this->getOldPrimaryKey(true)) > 0) {
//             foreach ($counters as $name => $value) {
//                 $attributes[$name] += $value;
//                 $oldAttributes[$name] = $attributes[$name];
//             }
//             $this->setOldAttributes($oldAttributes);
//             $this->setAttributes($attributes);
//             return true;
//         } else {
//             return false;
//         }
//     }

//     protected function updateInternal($attributes = null)
//     {
//         $shardingValue = $this->getShardingValue();

//         if (!$this->beforeSave(false)) {
//             return false;
//         }
//         $values = $this->getDirtyAttributes($attributes);
//         if (empty($values)) {
//             $this->afterSave(false, $values);
//             return 0;
//         }
//         $condition = $this->getOldPrimaryKey(true);
//         $lock = $this->optimisticLock();
//         if ($lock !== null) {
//             if (!isset($values[$lock])) {
//                 $values[$lock] = $this->$lock + 1;
//             }
//             $condition[$lock] = $this->$lock;
//         }
//         // We do not check the return value of updateAll() because it's possible
//         // that the UPDATE statement doesn't change anything and thus returns 0.
//         $rows = $this->updateAll($shardingValue, $values, $condition);

//         if ($lock !== null && !$rows) {
//             throw new StaleObjectException('The object being updated is outdated.');
//         }

//         $changedAttributes = [];

//         $oldAttributes = $this->getOldAttributes();
//         foreach ($values as $name => $value) {
//             $changedAttributes[$name] = isset($oldAttributes[$name]) ? $oldAttributes[$name] : null;
//             $oldAttributes[$name] = $value;
//         }
//         $this->setOldAttributes($oldAttributes);

//         $this->afterSave(false, $changedAttributes);

//         return $rows;
//     }

//     public static function findOne($id = null, $condition = null)
//     {
//         if(null === $condition){
//             throw new InvalidParamException(__METHOD__ . ' $condition Invalid Param Exception');
//         }

//         if(null === $id){
//             throw new InvalidParamException(__METHOD__ . ' $id Invalid Param Exception');
//         }

//         return static::findByCondition($id, $condition, true);
//     }

//     public static function findAll($id = null, $condition = null)
//     {
//         if(null === $condition){
//             throw new InvalidParamException(__METHOD__ . ' $condition Invalid Param Exception');
//         }

//         if(null === $id){
//             throw new InvalidParamException(__METHOD__ . ' $id Invalid Param Exception');
//         }

//         return static::findByCondition($id, $condition, false);
//     }
}