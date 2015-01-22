<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [

    'id' => 'app-backend',

    'basePath' => dirname(__DIR__),
    
    'language' => 'zh-CN', 
    
    'controllerNamespace' => 'backend\controllers',
    
    'bootstrap' => ['log'],
    
    //启用模块
    'modules' => [
	    'admin' => [
	    	'class' => 'backend\modules\admin\admin',
	    ],
	],
    
	//使用组件
    'components' => [
    
    	//普通用户
        'user' => [
            'identityClass' => 'backend\models\User',
            'enableAutoLogin' => true,
        ],
        
        //后台管理员
//         'admin' => [
// 	        'identityClass' => 'backend\modules\admin\models\User',
// 	        'class' => 'yii\web\User',
// 	        'enableAutoLogin' => true,
//         ],
        
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        //国际化
        'i18n' => [
	        'translations' => [
		        '*' => [
			        'class' => 'yii\i18n\PhpMessageSource',
			        //'basePath' => '@app/messages',
			        //'sourceLanguage' => 'en-US',
// 			        'fileMap' => [
// 				        'app' => 'app.php',
// 				        'app/error' => 'error.php',
// 			        ],
		        ],
	        ],
        ],
        
    ],
    
    'params' => $params,
];
