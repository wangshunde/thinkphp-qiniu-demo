<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>上传文件</title>
</head>
<body>
<h3>单文件上传</h3>
<form action="<?php echo U('Uploader/one_uploader');?>" enctype="multipart/form-data" method="post" >
		<input type="file" name="photo[]" /><br/>
		<input type="submit" value="提交" >
</form>


<h3>多文件上传</h3>
<form action="<?php echo U('Uploader/more_uploader');?>" enctype="multipart/form-data" method="post" >
		<input type="file" name="photo[]" /><br/>
		<input type="file" name="photo[]" /><br/>
		<input type="submit" value="提交" >
</form>




</body>
</html>