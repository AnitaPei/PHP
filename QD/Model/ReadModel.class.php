<?php
	//分类表模型基类
class ReadModel extends Model
{
	function __construct()//构造函数
	{
		$this->tableName = TABLE_PR . "book";
		$this->tableName1 = TABLE_PR . "read";
		$this->tableName2 = TABLE_PR . "content";
		$this->tableName3 = TABLE_PR . "manage";
		$this->tableName4 = TABLE_PR . "user";
		$this->tableName5 = TABLE_PR . "nav";
	}
	function bookinfo($filed,$con){
		$sql="select  content.id contentid,content.chapter conchapter,content.id conid,content.content,content.size contentsize,content.book{$filed} from $this->tableName book,$this->tableName2 content,$this->tableName3 manage,$this->tableName4 userr where content.book=book.id and manage.id=book.author {$con}";
		//echo $sql;
		return $this->one($sql);
	}

	//类型导航
	function typenav($bookid){
		$sql="select book.id,book.book_name,book.book_type,typenav.id childnavid,nav.id perantnavid,typenav.book_nav childnav,nav.book_nav perantnav
				from $this->tableName book,$this->tableName5 typenav,$this->tableName5 nav
				where book.id=$bookid and book.book_type=typenav.id and book.book_type=typenav.id and nav.id=typenav.pid ";
		//echo $sql;
		return $this->one($sql);
	}
	function checkedread($userid,$book){
		$sql="select * from $this->tableName1 where user_nane=$userid and book=$book ";
		return $this->one($sql);
	}
	function updateread($id,$userid,$book,$date){
		$sql="update $this->tableName1 set chapter=$id,read_time='$date',book=$book where user_nane=$userid and book=$book";
		return $this->aud($sql);
	}
	function addread($id,$userid,$book,$date){
		$sql="insert into $this->tableName1 set chapter=$id,user_nane=$userid,read_time='$date',book='$book'";
		return $this->aud($sql);
	}
	function userinfo($username,$pwd){
		$sql="select id from qd_user where user_name='$username' and user_pass='$pwd'";
		return $this->one($sql);
	}
	function updateuser($userid,$username,$pwd,$date){
		$sql="update $this->tableName4 set user_name='$username',user_pass=$pwd,last_time='$date' WHERE id=$userid";
		return $this->aud($sql);
	}
}
?>


