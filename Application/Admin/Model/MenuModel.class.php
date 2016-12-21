<?php
namespace Admin\Model;
use Think\Model;
	class MenuModel extends Model{	

		public function insert($data=array()){
			if(!$data||!is_array($data)){
				return 0;
			}
		return	$this->add($data);
		}

		public function getMenu($data,$page,$pageSize=10){
			$data['status']=array('neq',-1);
			$offset=($page-1)*pageSize;
			$menu=$this->where($data)->limit($offset,$pageSize)->select();
			return $menu;
		}


	}