<?php
namespace app\ctrl;
class indexCtrl extends \core\MyFW
{
	public function index(){
		$a = \core\lib\conf::get('CTRL','route');
		$b = \core\lib\conf::get('ACTION','route');
		$c = new \core\lib\model();
		$data = 'hello world';
		$this->assign('data',$data);
		$this->display('index.html');
	}
}