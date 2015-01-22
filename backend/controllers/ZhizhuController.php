<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\VarDumper;

class ZhizhuController extends BaseController {
	public function actionIndex() {
		header ( "Content-type: text/html; charset=utf-8" );
		
		define ( 'URL_SEPARATOR', '/' );
		
		//入口文件
		$entrance = 'index.html';
		
		//路径
		$baseUrl = 'http://www.zi-han.net/theme/hplus/';
		
		// echo substr($baseUrl,-1);
		if (substr ( $baseUrl, - 1 ) == '/') {
			$baseUrl = substr ( $baseUrl, 0, strlen ( $baseUrl ) - 1 );
		}
		// echo $baseUrl;die;
		
		$url = $baseUrl . URL_SEPARATOR . $entrance;
		// echo $url;die;
		
		//解析url
		$result1 = parse_url ( $url );
		// VarDumper::dump($result1);
		
		//抓取入口文件内容
		$result2 = $this->curl_get ( $url );
		// VarDumper::dump($result2);
		
		//获取入口文件中的链接
		$reuslt3 = $this->get_page_urls ( $result2, '' );
		// VarDumper::dump($reuslt3);
		
		//链接转换成绝对路径
		$result4 = $this->xdtojd ( $baseUrl, $reuslt3 );
		VarDumper::dump ( $result4 );
		echo '<hr>';
		
		//删除外站url
		$result5 = $this->other_site_url_del ( $result4, $baseUrl );
		VarDumper::dump ( $result5 );
		
	}
	
	/**
	 * 下载载页面
	 * 
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
		curl_close ( $ch );
		if ($code != '404' && $result) {
			return $result;
		}
	}
	
	/**
	 * 取页面url链接
	 * 
	 * @param unknown $spider_page_result        	
	 * @param unknown $base_url        	
	 * @return void unknown
	 */
	function get_page_urls($spider_page_result, $base_url = '') {
		$get_url_result = preg_match_all ( "/<[a|A].*?href=[\'\"]{0,1}([^>\'\"\ ]*).*?>/", $spider_page_result, $out );
		// VarDumper::dump($out);
		if ($get_url_result) {
			return $out [1];
		} else {
			return;
		}
	}
	
	// 相对路径转绝对路径
	function xdtojd($base_url, $url_list) {
		if (is_array ( $url_list )) {
			foreach ( $url_list as $url_item ) {
				if (preg_match ( "/^(http:\/\/|https:\/\/|javascript:)/", $url_item )) {
					$result_url_list [] = $url_item;
				} else {
					if (preg_match ( "/^\//", $url_item )) {
						$real_url = $base_url . $url_item;
					} else {
						$real_url = $base_url . "/" . $url_item;
					}
					// real_url = 'http://www.sumpay.cn/'.$url_item;
					$result_url_list [] = $real_url;
				}
			}
			return $result_url_list;
		} else {
			return;
		}
	}
	
	// 删除其他站点url
	function other_site_url_del($jd_url_list, $url_base) {
		if (is_array ( $jd_url_list )) {
			foreach ( $jd_url_list as $all_url ) {
				echo $all_url;
				if (strpos ( $all_url, $url_base ) === 0) {
					$all_url_list [] = $all_url;
				}
			}
			return $all_url_list;
		} else {
			return;
		}
	}
	
	// 删除相同URL
	function url_same_del($array_url) {
		if (is_array ( $array_url )) {
			$insert_url = array ();
			$pizza = file_get_contents ( $log );
			if ($pizza) {
				$pizza = explode ( "\r\n", $pizza );
				foreach ( $array_url as $array_value_url ) {
					if (! in_array ( $array_value_url, $pizza )) {
						$insert_url [] = $array_value_url;
					}
				}
				if ($insert_url) {
					foreach ( $insert_url as $key => $insert_url_value ) {
						// 这里只做了参数相同去重处理
						$update_insert_url = preg_replace ( '/=[^&]*/', '=leesec', $insert_url_value );
						foreach ( $pizza as $pizza_value ) {
							$update_pizza_value = preg_replace ( '/=[^&]*/', '=leesec', $pizza_value );
							if ($update_insert_url == $update_pizza_value) {
								unset ( $insert_url [$key] );
								continue;
							}
						}
					}
				}
			} else {
				$insert_url = array ();
				$insert_new_url = array ();
				$insert_url = $array_url;
				foreach ( $insert_url as $insert_url_value ) {
					$update_insert_url = preg_replace ( '/=[^&]*/', '=leesec', $insert_url_value );
					$insert_new_url [] = $update_insert_url;
				}
				$insert_new_url = array_unique ( $insert_new_url );
				foreach ( $insert_new_url as $key => $insert_new_url_val ) {
					$insert_url_bf [] = $insert_url [$key];
				}
				$insert_url = $insert_url_bf;
			}
			return $insert_url;
		} else {
			return;
		}
	}
}