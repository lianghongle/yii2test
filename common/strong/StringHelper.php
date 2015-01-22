<?php

namespace common\strong;

use yii\base\InvalidParamException;

class StringHelper extends \yii\helpers\StringHelper{
	
	public static $_PAD_BOTH = STR_PAD_BOTH;
	public static $_PAD_LEFT = STR_PAD_LEFT;
	public static $_PAD_RIGHT = STR_PAD_RIGHT;
	
	/**
	 * 
	 * 把字符串填充为指定的长度
	 * 
	 * @param string $string		规定要填充的字符串
	 * @param int $length			规定新字符串的长度。如果该值小于原始字符串的长度，则不进行任何操作。
	 * @param string $padString		规定供填充使用的字符串。默认是' '。
	 * @param string $padType		规定填充字符串的方向，$_PAD_BOTH、$_PAD_LEFT、$_PAD_RIGHT（默认）
	 * @throws InvalidParamException
	 * @return string
	 */
	public static function pad( $string, $length, $padString = ' ', $padType = null)
	{
		if(!is_string($string)){
			throw new InvalidParamException();
		}

		if(strlen($padString) == 0){
			throw new InvalidParamException();
		}
		
		if($padType == null){
			$padType = self::$_PAD_RIGHT;
		}
		return str_pad( $string, $length, $padString, $padType );
	}
	
}

?>