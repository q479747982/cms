<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<script src="/cms/Public/jquery.min.js"></script>
<script type="text/javascript" src="/cms/Public/admin/js/bootstrap.js"></script>
<script type="text/javascript" src="/cms/Public/admin/js/npm.js"></script>
<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="/cms/Public/admin/css/style.css">
</head>
<body>
<div class="btn-group">
  <button type="button" class="btn btn-default" id="button-add">添加</button>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>名称</th>
      <th>是否显示</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <?php if(is_array($g)): $i = 0; $__LIST__ = $g;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($g["m_id"]); ?></td>
      <td><?php echo ($g["m_name"]); ?></td>
      <td>是</td>
      <td><a href="">修改</a>|<a href="">删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

  </tbody>
</table>
<script type="text/javascript" src="/cms/Public/common.js"></script>
<script type="text/javascript">
var SCOPE={
  'add_url':'add',
}
</script>
</body>
</html>