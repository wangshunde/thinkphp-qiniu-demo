<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>图片</title>

<script type="text/javascript" src="/thinkphp_qiniu-demo/Public/Admin/assets/js/jquery-1.8.1.min.js"></script>
</head>
<body>
<table width="60%" border="1" align="center" cellpadding="6" cellspacing="0" style="border-collapse: collapse;text-align:center;" bgColor="#9DD9FF" border="0">

  <tr style="text-align:center;">
    <td width='20%'>图片</td>
    <td width="20%">外链</td>

  </tr>

  <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
    <td><img src="<?php echo ($v["photo"]); ?>" style="width:30%";></td>
  	<td><?php echo ($v["photo"]); ?></td>

   </tr><?php endforeach; endif; else: echo "" ;endif; ?>

</table>

<div style="margin-top:20px;text-align:center;"><?php echo ($page); ?></div>



</body>

</html>