<?php
	//分类表模型基类
class PostModel extends Model
{
	function __construct()//构造函数
	{
		$this->tablename = TABLE_PR . "post";
	}
	function postList($where,$limit,$filed=' * '){//查找公告信息
		$sql="SELECT $filed From $this->tablename WHERE $where ORDER BY post_date DESC $limit";
		return $this->all($sql);
	}
	function checkpost($id){
		$sql="select * from $this->tablename where id=$id";
		return $this->one($sql);
	}
}
?>