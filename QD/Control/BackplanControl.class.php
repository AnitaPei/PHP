<?php
	//控制器基类
	class BackplanControl extends Control{
		function __construct(&$_tpl,&$_model=null){
			parent::__construct($_tpl,$_model);
		}
		function __call($name, $arguments)
		{
			$html=substr($name,1);
			if ($html=="index"){
				$html="admin";
			}
			$this->_tpl->display("$html.tpl");
		}
		function _index(){
			if(empty($_SESSION["admin_name"])){
				Tool::alertLocation('您还未登陆请重新登陆', "admin.php?c=backplan&m=admin_login");
			}
			$this->_tpl->display("admin.tpl");
		}
		function _admin_login(){
			if($_POST["entry"]=="登录") {
				$manage = new ManageModel();
				$user_name = Tool::mysqlString($_POST["admin_user"]);
				$user_password = Tool::mysqlString($_POST["admin_pass"]);
				$manage_code= $_POST["code"];
				if(Validate::checkNull($user_name)){
					Tool::alertBack("用户名不能为空");
				}
				if($manage_code!=$_SESSION["admincode"]){
					Tool::alertBack("验证码不正确请重新输入");
				}
				$manage_login = $manage->login($user_name, $user_password);
				if ($manage_login) {
					$_SESSION["admin_id"]=$manage_login->id;
					$_SESSION["admin_name"] = $user_name;
					$_SESSION["level"]=$manage_login->level;
						Tool::alertLocation('登录成功', "admin.php");
				}
			}
			$this->_tpl->display("admin_login.tpl");
		}
		function _code(){
			$codeobj=new ValidateCode();
			$codeobj->doimg();
			$_SESSION["admincode"]=$codeobj->getCode();
		}
		function _sendemail(){
			if($_POST['userEmail']){
				$emailAddress=$_POST['userEmail'];
				$_SESSION["newuser"]=$emailAddress;
				$email=new email();
				$code=new Code();
				$code->createCode();
				$_SESSION["code"]= $code->getCode();
				$sendresult=$email->sendemail($emailAddress,$_SESSION["code"]);
				if($sendresult){
					$_SESSION["newuser"]=$emailAddress;
					echo json_encode($_SESSION["newuser"]);
				}
			}
		}
		function _login(){
			if($_POST["login"]=="注册"){
				$code=$_POST["zy"];
				$pwd=$_POST["password"];
				$user=new UserModel();
				if($code==$_SESSION["code"]){
					$date["user_name"]=$_SESSION['newuser'];
					$date["user_pass"]=$pwd;
					$aa=$user->_insert($date);
					if($aa){
						Tool::alertLocation('注册成功',URLROOT."/qd/index.php");
					}
				}
			}
			$this->_tpl->display("login.tpl");
		}
		function _admin_top(){
			$this->_tpl->assign("admin_id",$_SESSION["admin_id"]);
			$this->_tpl->assign("username",$_SESSION["admin_name"]);
			$this->_tpl->display("admin_top.tpl");
		}
		function _addbook(){//加入书架
			$favorite=new FavoriteModel();
			if($_POST){
				if($_SESSION["user_id"]){
					$id=$_SESSION["user_id"];
					$bookid=$_POST["bookid"];
					$time=date("y-m-d h:i:s",time());
					$favoriteResult=$favorite->find($bookid,$id);
					if($favoriteResult){
						echo (json_encode("您已加入过书架",JSON_UNESCAPED_UNICODE));
					}else{
						$result=$favorite->_insert1($bookid,$id,$time);
						if($result){
							echo (json_encode("加入书架成功",JSON_UNESCAPED_UNICODE));
						}
					}
				}else{
					echo(json_encode("您还没有登录哦",JSON_UNESCAPED_UNICODE));
				}
			}
		}
		function _admin_left(){///左边内容
			$role=new RoleModel();
			$rolelist=$role->role($_SESSION["level"]);
			$roleresulttmp=explode(",",$rolelist->role);
			//array('user','book');
			require("config/DB.php");
			$this->_tpl->assign("menu_model",$config['model']);
			if($rolelist->role=='all'){
				$roleresult=$config['model'];
			}elseif(is_array($roleresulttmp)){
				foreach($roleresulttmp as $v){
					$roleresult[$v]=$config['model'][$v];
				}
			}
			//print_r($roleresult);
			$this->_tpl->assign("roleresult",$roleresult);
			$this->_tpl->display("admin_left.tpl");
		}
		function _user_manage(){
			$managelist=new ManageModel();
			$count=$managelist->countManage();
			$page=new Page($count->total,8);
			$this->_tpl->assign("countManage",$count->total);
			$list_page=$page->showpage();//显示分页
			$this->_tpl->assign("list_page",$list_page);//赋值视图
			$manageResult=$managelist->fandManage($page->limit);
			$this->_tpl->assign("manageResult",$manageResult);
			$this->_tpl->display("user_manage.tpl");
		}
		function _user_content(){
			$manage= new ManageModel();
			if(!empty($_GET["adminId"])){
				$manageResult=$manage->adminVerify($_GET["adminId"]);
				if($manageResult->admin_user==$_SESSION["admin_name"]){
					$this->_tpl->assign("manageResult",$manageResult);
					$this->_tpl->assign("updateT","personal");
				}
			}
			if(!empty( $_POST["userlevel"])) {
				echo $_POST["userlevel"];
			}

			if(!empty($_GET["user_Id"])){
				$manageResult=$manage->adminVerify($_GET["user_Id"]);
				$this->_tpl->assign("manageResult",$manageResult);
				$this->_tpl->assign("updateT1","all");
			}
			if($_POST["update"]=="修改"){
				$date["admin_user"]=Tool::mysqlString($_POST["admin_user"]);
				$date["id"]=Tool::mysqlString($_POST["adminId"]);
				$date["email"]=Tool::mysqlString($_POST["email"]);
				$date["admin_pass"]=Tool::mysqlString($_POST["admin_pass"]);
				$date["level"]=$_POST["role"];
				$manageupdate=$manage->_update($date,$date["id"]);
				if($manageupdate){
					Tool::alertLocation('修改成功',URLROOT."/qd/admin.php?c=backplan&m=user_manage");
				}
			}
			if($_POST["insert"]=="新增"){
				$date["admin_user"]=Tool::mysqlString($_POST["admin_user"]);
				$date["email"]=Tool::mysqlString($_POST["email"]);
				$date["admin_pass"]=Tool::mysqlString($_POST["admin_pass"]);
				$date["level"]=Tool::mysqlString($_POST["role"]);
				$manageupdate=$manage->_insert($date);
				if($manageupdate){
					Tool::alertLocation('新增成功',URLROOT."/qd/admin.php?c=backplan&m=user_manage");
				}
			}
			$this->_tpl->display("user_content.tpl");
		}
	function _user_Delete(){
		$manage= new ManageModel();
		if(!empty($_GET["user_Id"])){
			$manageResult=$manage->adminVerify($_GET["user_Id"]);
			if($manageResult->admin_user==$_SESSION["admin_name"]||$_SESSION["level"]==1){
				$id=intval($_GET["user_Id"]);
				$managedel=$manage->delete($id);
				if($managedel){
					Tool::alertLocation('删除成功',URLROOT."/qd/admin.php?c=backplan&m=user_manage");
				}
			}else{
				Tool::alertBack("您没有权限哦");
			}
		}
	}
	function _reol(){
		if(!empty($_POST["userlevel"])){
			$level=$_POST["userlevel"];
			$role=new RoleModel();
			$rolelist=$role->role($level);
			$roleResult=explode(",",$rolelist->role);
			if($rolelist->role=="all"){
				require "config/db.php";
				$roleResulttem="";
				foreach ($config['model'] as $k=>$v){
					$roleResulttem.=$k.",";
				}
				$roleResult=explode(",",$roleResulttem);
			}
			echo json_encode($roleResult,JSON_UNESCAPED_UNICODE);

		}
	}
	function _control_manage(){
		if($_POST["entry"]=="确认修改"){
			$level=intval($_POST["role"]);
			$role=implode(",",$_POST["rolename"]);
			$rolelist=new RoleModel();
			$result=$rolelist->_updatelevel($role,$level);
			if($result){
				Tool::alertLocation('权限修改成功',URLROOT."/qd/admin.php?c=backplan&m=control_manage");
			}
		}
		$this->_tpl->display("control_manage.tpl");
	}
		function _content_manage(){
			$content=new ContentModel();
			if($_GET["id"]){
				$id=$_GET["id"];
				$count=$content->Countcontent($id);
				$page=new Page($count->total,4);
				$this->_tpl->assign("countManage",$count->total);
				$list_page=$page->showpage();//显示分页
				$this->_tpl->assign("list_page",$list_page);//赋值视图
				$contentResult=$content->allcontent($id,$page->limit);
				$this->_tpl->assign("contentResult",$contentResult);

			}
			$this->_tpl->display("content_manage.tpl");
		}
		//zjz结束//
		function _book_manage(){
			//print_r($_GET);
			$postmodel=new BookModel();
			if($_SESSION["level"]==1){
				$count=$postmodel->countBook();
				$page=new Page($count->total,3);
				$this->_tpl->assign("countBook",$count->total);
				$list_page=$page->showpage();//显示分页
				$this->_tpl->assign("list_page",$list_page);//赋值视图
				$bookmanage=$postmodel->manage(" ",$page->limit);
				//print_r($bookmanage);
				$this->_tpl->assign("bookmanage",$bookmanage);
			}else{
				$id=intval($_SESSION["admin_id"]);
				$count=$postmodel->countBook($id);
				$page=new Page($count->total,3);
				$this->_tpl->assign("countBook",$count->total);
				$list_page=$page->showpage();//显示分页
				$this->_tpl->assign("list_page",$list_page);//赋值视图
				$bookmanage=$postmodel->manage($id,$page->limit);
				//print_r($bookmanage);
				$this->_tpl->assign("bookmanage",$bookmanage);
			}

			//$bookmanage=$postmodel->manage($_SESSION["admin_id"]);
			//print_r($bookmanage);
			$this->_tpl->assign("admin_id",$_SESSION["admin_id"]);
			$this->_tpl->assign("bookmanage",$bookmanage);
			$this->_tpl->display("book_manage.tpl");
		}
		function _upfile(){
			if ($_POST){//提交图片
				//上传文件
				$upfile=new FileUpload("images",2000);
				$url=$upfile->getPath_pro();
				Tool::alertOpenerClose("上传成功", $url);
			}
			$this->_tpl->display('upfile.tpl');
		}
		function _book_content(){
			$onecontent=new ContentModel();
			if($_GET["Cid"]){
				$one=$onecontent->onecontent($_GET["Cid"]);
				$this->_tpl->assign('one',$one);
				$this->_tpl->assign('type',"update");
			}
			if($_GET){
				$id=$_GET['id'];
				//print_r($_POST);
				if($_POST["aa"]=="+发布章节"){
					$chapter=$_POST['chapter'];
					$content=$_POST['content'];
					$size=strlen($content);
					$data=date("Y-m-d H:i:s",time());
					$obj=new BookModel();
					$bookobj=$obj->contentinsert($id,$chapter,$content,$size,$data);
					if($bookobj){
						Tool::alertLocation('添加成功','admin.php?c=BackplanControl&m=book_manage');
					}
				}
			}
			if($_GET["Cid"]){
				$id=$_GET['Cid'];
				if($_POST["aa"]=="+修改章节"){
					$date["chapter"]=$_POST['chapter'];
					$date["content"]=Tool::mysqlString($_POST['content']);
					$date["size"]=strlen($date["content"]);
					$date["chapter_date"]=date("Y-m-d H:i:s",time());
					$bookobj=$onecontent->_update($date,$id);
					if($bookobj){
						Tool::alertLocation('修改成功','admin.php?c=BackplanControl&m=book_manage');
					}
				}
			}
			$this->_tpl->display("book_content.tpl");
		}
		function _book_creat(){
			$modelobj=new NavModel();
			$nav=$modelobj->creatNav();
			$this->_tpl->assign("nav",$nav);
			if($_POST){
				$model=new BookModel();
				$book_name=$_POST['book_name'];
				$book_info=$_POST['book_info'];
				$cover=$_POST['cover'];
				$book_type=$_POST['book_type'];
				$update_mode=$_POST['update_model'];
				if($_GET){
					$author=$_GET['id'];
					//echo 1;
					//echo $author;
					$obj=$model->bookinsert($book_name,$book_info,$cover,$book_type,$author,$update_mode);
				}
				if($obj){
					Tool::alertLocation('添加成功','admin.php?c=BackplanControl&m=book_manage&id=1');
				}
			}
			$this->_tpl->display("book_creat.tpl");
		}
		function _bookupdate(){
			$modelobj=new NavModel();
			$nav=$modelobj->creatNav();
			$this->_tpl->assign("nav",$nav);

			$model=new BookModel();
			$id=$_GET['id'];
			$modelobj=$model->bookupdate($id);
			$this->_tpl->assign('book',$modelobj);
			if($_POST){
				$id=$_GET['id'];
				$book_name=$_POST['book_name'];
				$book_info=$_POST['book_info'];
				$cover=$_POST['cover'];
				$book_type=$_POST['book_type'];
				$update_model=Tool::mysqlString($_POST['update_model']);
				if($_GET){
					$author=$_GET['id'];
					//echo 1;
					echo $author;
					$mobj=$model->b_update($book_name,$book_info,$cover,$book_type,$author,$update_model,$id);
				}
			}

			if($mobj){
				Tool::alertLocation('修改成功','admin.php?c=BackplanControl&m=book_manage&id=1');
			}


			$this->_tpl->display("book_update.tpl");
		}

		function _BookDelete(){
			$model=new BookModel();
			$onecontent=new ContentModel();
			if($_GET["id"]){
				$id=$_GET['id'];
				if($model->bookdelete($id)){
					Tool::alertLocation('删除成功','admin.php?c=BackplanControl&m=book_manage&id=1');
				}
			}
			if($_GET["Cid"]){
				$id= intval($_GET['Cid']);
				if($onecontent->delete($id)){
					Tool::alertLocation('删除成功','admin.php?c=BackplanControl&m=book_manage&id=1');
				}
			}
			$this->_tpl->display("book_manage.tpl");
		}
		//李银露结束
		//显示公告所有内容
		function _post_manage(){
			$postmodel=new PostModel();
			$totalpage=$postmodel->postList(' id ','limit 1','count(*) as total');
			//print_r($totalpage[0]->total);
			$total=$totalpage[0]->total;
			$pagesize=6;
			$pageobj=new Page($total,$pagesize);
			//print_r($pageobj);
			//总条数
			$this->_tpl->assign("sum",$pageobj);
			//页数
			$this->_tpl->assign("page_html",$pageobj->showpage());
			$postinfo=$postmodel->postList(' id ',$pageobj->limit,' * ');
			$this->_tpl->assign("postinfo",$postinfo);
			$this->_tpl->display("post_manage.tpl");

		}
		//修改、增加公告
		function _post_content(){
			$postmodel=new PostModel();
			if($_POST){
				$data['post_title']=$_POST['book_name'];
				$data['post_content']=$_POST['content'];
				$data['post_type']=$_POST['book_type'];
				$data['post_date']=date("Y-m-d H:i:s",time());
				if($_GET['id']){	//修改公告
					$id=$_GET['id'];
					$postmodel->_update($data,$id);
					Tool::alertLocation("修改成功！",'admin.php?c=backplan&m=post_manage');
				}else{	//增加公告
					$data['post']=$_GET['userid'];
					echo $_GET['userid'];
					$postmodel->_insert($data);
					Tool::alertLocation("发布成功！",'admin.php?c=backplan&m=post_manage');
				}
			}
			$id=intval($_GET['id']);
			$postmodel=new PostModel();
			$checkpost=$postmodel->checkpost($id);
			//print_r($checkpost);

			$this->_tpl->assign("checkpost",$checkpost);
			$this->_tpl->display("post_content.tpl");
		}

		//删除公告
		function _postDelete(){

			$id=intval($_GET['id']);
			//echo $id;exit;
			$postmodel=new PostModel();
			$postmodel->delete($id);
			Tool::alertLocation("删除成功！",'admin.php?c=backplan&m=post_manage');
			$this->_tpl->display("post_manage.tpl");
		}
		//裴帅荣结束
		//广告管理/////
		function _advt_manage(){
			$advtobj=new AdvtModel();
			$fadvt=$advtobj->cha_advt('count(*) as total');
			$total=$fadvt[0]->total;
			$this->_tpl->assign('count',$total);//广告总记录数显示
			$pagesize=3;
			$pageobj=new Page($total,$pagesize);
			$this->_tpl->assign('fpage',$pageobj->showpage());//分页
			$field="id,advt,advt_name,advt_img,advt_space";
			$alladvt=$advtobj->cha_advt($field,$pageobj->limit);//广告列表
			$this->_tpl->assign('alladvt',$alladvt);
			$this->_tpl->display('advt_manage.tpl');
		}
		function _advt_creat(){//发布、修改广告
			$advtobj=new AdvtModel();
			$id=intval($_GET['id']);
			if ($_GET['id']) {
				$id=intval($_GET['id']);
				$advtobj=new AdvtModel();
				$advtinfo=$advtobj->getbyid($id);
				$this->_tpl->assign('update',"update");
				$this->_tpl->assign('advtinfo',$advtinfo);
			}
			$this->_tpl->display('advt_creat.tpl');
			if ($_POST) {
				$date['advt_name']=$_POST['advt_name'];
				$date['advt_img']=$_POST['advt_img'];
				$date['advt_space']=$_POST['book_type'];
				$date['advt_img']=$_POST['cover'];
				$date['advt']=$_SESSION["admin_id"];
				$date['reg_time']=date('Y-m-d H:i:s',time());
				if ($_POST['update_advt']) {//修改
					$id=$_POST['advtid'];
					$advt=$advtobj->_update($date,$id);
					if ($advt) {
						Tool::alertLocation('修改成功','admin.php?c=Backplan&m=advt_manage');
					}else{
						Tool::alertLocation('修改失败','admin.php?c=Backplan&m=advt_creat');
					}

				}else{//新增
					$advt=$advtobj->_insert($date);
					if ($advt) {
						Tool::alertLocation('新增成功','admin.php?c=Backplan&m=advt_manage');
					}else{
						Tool::alertLocation('新增失败','admin.php?c=Backplan&m=advt_creat');
					}
				}

			}
		}
		function _deladvt(){//删除
			$advt=new AdvtModel();
			$id=intval($_GET['id']);
			$advt->delete($id);
			Tool::alertLocation('删除成功','admin.php?c=Backplan&m=advt_manage');
			$this->_tpl->display('advt_manage.tpl');
		}
		//施菲菲结束
		//个人资料修改
		function _personal(){
			$username=$_SESSION["user_name"];
			$userpwd=$_SESSION['user_password'];
			$readbook=new ReadModel();
			$userinfo=$readbook->userinfo($username,$userpwd);
			$userid=$userinfo->id;//用户id
			$upusername=$_POST['username']; //用户名
			$oldpwd=$_POST['oldpwd']; //原密码
			$newpwd=$_POST['newpwd']; //新密码
			$confirmpwd=$_POST['confirmpwd']; //确认密码
			$date=date("Y-m-d H:i:s",time());
			if($_POST){
				if($oldpwd !=''){
					if($userpwd != $oldpwd){
						echo "<script type='text/javascript'>alert('原密码错误，请重新输入')</script>";
					}else{
						if($newpwd != $confirmpwd){
							echo "<script type='text/javascript'>alert('新密码和确认密码不一致，请重新输入')</script>";
						}else{
							$readbook->updateuser($userid,$upusername,$confirmpwd,$date);
							Tool::alertLocation('修改成功','entry.php');
						}
					}
				}else{
					$readbook->updateuser($userid,$upusername,$userpwd,$date);
					Tool::alertLocation('修改成功','entry.php');
				}
			}
			$this->_tpl->assign('username',$username);
			$this->_tpl->display('personal.tpl');
		}



		function _create(){
			$userlist= new YinjieventModel();
			if($_POST["save"]=="保存"){
					$data['date']=$_POST["date"];
					$data['text']=$_POST["text"];
					$data['email']=$_SESSION["user_email"];
					if($_GET['id']){
						$id=$_GET['id'];
						$userlist->_update($data,$id);
						Tool::alertLocation("修改成功！",'admin.php?c=Backplan&m=see');

					}else{
						if($userlist->_insert($data)){
							Tool::alertLocation('添加成功','admin.php?c=Backplan&m=see');
							
						}
					}
			}
			$id=intval($_GET['id']);
			$eventinfo=$userlist->eventinfo($id);
			//print_r($eventinfo);
			$this->_tpl->assign("eventinfo",$eventinfo);

			$this->_tpl->display('create.tpl');
			
		}
		function _eventDelete(){

			$id=intval($_GET['id']);
			//echo $id;exit;
			$userlist= new YinjieventModel();
			if($userlist->delete($id)){
				Tool::alertLocation("删除成功！",'admin.php?c=Backplan&m=see');
			}
			$this->_tpl->display("see.tpl");
		}

		function _see(){
			$userlist= new YinjieventModel();
			$email=$_SESSION["user_email"];
			$pwd=$_SESSION["user_password"];
			$eventinfo=$userlist->checkevent($email);
			//print_r($eventinfo);
			$this->_tpl->assign("eventinfo",$eventinfo);

			$this->_tpl->display('see.tpl');
			
		}

	}

?>