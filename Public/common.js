/**
 * 添加按钮操作
 */


$("#button-add").click(function(){
	var url =SCOPE.add_url;
	// var url ='add'
	window.location.href=url;
});

/**
 * 提交表单操作
 */
$("#button-singin").click(function(){
	var data=$("#form-cms").serializeArray();
	postData={};
	$(data).each(function(i){
		postData[this.name]=this.value;
	});
	//将获取到的数据使用ajax post给服务器
	var url=SCOPE.save_url;
	jump_url=SCOPE.jump_url;
	// var url= 'add';
	$.post(url,postData,function(result){
		 if(result.status == 1){
		// 	//成功
			return dialog.success(result.message,jump_url)
		}else if(result.status == 0){
		// 	//失败
		return dialog.error(result.message,'#')
		 }
	},'JSON');
});