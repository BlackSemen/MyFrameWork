<?php
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\MyFW
{
	public function index(){
		$data = 'Hello World';
		$this->assign('data',$data);
		$this->display('index.html');
	}
	
}