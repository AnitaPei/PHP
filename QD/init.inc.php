<?php
//开始session
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~ E_STRICT & ~ E_WARNING);
	//设置utf-8编码
	header('Content-Type:text/html;charset=utf-8');
	//网站根目录
	//echo __DIR__;exit;(test)
	define('ROOT_PATH',dirname(__FILE__));
	//引入配置信息
	require ROOT_PATH.'/config/profile.inc.php';
	//引入Smarty
	require ROOT_PATH.'/smarty/Smarty.class.php';
	//设置中国时区
	date_default_timezone_set('Asia/Shanghai');
	//自动加载类
	function __autoload($_className) {
		if (substr($_className, -7) == 'Control') {
			require ROOT_PATH.'/Control/'.$_className.'.class.php';
		} elseif (substr($_className, -5) == 'Model') {
			require ROOT_PATH.'/Model/'.$_className.'.class.php';
		} else {
			require ROOT_PATH.'/includes/'.$_className.'.class.php';
		}
	}
	//实例化模板类
	$_tpl = TPL::getInstance();
	//初始化
	require 'common.inc.php';
?>