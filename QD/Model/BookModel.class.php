<?php
	//分类表模型基类
class BookModel extends Model
{
	function __construct()//构造函数
	{
		$this->tableName = TABLE_PR . "book";
		$this->tableName1 = TABLE_PR . "nav";
		$this->tableName2 = TABLE_PR . "manage";
	}
	function hotBook($con,$whereif,$limit,$orderby){//查找热门书籍按Pid分类查找两个表全部
//		$con查询字段
//		$whereif 查询条件
//		$orderby排序字段
//		$limit 显示字段
		$sql="SELECT $con FROM $this->tableName INNER JOIN $this->tableName1 ON $this->tableName.book_type=$this->tableName1.id WHERE $whereif ORDER BY $orderby DESC $limit";
		return $this->all($sql);
	}
	function counthot1(){//查找热门书籍按click查找推荐书籍按照favorte
		 $sql="SELECT COUNT(*) as total FROM $this->tableName as book INNER JOIN $this->tableName2 as manage ON book.author=manage.id";
		return $this->one($sql);
	}
	function hot1($limit){//查找热门书籍按click查找推荐书籍按照favorte
		 $sql="SELECT book.id,book.attr,book.book_name,book.book_info,book.cover,book.update_mode,book.favorte,manage.admin_user as author FROM $this->tableName as book INNER JOIN $this->tableName2 as manage ON book.author=manage.id ORDER BY click DESC $limit ";
		return $this->one($sql);
	}
	function hot($hot){//查找热门书籍按click查找推荐书籍按照favorte
		$sql="SELECT book.id,book.attr,book.book_name,book.book_info,book.cover,book.update_mode,book.favorte,manage.admin_user as author FROM $this->tableName as book INNER JOIN $this->tableName2 as manage ON book.author=manage.id ORDER BY $hot DESC ";
		return $this->one($sql);
	}
	function muchFavorte($hot, $limit){
		 $sql="SELECT book.id,book.attr,book.book_name,book.book_info,book.cover,book.update_mode,book.favorte,manage.admin_user as author FROM $this->tableName as book INNER JOIN $this->tableName2 as manage ON book.author=manage.id ORDER BY $hot DESC limit $limit ";
		return $this->all($sql);
	}
	function free(){//查找限时免费书籍
		$sql="SELECT book.id,book.book_name,manage.admin_user as author FROM $this->tableName as book INNER JOIN $this->tableName2 as manage ON book.author=manage.id WHERE limit_time>NOW() LIMIT 0,9";
		return $this->all($sql);
	}
	function allbook($where,$limit){//查找限时免费书籍
		 $sql="SELECT book.id,book.attr,book.book_name,book.book_info,book.cover,book.update_mode,book.favorte,manage.admin_user as author FROM $this->tableName as book ,$this->tableName2 as manage ,$this->tableName1 as nav where book.author=manage.id AND book.book_type=nav.id $where $limit";
		return $this->all($sql);
	}
	function countallbook($where){//查找限时免费书籍
		 $sql="SELECT COUNT(*)as total FROM $this->tableName as book ,$this->tableName2 as manage ,$this->tableName1 as nav where book.author=manage.id AND book.book_type=nav.id $where";
		return $this->one($sql);
	}
	function freeOne(){
		$sql="SELECT book.id,book.attr,book.book_name,book.book_info,book.cover,book.update_mode,book.favorte,manage.admin_user as author FROM $this->tableName as book INNER JOIN $this->tableName2 as manage ON book.author=manage.id WHERE limit_time>NOW() ORDER BY favorte DESC ";
		return $this->one($sql);
	}
	function SearchBook($con,$whereif,$ordersearch,$limit){//查找热门书籍按Pid分类查找两个表全部
//		$con查询字段
//		$whereif 查询条件
//		$orderby排序字段
//		$limit 显示字段
		$sql="SELECT $con FROM $this->tableName AS book INNER JOIN $this->tableName2 as manage ON book.author=manage.id WHERE $whereif ORDER BY $ordersearch DESC $limit";
		return $this->all($sql);
	}
	function countSearchBook($whereif, $ordersearch){//查找热门书籍按Pid分类查找两个表全部
//		$con查询字段
//		$whereif 查询条件
//		$orderby排序字段
//		$limit 显示字段
		$sql="SELECT COUNT(*) as total FROM $this->tableName AS book INNER JOIN $this->tableName2 as manage ON book.author=manage.id WHERE $whereif ORDER BY $ordersearch DESC";
		return $this->all($sql);
	}
	function manage($id,$limit){/*后台图书查询*/
		if(is_int($id)){
			$where="where m.id=b.author and b.author=$id";
		}
		$sql="SELECT b.id,b.book_name,b.cover,b.favorte,b.update_mode,b.author from qd_book b,qd_manage m  $where $limit";
		//echo $sql;exit();
		return $this->all($sql);
	}
	function contentinsert($id,$chapter,$content,$size,$data){

		$sql=" insert into qd_content set book=$id,chapter='$chapter',content='$content' ,size='$size' ,chapter_date='$data' ";
		return $this->aud($sql);
	}
	function bookinsert($book_name,$book_info,$cover,$book_type,$author,$update_mode){
		$sql="insert into qd_book set book_name='$book_name',book_info='$book_info',cover='$cover',book_type='$book_type',author='$author',update_mode='$update_mode'";
		//echo $sql;exit();
		return $this->aud($sql);
	}
	function bookupdate($id){
		$sql="select  book_name,book_info,cover,book_type,author,update_mode from qd_book where id='$id'";
		return $this->one($sql);
	}
	function b_update($book_name,$book_info,$cover,$book_type,$author,$update_model,$id){
		$sql="update qd_book set book_name='$book_name',book_info='$book_info',cover='$cover',book_type='$book_type',author='$author',update_mode='$update_model' where id='$id'";
		return $this->aud($sql);
	}

