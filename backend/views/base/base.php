<?php 
use yii\bootstrap\Collapse;

echo
Collapse::widget([
	'items' => [
		[
			'label' => 'Collapsible Group Item #1',
			'content' => 'Anim pariatur cliche...',
			'contentOptions' => [
				'class' => 'in'
			]
		],
		[
			'label' => 'Collapsible Group Item #1',
			'content' => 'Anim pariatur cliche...',
			'contentOptions' => [],
			'options' => [],
		],
		[
			'label' => 'Collapsible Group Item #1',
			'content' => 'Anim pariatur cliche...',
			'contentOptions' => [],
			'options' => [],
		],
		[
			'label' => 'Collapsible Group Item #1',
			'content' => 'Anim pariatur cliche...',
			'contentOptions' => [],
			'options' => [],
		],
	]
]);
?>