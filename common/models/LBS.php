<?php

namespace models;

/**
 * 
 * 以用户为例
 * 
 * 1.信息存储，用户id，经纬度坐标，时间，以及其他需要过滤条件
 * 		数据库，elasticsearch等容易查询的存储工具
 * 
 * 2.用户上报信息
 * 		建议数据库和缓存各存储一份，优先使用缓存
 * 
 * 3.用户搜索信息
 * 		1.从新上报最新信息（经纬度在保留一定小数位后，新上报的位置信息可能不变）
 * 		2.在没有缓存相关搜索信息时，计算获取相应信息（包括过滤等），并放入缓存（设置过期时间，不宜过长），键可以为：经度_维度_用户id_其他过滤信息
 * 		3.先在缓存搜索（经度_维度_用户id_其他过滤信息），没有，进行2.有的话，直接获取
 * 		
 * 
 * @author neil.liang
 *
 */
class LBS {
	
	/**
	 * 
	 * 根据两点间的经纬度计算距离
	 * 
	 * @param arary $location1 	[$lng,$lat],$lng 经度,$lat 纬度
	 * @param array $location2  [$lng,$lat],$lng 经度,$lat 纬度
	 * @return number
	 */
	public static function getDistance($location1, $location2)
	{
		list($lng1, $lat1) = explode(',', $location1);
		list($lng2, $lat2) = explode(',', $location2);
	
		$earthRadius = 6367000;
		$lat1 = ($lat1 * pi() ) / 180;
		$lng1 = ($lng1 * pi() ) / 180;
		$lat2 = ($lat2 * pi() ) / 180;
		$lng2 = ($lng2 * pi() ) / 180;
		$calcLongitude = $lng2 - $lng1;
		$calcLatitude = $lat2 - $lat1;
		$stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2);  
		$stepTwo = 2 * asin(min(1, sqrt($stepOne)));
		$calculatedDistance = $earthRadius * $stepTwo;
		
		return ceil($calculatedDistance);
	}
	
}

?>