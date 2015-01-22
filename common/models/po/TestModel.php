<?php

namespace common\models\po;

use yii;

class TestModel extends \common\models\po\base\ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public static function getDB()
    {
        return Yii::$app->default;
    }
}
