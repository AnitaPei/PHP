<?php
	//排行榜模型基类
	class RankingModel extends Model {
		function __construct()//构造函数
		{
			$this->tablename = TABLE_PR . 'book';
			$this->sub_tablename = TABLE_PR . "nav";
			$this->fu_tablename = TABLE_PR . 'manage';
		}
		function header_navs($pid=0){//头部导航
			$sql="select * from ".$this->sub_tablename." where pid={$pid} order by id ";
			return $this->all($sql);
		}

		/* 排行榜列表内容 */
		function ranking_search($limit='limit 1,9',$fd="book.favorte",$field="book.id,book.book_name,manage.admin_user,book.cover,nav.book_nav"){
			if (is_int($limit)) {//数字型
				$limitsql=" limit ".$limit;
			}else{//字符型 limit 0,10
				$limitsql=$limit;
			}
			$sql="select {$fd},{$field} from ".$this->tablename." as book inner join ".$this->fu_tablename." as manage on book.author=manage.id right join ".$this->sub_tablename." as nav on book.book_type=nav.id order by {$fd} desc {$limitsql} ";
			return $this->all($sql);
		}
		
		function seebook($id){
			 $sql="select book.book_name,nav.book_nav,nav.id,nav.pid from $this->tablename as book inner join $this->sub_tablename as nav on book.book_type=nav.id WHERE nav.pid=$id  ";
			return $this->one($sql);
		}
	}
?>