<?php
	//分类表模型基类
class UserModel extends Model
{
	function __construct()//构造函数
	{
		$this->tablename = TABLE_PR . "user";
	}
	function login($username,$pwd){
		$sql="SELECT * FROM $this->tablename WHERE user_name='{$username}' AND user_pass='{$pwd}'";
		return $this->one($sql);
	}
}
?>