<?php

namespace backend\controllers;

use backend\controllers\base\BaseController;

// use Yii;
// use yii\web\Controller;
use yii\base\Object;

// use yii\helpers\Html;
// use common\models\User;
// use backend\models\User2;
use yii\helpers\VarDumper;


use common\models\UnlimitedCategory;
// use yii\helpers\ArrayHelper;

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use common\models\User;

use common\models\helper\FormatConverter;
use common\models\helper\StringHelper;

class TestController extends BaseController
{
	public function actionIndex()
	{
		
		echo strtotime(date('Y-m-d',time())) ;die;
		
		echo time();
		
// 		var_dump(strlen(null));
		
// 		$data = StringHelper::pad('[]', 10 );
		
// 		VarDumper::dump($data);
		
		
// 		var_dump(str_pad('[]', 10));
		
// 		$data = FormatConverter::convert('<xml></xml>','XML','ARRAY');
// 		var_dump($data);

	}
	
	
	public function actionZhizhu()
	{
		header("Content-type: text/html; charset=utf-8");
		
		$url = 'http://www.zi-han.net/theme/hplus';
		$result1 = $this->curl_get($url);
		VarDumper::dump($result1);
		$reuslt2 = $this->get_page_urls ( $result1, '' );
// 		VarDumper::dump($reuslt2);
	}
	
