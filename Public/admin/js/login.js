/**
 * 前端登录业务类
 */
// alert("可以接收到login.js");
var login={
	check : function(){
		var admin_name	= $('input[name="admin_name"]').val();
		// alert(admin_name);
		var admin_pwd	= $('input[name="admin_pwd"]').val();
		if(!admin_name){
			dialog.error('用户名不能为空');
		}
		if(!admin_pwd){
			dialog.error('密码不能为空');
		}
		//执行异步请求
		// var url= "U('index/checkd')";
		var data={'admin_name':admin_name,'admin_pwd':admin_pwd};
		$.post(url,data,function(result){
			if(result.status==0){
				return dialog.error(result.message);
			}
			if(result.status==1){
				return dialog.success(result.message,url_add)
			}

		},'JSON');
	}
}