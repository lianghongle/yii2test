<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;
use common\service\rongcloud\RongcloudServerAPI;

class TestRongcloudController extends BaseTestController
{
	
	public function actionIndex()
	{
		//当前controller的name、当前action的name
		var_dump($this->id,$this->action->id);
		
// 		$appKey = '8luwapkvu0sbl';
// 		$AppSecret = 'VMBJFguFxSnAL';
		
// 		$p = new RongcloudServerAPI($appKey,$AppSecret);
// 		$r = $p->getToken('11','22','33');
// 		print_r($r);
		return $this->render('index');
	}
	
}
