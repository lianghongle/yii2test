<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\base\Object;
use common\service\rongcloud\RongcloudServerAPI;

class RongcloudController extends BaseController
{
	
	public function actionIndex()
	{
		$appKey = '8luwapkvu0sbl';
		$AppSecret = 'VMBJFguFxSnAL';
		
		$p = new RongcloudServerAPI($appKey,$AppSecret);
		$r = $p->getToken('11','22','33');
		print_r($r);
// 		return $this->render('index');
	}
	
}
