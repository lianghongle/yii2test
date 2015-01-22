<?php
return [ 
		
	// default
	'db' => [ 
		'class' => '\yii\db\Connection',
		'dsn' => 'mysql:host=192.168.27.128;port=3306;dbname=yii2test',
		'username' => 'root',
		'password' => 'lhl',
		'tablePrefix' => '',
		'attributes' => [ ],
		'enableSchemaCache' => true,
		'schemaCacheDuration' => 3600,
		'schemaCacheExclude' => [ ],
		'schemaCache' => 'dbSchemaCache',
		'enableQueryCache' => false,
		'charset' => 'UTF8' 
	],
	
// 	'db' => [ 
// 		'class' => '\yii\db\Connection',
// // 		'dsn' => 'mysql:host=192.168.2.132:3306;dbname=test',
// 		'dsn' => 'mysql:host=192.168.2.132;port=3307;dbname=test',
// 		'username' => 'root',
// 		'password' => '',
// 		'tablePrefix' => '',
// 		'attributes' => [ ],
// 		'enableSchemaCache' => true,
// 		'schemaCacheDuration' => 3600,
// 		'schemaCacheExclude' => [ ],
// 		'schemaCache' => 'dbSchemaCache',
// 		'enableQueryCache' => false,
// 		'charset' => 'UTF8' 
// 	] 
];