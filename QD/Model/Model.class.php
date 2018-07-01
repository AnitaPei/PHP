<?php
	//模型基类
	class Model {
		
		//执行多条SQL语句
		public function multi($_sql) {
			$_db = DB::getDB();
			$_db->multi_query($_sql);
			DB::unDB($_result = null, $_db);
			return true;
		}
		
		//获取下一个增值id模型
		public function nextid($_table) {
			$_sql = "SHOW TABLE STATUS LIKE '$_table'";
			$_object = $this->one($_sql);
			return $_object->Auto_increment;
		}
		
		//查找总记录模型
		protected function total($_sql) {
			$_db = DB::getDB();
			$_result = $_db->query($_sql);
			$_total = $_result->fetch_row();
			DB::unDB($_result, $_db);
			return $_total[0];
		}
		
		//查找单个数据模型
		protected function one($_sql) {
			$_db = DB::getDB();
			$_result = $_db->query($_sql);
			$_objects = $_result->fetch_object();
			DB::unDB($_result, $_db);
			return Tool::htmlString($_objects);
		}
		//查找多个数据模型
		protected function all($_sql) {
			$_db = DB::getDB();
			$_result = $_db->query($_sql);
			$_html = array();
			while (!!$_objects = $_result->fetch_object()) {
				$_html[] = $_objects;
			}
			DB::unDB($_result, $_db);
			return Tool::htmlString($_html);
		}
		//增删修模型
		protected function aud($_sql) {
			$_db = DB::getDB();
			$_db->query($_sql);
			$_affected_rows = $_db->affected_rows;
			DB::unDB($_result = null, $_db);
			return $_affected_rows;
		}

		/*
		 *$con="where 条件" array
		 * $filed="查询字段";
		 * $limit="分页信息";
		 * $orderby="order by 字段名 desc"
		 * $groupby="group by 分组字段"
		 * */
		function get_all($con,$filed="*",$orderby="ORDER BY id DESC",$groupby="",$limit=10){
			if(is_array($con)){
				$wheresql='where '.implode(' AND ',$con);
			}
			if(is_string($con)){
				$wheresql=$con;
			}
			if(is_int($limit)){
				$limit=" limit ".$limit;
			}
			$sql="SELECT $filed FROM {$this->tablename} {$wheresql} {$groupby} {$orderby} {$limit} ";
		
			return $this->all($sql);
		}
		function _insert($date){
			if(!$date){//判断DATE是不是为空
				return false;
			}//判断DATE是不是数组
			if(!is_array($date)){
				return false;
			}else{//是数组将$DATE的值给一个空的$inserdate数组
				foreach ($date as $key=>$value){
					$inserdate[]="$key = '$value'";
				}
			}
			$insersql=implode(",",$inserdate);//将一个$inserdate中的数据用,号给一个字符串
			$sql="INSERT INTO {$this->tablename} set $insersql;";
			$_db=DB::getDB();
			$_db->query($sql);
			$insert_id=$_db->insert_id;
			DB::unDB($_result = null,$_db);
			return $insert_id;
		}
		function _update($date,$id){
			if(!$date){//判断DATE是不是为空
				return false;
			}//判断DATE是不是数组
			if(!is_array($date)){
				return false;
			}else{//是数组将$DATE的值给一个空的$inserdate数组
				foreach ($date as $key=>$value){
					if($key=='login_count'){
						$inserdate[]="$key = $value";
					}else
						$inserdate[]="$key = '$value'";
				}
			}
				$insersql=implode(",",$inserdate);//将一个$inserdate中的数据用,号给一个字符串
			 $sql="UPDATE {$this->tablename} set $insersql WHERE id=$id;";
			return $this->aud($sql);
		}
		function delete($con){
			if(is_array($con)){
				$wheresql='WHERE '.implode(' AND ',$con);
			}elseif(is_int($con)){
				$wheresql="WHERE id = $con";
			}elseif (is_string($con)) {
				$wheresql = "WHERE $con";
			}
			 $sql="DELETE FROM {$this->tablename} $wheresql";
			return $this->aud($sql);
		}
		function get_groupnav(){
			$navs=$this->get_all(null,'*','ORDER BY pid',null,null);
			//array(1=>大类对象->subnav=>array)
			if($navs){
				foreach ($navs as $key=>$value){
					if($value->pid==0){//大类
						$group_navs[$value->id]=$value;
					}else{
						$group_navs[$value->pid]->subnav[]=$value;
					}
				}
			}
			return $group_navs;
		}
	}

?>