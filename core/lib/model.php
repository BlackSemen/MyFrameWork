<?php
namespace core\lib;
use core\lib\conf;
include 'medoo.php';

class model extends \medoo{
	public function __construct(){
		$option = conf::all('database');
		parent::__construct($option);
	}
}