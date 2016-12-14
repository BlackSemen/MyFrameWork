<?php
namespace core\lib;
use core\lib\conf;
class route{
	public $ctrl;
	public $action;
	public function __construct(){
		/**
		*1.隐藏index.php
		*2.获取url参数部分
		*3.返回对应控制器和方法
		*/
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
			$path = $_SERVER['REQUEST_URI'];
			$patharr = explode('/',trim($path,'/'));
			unset($patharr[0]);
			if(isset($patharr[1])){
				$this->ctrl = $patharr[1];
				unset($patharr[1]);
			}
			if(isset($patharr[2])){
				$this->action = $patharr[2];
				unset($patharr[2]);
			}else{
				$this->action = conf::get('ACTION','route');
			}
			$count = count($patharr) + 3;
			$i = 3;
			while($i<$count){
				if(isset($patharr[$i+1])){
					$_GET[$patharr[$i]] = $patharr[$i+1];
				}
				$i = $i+2;
			}
		}else{
			$this->ctrl = conf::get('CTRL','route');;
			$this->action = conf::get('ACTION','route');;
		}
	}
}