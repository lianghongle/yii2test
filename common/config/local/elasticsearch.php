<?php

return [
	'elasticsearch' => [
		'class' => 'yii\elasticsearch\Connection',
		'nodes' => [
			['http_address' => '192.168.2.130:9200'],
        		// configure more hosts if you have a cluster
		],
	],
];