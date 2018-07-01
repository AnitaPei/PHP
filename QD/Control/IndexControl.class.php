<?php
	//控制器基类
	class IndexControl extends Control{
		function __construct(&$_tpl,&$_model=null){
			parent::__construct($_tpl,$_model);
			if($_SESSION["user_name"]){
				$this->_tpl->assign("user_name",$_SESSION["user_name"]);
			}
			}
		function _index(){//index页
			//作品分类
			$childNav=new NavModel();
			$childNavlist=$childNav->childNav();
			$this->_tpl->assign("childNavlist",$childNavlist);
			//热门作品分类
			$booklist=new BookModel();
			$con="book_name,qd_book.id,qd_nav.book_nav";
			$limit="limit 0,4";
			$orderby="click";
			for($i=1;$i<=12;$i=$i+2){//热门作品分类2类为一组
				$whereif="qd_nav.pid=$i or qd_nav.pid=($i+1)";
				$hotlist[]=$booklist->hotBook($con,$whereif,$limit,$orderby);
			}
			$this->_tpl->assign("hotlist",$hotlist);
			//热门作品单条
			$countlist=$booklist->counthot1();
			$total=$countlist->total;
			$page=new Page2($total,1);
			$this->_tpl->assign('fenpage',$page->showpage());
			$hotlistone1=$booklist->hot1($page->limit);
			$this->_tpl->assign("hotlistone",$hotlistone1);
			//推荐作品单条
			$favorte="favorte";
			$favortelist=$booklist->hot($favorte);
			$this->_tpl->assign("favortelist",$favortelist);
			//推荐多条作品
			$machfavorte=$booklist->muchFavorte($favorte,4);
			$this->_tpl->assign("machfavorte",$machfavorte);
			//限时免费单条
			$freeone=$booklist->freeOne();
			$this->_tpl->assign("freeone",$freeone);
			//限时免费多条
			$freelist=$booklist->free();
			$this->_tpl->assign("freelist",$freelist);
			$advting=new AdvtModel();
			//广告调用advt_space广告位1
			$advtwhere1="advt_space=1 AND advt=2";
			$advtlist1=$advting->advtList($advtwhere1);
			$this->_tpl->assign("advtlist1",$advtlist1);
			//广告调用advt_space广告位2
			$advtwhere2="advt_space=2 AND advt=3";
			 $advtlist2=$advting->advtList($advtwhere2);
			$this->_tpl->assign("advtlist2",$advtlist2);
			//广告调用advt_space广告位3
			$advtwhere3="advt_space=3 AND advt=4";
			$advtlist3=$advting->advtList($advtwhere3);
			$this->_tpl->assign("advtlist3",$advtlist3);
			//广告调用advt_space广告位4
			$advtwhere4="advt_space=4 AND advt=1";
			$advtlist4=$advting->advtList($advtwhere4);
			$this->_tpl->assign("advtlist4",$advtlist4);
			//公告调用公告资讯活动
			$postlist= new PostModel();
			$wherePost="post_type='公告'OR post_type='资讯'OR post_type='活动'";
			$limitpost="limit 0,4";
			$postlistinfo=$postlist->postList($wherePost,$limitpost);
			$this->_tpl->assign("postlistinfo",$postlistinfo);
			//公告调用游戏
			$wherePost1="post_type='游戏'";
			$limitpost1="limit 0,2";
			$postlistinfo1=$postlist->postList($wherePost1,$limitpost1);
			$this->_tpl->assign("postlistinfo1",$postlistinfo1);
			//模板调用css样式设置
			$this->_tpl->assign("jsfile","index");
			$this->_tpl->display('index.tpl');
		}
		function _search(){//search页
			$searchlist=new BookModel();//实例化bookmodel用于查询调用书的数据
			$searchNav=new NavModel();//实例化NavModel用于查询书的分类
			//查询所有子分类
			$searchNavlist=$searchNav->childNav();
			$this->_tpl->assign("searchNavlist",$searchNavlist);
			//用于显示所有分页信息
			$BookOrAuthor=Tool::mysqlString($_GET['search']);
			$wheresearch="book_name like'%".$BookOrAuthor."%'";
			$ordersearch="book.click";
			$fbook=$searchlist->countSearchBook($wheresearch,$ordersearch);
			$total=$fbook[0]->total;
			$this->_tpl->assign('count',$total);
			$pagesize=4;
			$pageobj=new Page($total,$pagesize);
			$this->_tpl->assign('fpage',$pageobj->showpage());//分页表
			$consearch="book.id,book.cover,book.book_name,book.book_info,book.update_mode,book.last_time,book.size,book.vip_count,book.click,book.attr,manage.admin_user";
			$searchResult=$searchlist->SearchBook($consearch,$wheresearch ,$ordersearch,$pageobj->limit);
			$this->_tpl->assign("searchResult",$searchResult);
			//搜索喜欢的书籍
			$favorte="favorte";
			$machfavorte=$searchlist->muchFavorte($favorte,5);
			$this->_tpl->assign("machfavorte",$machfavorte);
			//模板调用css样式设置
			$this->_tpl->assign("jsfile","search");
			$this->_tpl->display('search.tpl');//模板调用css样式设置

		}
		function _ranking(){
			///右上部分导航
			$rankingobj=new RankingModel();
			$rankingnavs=$rankingobj->header_navs(0);
			$this->_tpl->assign('rankingnavs',$rankingnavs);
			///排行榜列表内容///
			$rankobj=new RankingModel();
			//原创榜///收藏榜////公众作家新书榜
			/*No.1*/
			$rankfirst=$rankobj->ranking_search($limit='limit 0,1');
			$this->_tpl->assign('rankfirst',$rankfirst);
			/*2-9条*/
			$rankform=$rankobj->ranking_search();
			$this->_tpl->assign('rankform',$rankform);
			///热销榜///推荐票榜////签约作家新书榜
			/*No.1*/
			$rankfirst1=$rankobj->ranking_search($limit='limit 0,1',$fd='book.vip_count');
			$this->_tpl->assign('rankfirst1',$rankfirst1);
			/*2-9条*/
			$rankform1=$rankobj->ranking_search($limit='limit 1,9',$fd='book.vip_count');
			$this->_tpl->assign('rankform1',$rankform1);
			///点击榜
			/*No.1*/
			$rankfirst2=$rankobj->ranking_search($limit='limit 0,1',$fd='book.click');
			$this->_tpl->assign('rankfirst2',$rankfirst2);
			/*2-9条*/
			$rankform2=$rankobj->ranking_search($limit='limit 1,9',$fd='book.click');
			$this->_tpl->assign('rankform2',$rankform2);
			///完本榜
			/*No.1*/
			$rankfirst2=$rankobj->ranking_search($limit='limit 0,1',$fd='book.click');
			$this->_tpl->assign('rankfirst2',$rankfirst2);
			/*2-9条*/
			$rankform2=$rankobj->ranking_search($limit='limit 1,9',$fd='book.click');
			$this->_tpl->assign('rankform2',$rankform2);
			///时间更新
			$datetime=date("Y-m-d H:i",time());
			$this->_tpl->assign('datetime',$datetime);
			$this->_tpl->assign("jsfile","ranking");//模板调用css样式设置
			$this->_tpl->display('ranking.tpl');
		}
		function _list(){
			$NavModel=new NavModel();
			if($_GET["id"]){
				$id=$_GET["id"];
				$pid="n.pid= $id";
				$where=" AND nav.pid= $id";
			}elseif($_GET["childid"]){
				$idTEP=$NavModel->childPid($_GET["childid"]);
				$id=$idTEP->pid;
				$pid="n.id=".$_GET["childid"];
				$where=" AND nav.id= ".$_GET["childid"];
			}else{
				$id=1;
				$pid=1;
				$where=" AND nav.pid= 1";
			}
			$listNav=$NavModel->listNav($id);
			$this->_tpl->assign("listNav",$listNav);//列表导航
			$listP=$NavModel->listP($id);
			//print_r($listP);
			$this->_tpl->assign("listp",$listP);//列表导航
			$orderby="ORDER BY b.id DESC ";
			$listbook=$NavModel->listBook(10,$pid,$orderby);
			//print_r($listbook);
			$this->_tpl->assign("listbook",$listbook);//左列表内容
			$orderby=" ORDER BY b.id ASC ";
			$listcon=$NavModel->listBook(4,$pid,$orderby);
			//print_r($listbook);
			$this->_tpl->assign("listcon",$listcon);//中列表内容
			$listrc=$NavModel->listBook(6,$pid);
			//print_r($listbook);
			$this->_tpl->assign("listrc",$listrc);//中下列表内容
			$count=$NavModel->countlistbom($where);
			$page=new Page($count->total,9);
			$this->_tpl->assign("countManage",$count->total);
			$list_page=$page->showpage();//显示分页
			$this->_tpl->assign("list_page",$list_page);//赋值视图
			$listbom=$NavModel->listbom($where,$page->limit);
			$this->_tpl->assign("listbom",$listbom);//中下列表内容
			///热销榜///推荐票榜////签约作家新书榜
			/*No.1*/
			//限时免费单条
			$booklist=new BookModel();
			$freeone=$booklist->freeOne();
			$this->_tpl->assign("freeone",$freeone);
			//限时免费多条
			$freelist=$booklist->free();
			$this->_tpl->assign("freelist",$freelist);
			$advting=new AdvtModel();
			$this->_tpl->assign("jsfile","list");
			$this->_tpl->display('list.tpl');//模板调用css样式设置
		}
		function _read(){
			if($_GET['bookid']){
				$id=intval($_GET['bookid']);
			}else{
				$id=1;
			}
			$readbook=new ReadModel();
			$book=new ContentModel();
			$bookNav=new BookModel();
			$bookinfo=$bookNav->bookone($id);
			$this->_tpl->assign("bookinfo",$bookinfo);
			$book1=$book->Countcontent($id);
			if($_SESSION['user_name']!=''){
				$total=$book1->total;
			}else{
				$total=1;
			}
			$this->_tpl->assign('count',$total);
			$pagesize=1;
			$pageobj=new Page1($total,$pagesize);
			$this->_tpl->assign('fpage',$pageobj->showpage());
			$allbook=$book->allcontent($id,$pageobj->limit);
			$allbook[0]->content=str_replace("   ","<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$allbook[0]->content);
			//print_r($allbook);
			$this->_tpl->assign("allbook",$allbook);
			if($_SESSION['user_name']!=''){
				$user=$_SESSION['user_name'];
				$pwd=$_SESSION['user_password'];
				$userinfo=$readbook->userinfo($user,$pwd);
				//print_r($userinfo);
				$user_nane=$userinfo->id;//用户id
				$chapter=$allbook[0]->id;//章节id
				if($allbook[0]->book !=''){
					$rebook=$allbook[0]->book;
				}else{
					Tool::alertBack("作者还未上传图书章节，请等待！");
				}
				$date=date("Y-m-d H:i:s",time());
				$return=$readbook->checkedread($user_nane,$rebook);
				if($return){
					$readbook->updateread($chapter,$user_nane,$rebook,$date);
				}else{
					$readbook->addread($chapter,$user_nane,$rebook,$date);
				}
			}
			//类型导航
			$bookid=$_GET['bookid'];
			$readnav=$readbook->typenav($bookid);
			$this->_tpl->assign("readnav",$readnav);
			$this->_tpl->assign("jsfile","read");
			$this->_tpl->display('read.tpl');//模板调用css样式设置
		}
		function _read1(){
			$bookid=$_GET['bookid'];
			if($_SESSION["user_name"]){
				$userid="'".$_SESSION["user_name"]."'";
				$con=" and userr.id=$userid and content.id=$bookid ";
			}else{
				$userid='';
				$con=" and content.id=$bookid ";
			}
			$filed=" ,userr.id userid,userr.user_name,book.id bookid,book.book_name,manage.admin_user,book.cover,book.size booksize,book.reg_time ";
			$readbook=new ReadModel();
			$readinfo=$readbook->bookinfo($filed,$con);
			//print_r($readinfo);
			$readinfo->content=Tool::mysqlString($readinfo->content);
			$this->_tpl->assign("readinfo",$readinfo);
			//类型导航
			$readnav=$readbook->typenav($bookid);
			//print_r($readnav);
			$this->_tpl->assign("readnav",$readnav);

			$this->_tpl->assign("jsfile","read");
			$this->_tpl->display('read.tpl');//模板调用css样式设置

		}
		function _entry(){
			if($_POST["c"]=="登录"){
				$userlist= new UserModel();
				$manage=new ManageModel();
				$user_name=$_POST["user_name"];
				$user_password=$_POST["user_password"];
				$user_login=$userlist->login($user_name,$user_password);
				if($user_login){
					$_SESSION["user_id"]=$user_login->id;
					$_SESSION["user_name"]=$user_name;
					$_SESSION["user_password"]=$user_password;
					Tool::alertLocation('登录成功',URLROOT."/qd/index.php");
				}
			}
			$this->_tpl->display('entry.tpl');//模板调用css样式设置
		}
		function _freebook(){
			$allbook=new BookModel();
			//左侧部分
			$leftnav=$allbook->leftnav();
			$this->_tpl->assign('leftnav',$leftnav);
			//右侧部分
			$fpage=$allbook->freebook('count(*) as total');
			$total=$fpage[0]->total;
			$pagesize=9;
			$pageobj=new Page($total,$pagesize);
			$this->_tpl->assign('fenpage',$pageobj->showpage());//分页
			$field="b.id,b.book_name,b.book_info,b.cover,b.update_mode,b.size,m.admin_user,n.book_nav";
			$freebook=$allbook->freebook($field,$pageobj->limit);
			$this->_tpl->assign('freebook',$freebook);

			$this->_tpl->assign("jsfile","allbook");
			$this->_tpl->display('freebook.tpl');//模板调用css样式设置
		}
		function _allbook(){
			//全部
			echo $_POST["a"];
			$allbook=new BookModel();
			//左侧部分
			$leftnav=$allbook->leftnav();
			$this->_tpl->assign('leftnav',$leftnav);
			//右侧部分
			if($_GET["navid"]){
				$where="and nav.pid=".$_GET["navid"];
			}
			if($_GET["free"]){
				$where="and book.limit_time>".$_GET["free"];
			}
			if($_GET["sizemin"]){
				$where="and book.size<".$_GET["sizemin"];
			}
			if($_GET["sizemax"]){
				$where="and book.size>".$_GET["sizemax"];
			}
			if($_GET["size"]){
				$where="and book.size>300000 and book.size<2000000";
			}
			if($_GET["mm"]){
				$month=$_GET["mm"];
				$where=" and book.last_time <'".date("Y-m-d h:i:s",strtotime("-$month month"))."'";
			}
			if($_GET["day"]){
				$day=$_GET["day"];
				$where=" and book.last_time <'".date("Y-m-d h:i:s",strtotime("-$day day"))."'";
			}
			$fpage=$allbook->countallbook($where);
			$total=$fpage->total;
			$pagesize=6;
			$pageobj=new Page($total,$pagesize);
			$this->_tpl->assign('fenpage',$pageobj->showpage());//分页
			$allbook=$allbook->allbook($where,$pageobj->limit);
			$allbook->content=Tool::unHtml($allbook->content);
			$this->_tpl->assign('allbook',$allbook);
			$this->_tpl->assign("jsfile","allbook");
			$this->_tpl->display('allbook.tpl');//模板调用css样式设置
		}
		function _mybook(){
			if($_SESSION['user_name'] !=''){
				$usernane=$_SESSION['user_name'];
				$model=new MyBookModel();
				$mybooks=$model->mybooks($usernane);
				$this->_tpl->assign('mybook',$mybooks);
			}else{
				echo "<center>您未登录，请先<a href='entry.php'>登录</a></center>";
			}
			$this->_tpl->assign("jsfile","allbook");
			$this->_tpl->display('mybook.tpl');//模板调用css样式设置
		}





		function _zhuce(){

			/*$username=$_POST['user_name'];
			$email=$_POST['email'];
			$password=$_POST['password'];*/
			//echo $username;

			$yinjimodel=new YinjiUserModel();
			if($_POST["login"]=="注册"){
				
				$data['name']=$_POST['user_name'];
				$data['password']=$_POST['password'];
				$data['email']=$_POST['email'];
				$data['date']=date('Y-m-d H:i:s',time());
				//print_r($data);
				//$yinjimodel->_insert($data);exit;
				if($yinjimodel->_insert($data)){
					Tool::alertLocation('注册成功',URLROOT."/qd/login1.php");
				}
			}

			$this->_tpl->display('zhuce.tpl');

		}

		function _login1(){
			if($_POST["c"]=="登录"){
				$userlist= new YinjiUserModel();
				$user_email=$_POST["user_email"];
				$user_password=$_POST["user_password"];
				$user_login=$userlist->login($user_email,$user_password);
				if($user_login){
					$_SESSION["user_id"]=$user_login->id;
					$_SESSION["user_email"]=$user_email;
					$_SESSION["user_password"]=$user_password;
					Tool::alertLocation('登录成功','admin.php?c=Backplan&m=create');
				}
			}

			$this->_tpl->display('login1.tpl');
			
		}


	}
?>