<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     $this->display();
    }
    public function checkd(){
    	$admin_name=$_POST['admin_name'];
    	$admin_pwd=$_POST['admin_pwd'];
    	$login=D('Admin');
        if(!trim($admin_name)){
           return show(0,'账号不能为空');
        }
        if(!trim($admin_pwd)){
           return show(0,'密码不能为空');
        }
        $l=$login->getAdmin_uesr($admin_name);
         // $l=$login->select();
       
        if(!$l){
            return show(0,'该用户不存在');
        }
        if($l["admin_pwd"]!=$admin_pwd){
            return show(0,'密码错误');
        }
        session('adminUser',$l);
        return show(1,'登录成功');
   }
   
}