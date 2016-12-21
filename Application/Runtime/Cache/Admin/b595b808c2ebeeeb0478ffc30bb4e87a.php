<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>登录页面</title>
	<script type="text/javascript" src="/cms/Public/jquery.min.js"></script>
	<script type="text/javascript" src="/cms/Public/admin/js/bootstrap.js"></script>
	<script type="text/javascript" src="/cms/Public/admin/js/npm.js"></script>
	<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/style.css">
</head>
<body>

<div class="container">
      <form class="form-signin" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="admin_name" class="input-block-level" placeholder="账户">
        <input type="password" name="admin_pwd" class="input-block-level" placeholder="密码">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">记住密码
        </label>
        <button class="btn btn-large btn-primary" type="button" onclick="login.check()">登录</button>
      </form>

    </div>
    <script type="text/javascript" src="/cms/Public/dialog/layer.js"></script>
    <script type="text/javascript" src="/cms/Public/dialog.js"></script>
    <script type="text/javascript" src="/cms/Public/admin/js/login.js"></script>
    <script type="text/javascript">
    var url= "<?php echo U('index/checkd');?>";
    var url_add= "<?php echo U('Menu/main');?>";
    </script>
</body>
</html>