	function bookdelete($id){
		 $sql=" delete from qd_book where id=$id";
		return $this->aud($sql);
	}
	function countBook($id){
		if(is_int($id)){
			$where="WHERE author=$id";
		}
		$sql="SELECT count(*) as total FROM $this->tableName $where limit 3";
		return $this->one($sql);
	}
	function leftnav(){
		$sql="select n1.book_nav,n1.id from {$this->tableName1} n1,{$this->tableName1} n2 WHERE n2.pid=n1.id GROUP BY n1.id";
		return $this->all($sql);
	}
	function freebook($field="b.id,b.book_name,b.book_info,b.cover,b.update_mode,b.size,m.admin_user,n.book_nav",$limit,$orderby="order by b.id"){//免费页面右侧
		if (is_int($limit)) {//数字型
			$limitsql=" limit ".$limit;
		}else{//字符型 limit 0,10
			$limitsql=$limit;
		}
		$sql="select {$field} from {$this->tableName} b INNER JOIN {$this->tableName2} m ON b.author=m.id RIGHT JOIN {$this->tableName1} n on b.book_type=n.id WHERE  limit_time>NOW() {$orderby} desc {$limitsql}";
		return $this->all($sql);
	}
	function bookone($id){
		 $sql="SELECT b.id,b.book_name,b.reg_time,b.book_info,b.cover,b.update_mode,b.size,m.admin_user from {$this->tableName} b INNER JOIN {$this->tableName2} m ON b.author=m.id WHERE b.id=$id";
		return $this->one($sql);
	}


}
//根据书名和作者查询出书中所有的章节
//SELECT book.book_name,manage.admin_user as author,book.book_info,book.update_mode,content.chapter FROM qd_book AS book,qd_content AS content,qd_manage AS manage WHERE(book.id=content.book AND book.author=manage.id) AND(book.book_name LIKE'%雪%' OR manage.admin_user LIKE'%猫%')
?>