<?php

namespace common\models;

/**
 * 无限分类工具类
 * 
 * @author neil.liang
 *
 */
class UnlimitedCategory 
{	
	static $a = 'static a';
	const b = 'const b';
	
	private $originalData = array();
	
	private $formateData = array();
	
	/**
	 * 构造方法
	 * 
	 * @param unknown $data		parentId倒序asc排序数组
	 */
	public function __construct($data = array())
	{
// 		var_dump($data);
		$this->originalData = $data;
		$xx = $this->checkData();
// 		var_dump($xx);
		if($xx){
			self::init();
		}else{
			$this->data = array();
		}
	}
	
	protected function checkData()
	{
		$checkResult = false;
		
		if(is_array($this->originalData) && !empty($this->originalData)){
			foreach ($this->originalData as $val ){
				if( is_array($val) && !empty($val)
				&& array_key_exists('nodeId', $val) 
				&& isset($val['nodeId'])
				&& array_key_exists('parentId', $val) 
				&& isset($val['parentId'])
				){
					$checkResult = true;
				}else{
					$checkResult = false;
					break;
				}
			}
		}
		return $checkResult;
	}
	
	/**
	 * 初始化
	 */
	protected function init()
	{	
		$rootId = reset($this->originalData)['parentId'];
		foreach ($this->originalData as $key=>$val){
						
		}	
	}
	
	/**
	 * 获取所有节点
	 */
	public function getAll()
	{
		
	}
	
	public function getChildren($currentId)
	{
		$children = array();
		foreach ($this->originalData as $key=>$val){
			if($val['parentId'] == $currentId){
				$children[$val['nodeId']] = $val;
			}
		}
		return $children;
	}
	
	/**
	 * 获取当前节点所有字节点
	 * @param unknown $currentId
	 */
	public function getAllChildren($currentId)
	{
		
	}
	
	/**
	 * 获取当前节点的父节点
	 * @param unknown $currentId
	 */
	public function getParent($currentId)
	{
		
	}
	
	
}

?>