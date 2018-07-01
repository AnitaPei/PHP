<?php
	//分类表模型基类
class NavModel extends Model
{
	function __construct()//构造函数
	{
		$this->tableName = TABLE_PR . "nav";
	}
	function childNav(){//查找子类pid==0的一级子类
		$sql="SELECT book_nav,id From $this->tableName WHERE pid=0";
		return $this->all($sql);
	}
	function childPid($id){
		$sql="SELECT pid FROM $this->tableName WHERE id=$id";
		return $this->one($sql);
	}
	function listNav($id){/*列表页导航 通过id查找pid*/
		 $sql="select book_nav,id from $this->tableName where pid=$id";
		//echo $sql;
		return $this->all($sql);
	}
	function listP($id){
		$sql="select book_nav from $this->tableName where id=$id";
		return $this->one($sql);
	}
	function listBook($limit=10,$id,$orderby){

		if(is_int($limit)){//如果是数字型
			$limitsql=" limit ".$limit;
		}else{
			$limitsql=" $limit ";
		}

		 $sql="SELECT * from qd_manage m,qd_nav n,qd_book b where b.author=m.id and b.book_type=n.id and {$id} {$orderby}{$limitsql}";

		return $this->all($sql);
	}
	function countlistbom($where){
		$sql="select count(*) AS total from qd_manage manage,qd_book book,qd_nav nav where manage.id=book.author and book.book_type=nav.id $where";
		return $this->one($sql);
	}
	function listbom($where,$limit){
		$sql="select book.id,manage.admin_user,book.cover,book.book_name,book.book_info,nav.book_nav from qd_manage manage,qd_book book,qd_nav nav where manage.id=book.author and book.book_type=nav.id $where $limit ";
		return $this->all($sql);
	}
	function ranking_search($limit='limit 1,9',$fd="book.favorte",$field="book.book_name,manage.admin_user,book.cover,nav.book_nav"){
		if (is_int($limit)) {//数字型
			$limitsql=" limit ".$limit;
		}else{//字符型 limit 0,10
			$limitsql=$limit;
		}
		$sql="select {$fd},{$field} from qd_book as book inner join qd_manage as manage on book.author=manage.id right join qd_nav as nav on book.book_type=nav.id order by {$fd} desc {$limitsql} ";
		return $this->all($sql);
	}
	function creatNav(){
		$sql="select book_nav,id from qd_nav WHERE pid!=0";
		return $this->all($sql);
	}
}
?>