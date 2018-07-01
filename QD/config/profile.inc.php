<?php
	//系统配置文件
	define('WEBNAME','新闻系统');
	define('PAGE_SIZE',10);
	define('ARTICLE_SIZE',8);
	define('NAV_SIZE',10);
	define('UPDIR','/uploads/');
	define('URLROOT','http://'.$_SERVER['SERVER_NAME']);
	//不可修改的项目
	//数据库配置文件
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','123456');
	define('DB_NAME','qd');
	define('TABLE_PR','qd_');
	define('DB_PORT',3306);
	define('GPC',get_magic_quotes_gpc());
	define('PREV_URL',$_SERVER["HTTP_REFERER"]);
	define('SMARTY_TEMPLATE_DIR', ROOT_PATH.'/TPL/');//模板目录
	define('SMARTY_COMPILE_DIR', ROOT_PATH.'/templates_c/');//编译目录
	define('SMARTY_CONFIG_DIR', ROOT_PATH.'/config/');//配置变量目录
	define('SMARTY_CACHE_DIR', ROOT_PATH.'/cache/');//缓存目录
	define('SMARTY_CACHING', 0);//是否开启缓存，网站开发调试阶段，我们应该关闭缓存
	define('SMARTY_CACHE_LIFETIME', 60*60*24);//缓存的声明周期
	define('SMARTY_LEFT_DELIMITER', '{{');//左定界符
	define('SMARTY_RIGHT_DELIMITER', '}}');//右定界符
	define('MARK',ROOT_PATH.'/images/yc.png');
?>
