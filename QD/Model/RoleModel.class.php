<?php
	//分类表模型基类
class RoleModel extends Model
{
	function __construct()//构造函数
	{
		$this->tablename = TABLE_PR . "role";
	}
	function role($level){
		 $sql="SELECT role FROM $this->tablename WHERE level=$level";
		return $this->one($sql);
	}
	function _updatelevel($con,$level){
		$sql="UPDATE {$this->tablename} set role='{$con}' WHERE level=$level;";
		return $this->aud($sql);
	}
}
?>