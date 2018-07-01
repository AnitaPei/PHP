<?php
	//验证码类
	class Code {
		private $charset = 'abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789';	//随机因子
		private $code;							//验证码
		private $codelen = 4;					//验证码长度
		private $font;								//指定的字体
		//构造方法初始化
		public function __construct() {
			$this->font = ROOT_PATH.'/font/elephant.ttf';
		}
		//生成随机码
		public function createCode() {
			$_len = strlen($this->charset)-1;
			for ($i=0;$i<$this->codelen;$i++) {
				$this->code .= $this->charset[mt_rand(0,$_len)];
			}
		}
		//获取验证码
		public function getCode() {
			return strtolower($this->code);
		}
		
	}
?>