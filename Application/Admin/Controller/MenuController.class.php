<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller {

 public function main(){
     $this->display();
    }
     public function info(){
     $this->display();
    }
     public function pass(){
     $data=array();
     $getMenus=D('menu');
     $g=$getMenus->getMenu($data);
     $this->assign('g',$g); 
     $this->display();
    }
	public function add(){
		// $this->display();
		if($_POST){
			 if(!isset($_POST['m_name'])||!$_POST['m_name']){
                return show(0,'菜单名称不能为空');
             }
             $m=D("Menu")->insert($_POST);
             if($m){
                return show(1,'新增成功');
             }else{
                return show(0,'新增失败');
             }
		}else{
		$this->display();
	} 
}

    // public function menus(){
    //     $data=array();
    //     $getMenus=D('menu');
    //     $g=$getMenus->getMenu($data);
    //     $getMenus->assign('g',$g);
    // }

}