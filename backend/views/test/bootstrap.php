<?php

use yii\bootstrap\Nav;

echo 
Nav::widget([
	'items' => [
		[
			'label' => 'Home',
			'url' => ['site/index'],
			'linkOptions' => [],
		],
		[
			'label' => 'Dropdown',
			'items' => [
				[
					'label' => 'Level 1 - Dropdown A', 
					'url' => '#'
				],
				'<li class="divider"></li>',
				'<li class="dropdown-header">Dropdown Header</li>',
				[
					'label' => 'Level 1 - Dropdown B', 
					'url' => '#'
				],
			],
		],
	],
]);

//****************************************************

use yii\bootstrap\NavBar;
use yii\widgets\Menu;

NavBar::begin([
	'brandLabel' => 'NavBar Test'
]);

echo 
Nav::widget([
	'items' => [
		[
			'label' => 'Home', 
			'url' => ['/site/index']
		],
		[
			'label' => 'About', 
			'url' => ['/site/about']
		],
	],
]);

NavBar::end();

//****************************************************

use yii\bootstrap\Progress;

echo Progress::widget([
		'percent' => 60,
		'label' => 'test',
		]);

// styled
echo Progress::widget([
		'percent' => 65,
		'barOptions' => ['class' => 'progress-bar-danger']
		]);

// striped
echo Progress::widget([
		'percent' => 70,
		'barOptions' => ['class' => 'progress-bar-warning'],
		'options' => ['class' => 'progress-striped']
		]);

// striped animated
echo Progress::widget([
		'percent' => 70,
		'barOptions' => ['class' => 'progress-bar-success'],
		'options' => ['class' => 'active progress-striped']
		]);

// stacked bars
echo Progress::widget([
		'bars' => [
		['percent' => 30, 'options' => ['class' => 'progress-bar-danger']],
		['percent' => 30, 'label' => 'test', 'options' => ['class' => 'progress-bar-success']],
		['percent' => 35, 'options' => ['class' => 'progress-bar-warning']],
		]
		]);

//********************************************

use yii\bootstrap\Tabs;

echo 
Tabs::widget([
	'items' => [
		[
			'label' => 'One',
			'content' => 'Anim pariatur cliche...',
			'active' => true
		],
		[
			'label' => 'Two',
			'content' => 'Anim pariatur cliche...',
			'headerOptions' => [],
			'options' => ['id' => 'myveryownID'],
		],
		[
			'label' => 'Dropdown',
			'items' => [
				[
				'label' => 'DropdownA',
				'content' => 'DropdownA, Anim pariatur cliche...',
				],
				[
				'label' => 'DropdownB',
				'content' => 'DropdownB, Anim pariatur cliche...',
				],
			],
		],
	],
]);

//****************************************

use yii\bootstrap\Modal;

Modal::begin([
'header' => '<h2>Hello world</h2>',
'toggleButton' => ['label' => 'click me'],
]);

echo 'Say hello...';

Modal::end();

//*******************************************

use yii\bootstrap\Collapse;

echo 
Collapse::widget([
	'items' => [
		// equivalent to the above
		[
			'label' => 'Collapsible Group Item #1',
			'content' => 'Anim pariatur cliche...',
			// open its content by default
			'contentOptions' => ['class' => 'in']
		],
		// another group item
		[
			'label' => 'Collapsible Group Item #1',
			'content' => 'Anim pariatur cliche...',
			'contentOptions' => [],
			'options' => [],
		],
	]
]);

//************************************

use yii\bootstrap\Carousel;

echo 
Carousel::widget([
	'items' => [
		// the item contains only the image
		'<img src="http://cdn.idreamsky.com/group1/M00/1A/4F/CjICUFRAyouAY__cAAAqtgr0wno431.png"/>',
		// equivalent to the above
		[
			'content' => '<img src="http://cdn.idreamsky.com/group1/M00/1A/4F/CjICUFRAyqaADJCKAAAx0WBxIBQ183.png"/>'
		],
		// the item contains both the image and the caption
		[
			'content' => '<img src="http://cdn.idreamsky.com/group1/M00/1A/4E/CjICUFRAx2uAIB5MAAAf1ahfVPA805.png"/>',
			'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
			'options' => [],
		],
	]
]);

//********
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\Button;

// a button group with items configuration
echo 
ButtonGroup::widget([
	'buttons' => [
		['label' => 'A'],
		['label' => 'B'],
	]
]);
echo '<br>';
// button group with an item as a string
echo 
ButtonGroup::widget([
	'buttons' => [
		Button::widget([
			'label' => 'A',
			'options' => ['class' => 'btn-lg'],
		]),
		['label' => 'B'],
	]
]);

//***************************
use yii\bootstrap\ButtonDropdown;
// a button group using Dropdown widget
echo 
ButtonDropdown::widget([
	'label' => 'Action',
	'dropdown' => [
		'items' => [
			['label' => 'DropdownA', 'url' => '/'],
			['label' => 'DropdownB', 'url' => '#'],
		],
	],
]);

//************************************
use yii\bootstrap\Alert;

echo 
Alert::widget([
	'options' => [
		'class' => 'alert-info',
	],
	'body' => 'Say hello...',
]);


Alert::begin([
	'options' => [
		'class' => 'alert-warning',
	],
]);

echo 'Say hello...';
Alert::end();

