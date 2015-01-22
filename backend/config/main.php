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
    'modules' => [
	    'admin' => [
	    	'class' => 'backend\modules\admin\admin',
	    ],
	],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
//         'admin' => [
// 	        'identityClass' => 'backend\modules\admin\models\Admin',
// 	        'class' => 'backend\modules\admin\models\Admin',
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
