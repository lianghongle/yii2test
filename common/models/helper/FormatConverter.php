<?php

namespace common\models\helper;

class FormatConverter extends \common\strong\BaseFormatConverter{

	public static function convert( $data, $from = '', $to = '', $params = [] )
	{
		list($from,$to) = array_map('trim', [$from,$to]);
		list($from,$to) = array_map('strtolower', [$from,$to]);
		
// 		var_dump($from,$to);
		
		if( $from == '' || $to == '' ){
			
		}
		elseif( $from == 'xml' && ( $to == 'array' || $to == '[]') ){
			$data = XmlHelper::xml2array($data);
		}elseif( $from == 'obj' && $to == 'array' ){
			$data = \yii\helpers\ArrayHelper::toArray($data);
		}
		else{
			
		}
		
		return $data;
	}
	
}
