<?php
	//分类表模型基类
class ContentModel extends Model
{
	function __construct()//构造函数
	{
		$this->tablename = TABLE_PR . "content";
	}
	function Countcontent($id){
		 $sql="SELECT COUNT(*)as total FROM {$this->tablename} WHERE book={$id}";
		return $this->one($sql);
	}
	function onecontent($id){
		$sql="SELECT *  FROM {$this->tablename} WHERE id={$id}";
		return $this->one($sql);
	}
	function allcontent($id,$limit){
		$sql="SELECT * FROM {$this->tablename} WHERE book={$id} {$limit}";
		return $this->all($sql);
	}
}