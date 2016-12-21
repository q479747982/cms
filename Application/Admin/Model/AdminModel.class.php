<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{	

	private $_db='';
	public 	function __construct(){
		$this->_db=M('admin');
	}
	public function getAdmin_uesr($admin_name){
		 $rs=$this->_db->where('admin_name="'.$admin_name.'"')->find();
		return $rs;
	}
	public function test(){
		return 11111;
	}
}