	/**
	 * 下载载页面
	 * @param unknown $url
	 * @return mixed
	 */
	function curl_get($url) {
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_HEADER, 1 );
		$result = curl_exec ( $ch );
		$code = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );
		if ($code != '404' && $result) {
			return $result;
		}
		curl_close ( $ch );
	}
	
	/**
	 * 取页面url链接
	 * @param unknown $spider_page_result
	 * @param unknown $base_url
	 * @return void|unknown
	 */
	function get_page_urls($spider_page_result, $base_url = '') {
		$get_url_result = preg_match_all("/<[a|A].*?href=[\'\"]{0,1}([^>\'\"\ ]*).*?>/", $spider_page_result, $out);
		VarDumper::dump($out);
		if ($get_url_result) {
			return $out [1];
		} else {
			return;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function actionEasyui()
	{
		return $this->render('admin');
	}
	
	public function actionDb(){
		$user = User::find()->max('id')->one();
// 		var_dump($user);
	}
	
	public function actionAdmin(){
		
		return $this->render('admin');
	}
	
	/**
	 * 脚本调用入口
	 */
	public function actionScritp(){
		
	}
	
	/**
	 * 生成随机用户
	 */
	public function createUser(){
		
	}
	
	public function actionFacebook(){
		
		
		
// 		$App_ID = '583564938412015';
// 		$App_Secret = 'd0e961fe6afc65dc12e599c5e670d7f6';
		
		$App_ID = '702918233051683';
		$App_Secret = 'b1c484a3f5a513ab92fea7db129ef217';
		
		$Facebook = new \Facebook\Facebook(array(
				'app_id' => $App_ID,
				'app_secret' => $App_Secret
		));
		
// 		var_dump($Facebook);
// 		FacebookSession::setDefaultApplication($App_ID,$App_Secret);
		FacebookSession::enableAppSecretProof(false);

		$access_token = 'CAACEdEose0cBAEnwy5yXRfMwZANc3HLaZBsxayc1BkNBjvZAxlGnpbpMnE8J1V6wZA4tIZCkRWh0wCj12LXJ55kNOveweSHn4RWZB8HsWLdh7EhNwRNiVTfaZCxOqC9kV7tW7JTvZANee4TFk5D7T3faGYOy7UXTd2NAyAK2ZBt1q1ZBJK4lMqSjEvrL0Ah2Gfs81FEwv0RliMaj4TZBgo5Teml';
		
		
		$fb = new Facebook([
				'app_id' => $App_ID,
				'app_secret' => $App_Secret,
				//'default_access_token' => '{access-token}', // optional
				]);
		
		// Use one of the helper classes to get a Facebook\Entities\AccessToken entity.
		//   Facebook\Helpers\FacebookRedirectLoginHelper
		//   Facebook\Helpers\FacebookJavaScriptLoginHelper
		//   Facebook\Helpers\FacebookCanvasLoginHelper
		//   Facebook\Helpers\FacebookPageTabHelper
		
		try {
			// Get the Facebook\GraphNodes\GraphUser object for the current user:
			$response = $fb->get('/me', $access_token);
			$me = $response->getGraphUser();
			echo 'Logged in as ' . $me->getName();
		} catch(FacebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
		} catch(FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
		}
	}
	
	public function actionBootstrap(){
		
		return $this->render('index');
	}
	
    public function actionIndex2()
    {
    	
    	
//     	var_dump(UnlimitedCategory::$a);
//     	var_dump(UnlimitedCategory::b);
    	
    	$testData = array(
    			array(
    					'nodeId' => 3,
    					'parentId' => 1,
    					'description' => '',
    					'fullpath' => '0,1,3'
    			),
    			array(
    					'nodeId' => 4,
    					'parentId' => 2,
    					'description' => '',
    					'fullpath' => '0,2,4'
    			),
    			array(
	    				'nodeId' => 0,	
	    				'parentId' => 0,
	    				'description' => '',
    					'fullpath' => '0'
    			),
    			array(
    					'nodeId' => 1,
    					'parentId' => 0,
    					'description' => '',
    					'fullpath' => '0,1'
    			),
    			array(
    					'nodeId' => 2,
    					'parentId' => 0,
    					'description' => '',
    					'fullpath' => '0,2'
    			),
    			
    	);
    	
//     	ArrayHelper::multisort($testData, 'parentId');
//     	VarDumper::dump($testData,10,true);
    	
    	$UnlimitedCategory = new UnlimitedCategory($testData);
    	
    	VarDumper::dump($UnlimitedCategory,10,true);
    	
    	
//     	var_dump(XX::$a);
//     	var_dump(XX::b);
    	
    	
    	
//     	VarDumper::dump(yii::$app->db_admin,10,true);
//     	VarDumper::dump(yii::$app->db_test,10,true);
    	
//     	$user = new User();
//     	VarDumper::dump($user,10,true);
    	
//     	$user2 = new User2();
//     	VarDumper::dump($user2,10,true);
    	
//     	$db = Yii::$app->getDb();
    	
//     	VarDumper::dump($db,10,true);
    	
//     	$test = new Test(array(
//     			'name' => 'test',
//     	));
//     	var_dump($test);
    	
    	
    	//echo Html::encode('Test > test');
    	
//     	$test = new Test();
//     	$test = array(
//     			'1' => array(
//     					'2' => array(
//     							'3'=> array()
//     					)
//     			),
//     			'2' => 'xx'
//     	);
    	
//     	VarDumper::dump($test,2,true);
    	
//     	$ss = str_repeat('xx', 5);
//     	echo $ss;

//     	$user = User::findByUsername('admin888');
//     	VarDumper::dump($user,10,true);

//     	return $this->render('index');
    }
    
    public function actionKong()
    {
    	echo 'isset($a):';
    	VarDumper::dump(isset($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = '';".'<br>';
    	echo 'isset($a):';
    	$a = '';
    	VarDumper::dump(isset($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = 0;".'<br>';
    	echo 'isset($a):';
    	$a = 0;
    	VarDumper::dump(isset($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = null;".'<br>';
    	echo 'isset($a):';
    	$a = null;
    	VarDumper::dump(isset($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = false;".'<br>';
    	echo 'isset($a):';
    	$a = false;
    	VarDumper::dump(isset($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = array();".'<br>';
    	echo 'isset($a):';
    	$a = array();
    	VarDumper::dump(isset($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	
    	//*****************************
    	/*
    	echo 'empty($a):';
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = '';".'<br>';
    	echo 'empyt($a):';
    	$a = '';
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = 0;".'<br>';
    	echo 'empyt($a):';
    	$a = 0;
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = null;".'<br>';
    	echo 'empyt($a):';
    	$a = null;
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = array();".'<br>';
    	echo 'empyt($a):';
    	$a = array();
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = false;".'<br>';
    	echo 'empyt($a):';
    	$a = false;
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	
    	echo '$a' . " = true;".'<br>';
    	echo 'empyt($a):';
    	$a = true;
    	VarDumper::dump(empty($a),10,true);
    	echo '<hr>';
    	unset($a);
    	*/
    }
    
}

class Test extends Object{
	private $_name;
	
	public function getName()
	{
		return $this->_name;	
	}
	
	public function setName($name)
	{	
		$this->_name = $name;
	}
}

class XX extends UnlimitedCategory{
	
	public static $conf = array(
			
	); 
	
}
