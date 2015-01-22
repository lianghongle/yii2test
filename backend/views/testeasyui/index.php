<?php
use yii\helpers\Url;

$this->params['selected-nav']='home';
$this->params['content']=[
    'main-tab-home'=>[
        'method'=>'add',
        'clientOptions'=>[
            'title'=>'Home',
            'data'=>['url'=>Url::to([''],true)],
            'closable'=>false,
            'iconCls'=>'fa fa-home',
            //bisa juga menggunakan $this->render('partials/_home',[],true) jika content cukup kompleks
            'content'=>'isi content di sini ' 
        ]
    ]
];