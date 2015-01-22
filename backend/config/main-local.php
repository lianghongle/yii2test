<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'uxUkEW3T4i8lu59PPcN5Mx2GJK8suMKd',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
//     $config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['debug'] = [
		'class' => 'yii\\debug\\Module',
		//如果是访问虚拟机，要用和虚拟机一个网段的那个ip
		'allowedIPs' => ['192.168.126.1', '127.0.0.1', '::1'],
		'panels' => [
			'elasticsearch' => [
				'class' => 'yii\\elasticsearch\\DebugPanel',
			],
			'mongodb' => [
				'class' => 'yii\\mongodb\\debug\\MongoDbPanel',
			],
		],
    ];
    
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
		'class' => 'yii\gii\Module',
		'allowedIPs' => ['192.168.126.1','127.0.0.1', '::1', '192.168.0.*'] // adjust this to your needs
    ];
}

return $config;
