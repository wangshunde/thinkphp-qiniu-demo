<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" type="text/css" href="/thinkphp_qiniu-demo/Public/Admin/assets/css/dpl-min.css" />
  <link href="/thinkphp_qiniu-demo/Public/Admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="/thinkphp_qiniu-demo/Public/Admin/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title" >
        <a href="http://www.builive.com" title="文档库地址" target="_blank"><!-- 仅仅为了提供文档的快速入口，项目中请删除链接 -->
          <span class="lp-title-port">七牛云图片上传</span><span class="dl-title-text">样例</span>
        </a>
      </div>
    <div class="dl-log">欢迎您：<span class="dl-log-user"><?php echo ($admin); ?></span><a href="<?php echo U('Admin/Login/logout');?>" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div>
      </div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <!--<li class="nav-item dl-selected"><div class="nav-item-inner nav-home">首页</div></li>-->
        <?php if(is_array($topmenu)): foreach($topmenu as $key=>$vo): ?><li class="nav-item"><div class="nav-item-inner nav-order"><?php echo ($vo["vc_name"]); ?></div></li><?php endforeach; endif; ?>
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
<script type="text/javascript" src="/thinkphp_qiniu-demo/Public/Admin/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="/thinkphp_qiniu-demo/Public/Admin/assets/js/bui.js"></script>
  <script type="text/javascript" src="/thinkphp_qiniu-demo/Public/Admin/assets/js/config.js"></script>
  <script>
    BUI.use('common/main',function(){
      
      var config = <?php echo ($json); ?>;
      
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>