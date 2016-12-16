<?php
/**
 *入口文件
 *1.定义常量
 *2.加载函数库
 *3.启动框架
 */
 
 define('MyFW',str_replace('\\','/',dirname(realpath(__FILE__))));;
 define('CORE',MyFW.'/core');
 define('APP',MyFW.'/app');
 define('MODULE','app');
 
 define('DEBUG',true);

 include "vendor/autoload.php";
 
 if(DEBUG) {
	 $whoops = new \Whoops\Run;
	 $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	 $whoops->register();
	 ini_set('display_errors','On');
 }else{
	 ini_set('display_errors','off');
 }

 include CORE.'/common/function.php';
 include CORE.'/MyFW.php';
 
 spl_autoload_register('\core\MyFW::load');
 
 \core\MyFW::run();
