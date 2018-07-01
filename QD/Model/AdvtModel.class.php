<?php
	//分类表模型基类
class AdvtModel extends Model
{
	function __construct()//构造函数
	{
		$this->tablename = TABLE_PR . "advt";
	}
	function advtList($whereadvt){//查找子类pid==0的一级子类
		 $sql="SELECT * From $this->tablename WHERE $whereadvt ";
		return $this->all($sql);
	}

	function cha_advt($field="id,advt,advt_name,advt_img,advt_space",$limit=10,$orderby="order by id"){//查询所有广告
		if (is_int($limit)) {
			$limitsql=" limit ".$limit;
		}else{
			$limitsql=$limit;
		}
		$sql="select {$field} from ".$this->tablename." {$orderby} desc {$limitsql}";
		return $this->all($sql);
	}
	function getbyid($id){
		$id=intval($id);
		if (!$id) {
			return false;
		}
		$sql="select * from $this->tablename where id=$id ";
		return $this->one($sql);
	}
}
?>