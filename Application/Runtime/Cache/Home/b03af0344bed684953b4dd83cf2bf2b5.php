<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>上传文件</title>
	<style type="text/css">
        h1{text-align: center;margin-bottom: 20px;}
        div{
            width:100%;
        }
        #fm{width: 300px;margin: 0 auto;}
    </style>
</head>
<body>
<h1>图片上传</h1>
<form action="<?php echo U('Upload/uploader');?>" enctype="multipart/form-data" method="post" id="fm">
		<div><input type="file" name="photo[]" multiple="multiple"/></div>
		<div style="margin-top:20px;text-align:right;"><input type="submit" value="提交" ></div>
</form>

</body>
</html>