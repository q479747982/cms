<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<script type="text/javascript" src="/cms/Public/jquery.min.js"></script>
	<script type="text/javascript" src="/cms/Public/admin/js/bootstrap.js"></script>
	<script type="text/javascript" src="/cms/Public/admin/js/npm.js"></script>
	<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/style.css">
</head>
<body>

  <form class="form-horizontal" role="form" id="form-cms" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">菜单名称</label>
    <div class="col-sm-5">
      <input type="text" name="m_name" class="form-control" placeholder="菜单名称">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">是否显示</label>
    <div class="col-sm-10">
        <input type="radio" name="sex" value="1"  checked="checked"> 是<br>
  		<input type="radio" name="sex" value="2"> 否<br>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" id="button-singin" class="btn btn-default">提交</button>
    </div>
  </div>
</form>
<script type="text/javascript" src="/cms/Public/dialog/layer.js"></script>
    <script type="text/javascript" src="/cms/Public/dialog.js"></script>
    <script type="text/javascript" src="/cms/Public/admin/js/login.js"></script>
<script type="text/javascript" src="/cms/Public/common.js"></script>
<script type="text/javascript">
var SCOPE={
  'save_url':'add',
  'jump_url':'pass',

}
</script>
</body>
</html>