<?php

namespace backend\controllers;

use backend\controllers\base\BaseTestController;

/*
 * 以用户为例
 * 1.信息存储，用户id，经纬度坐标，时间，以及其他需要过滤条件
 * 		数据库，elasticsearch等容易查询的存储工具
 * 2.用户上报信息
 * 
 * 3.用户搜索信息
 * 		1.从新上报最新信息（经纬度在保留一定小数位后，新上报的位置信息可能不变）
 * 		2.在没有缓存相关搜索信息时，计算获取相应信息（包括过滤等），并放入缓存（设置过期时间，不宜过长），键可以为：经度_维度_用户id_其他过滤信息
 * 		3.先在缓存搜索（经度_维度_用户id_其他过滤信息），没有，进行2.有的话，直接获取
 * 
 */
class TestLBSController extends BaseTestController
{
	public function actionIndex()
	{
		$min=1;
		$max=10;
		$tmp[][]=array();
		$tmp[0][0]=1;
		for($i=1;$i<$max;$i++){
			for($j=0;$j<=$i;$j++){
				if($i==0 || $i==$j){
					$tmp[$i][$j]=1;
				}else{
					$tmp[$i][$j]=$tmp[$i-1][$j-1]+$tmp[$i-1][$j];
				}
			}
		
		}
		foreach($tmp as $value){
			foreach($value as $val);
		
			echo $val.'';
			echo "<p>";
		}
		
// 		return $this->render('index');
	}
	
}
