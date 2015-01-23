<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    
    'components' => yii\helpers\ArrayHelper::merge(
        require (__DIR__ . '/' . YII_ENV . '/db.php'),
        require (__DIR__ . '/' . YII_ENV . '/cache.php'),
    	require (__DIR__ . '/' . YII_ENV . '/redis.php'),
    	require (__DIR__ . '/' . YII_ENV . '/mongodb.php'),
    	require (__DIR__ . '/' . YII_ENV . '/elasticsearch.php')
    ),
//     'components' => [
// 	    'cache' => [
// 		    'class' => 'yii\caching\FileCache',
// 	    ],
//     ],
];
