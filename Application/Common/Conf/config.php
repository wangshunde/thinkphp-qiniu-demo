<?php
return array(
	//'配置项'=>'配置值'
	'UPLOAD_SITEIMG_QINIU' => array ( 
        'maxSize' => 5 * 1024 * 1024,
        'rootPath' => './Uploads/',
        'saveName' => array ('uniqid', ''),
        'driver' => 'Qiniu',
        'driverConfig' => array (
            'secretKey' => 'MXubbUyIV2Jw3U94Yi8W5XAAgHCFt-nlmY28elIP', //七牛sk
            'accessKey' => 'QyxQmdfygGhEX05rYIeGFHSqeRfXsT-cmoG7OSZ_',  //七牛ak
            'domain' => 'oww9roef0.bkt.clouddn.com', //域名
            'bucket' => 'test', //空间名称
        )
    ),
    'DB_TYPE'=>'mysql', //数据库类型
    'DB_HOST'=>'qdm169657316.my3w.com', //服务器地址
    'DB_NAME'=>'qdm169657316_db', //数据库名
    'DB_USER'=>'qdm169657316', //用户名
    'DB_PWD'=>'wang1990', //密码
    'DB_PORT'=>3306, //端口
    'DB_PREFIX'=>'os_', //数据库表前缀
    define('URL', 'http://wangxiaohuawsd.cn/thinkphp-qiniu-demo/'),
);
