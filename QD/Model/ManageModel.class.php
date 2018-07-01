<?php
	//分类表模型基类
class ManageModel extends Model
{
	function __construct()//构造函数
	{
		$this->tablename = TABLE_PR . "manage";
	}
	function countManage(){
		$sql="SELECT count(*) as total FROM $this->tablename limit 8";
		return $this->one($sql);
	}
	function fandManage($limit){
		 $sql="SELECT * FROM $this->tablename  ORDER BY id DESC $limit";
		return $this->all($sql);
	}
	function login($username,$pwd){
		 $sql="SELECT * FROM $this->tablename WHERE admin_user='{$username}' AND admin_pass='{$pwd}'";
		return $this->one($sql);
	}
	function adminVerify($id){
		$sql="SELECT * FROM $this->tablename WHERE id=$id";
		return $this->one($sql);
	}
}
?>