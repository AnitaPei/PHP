<?php
    class FavoriteModel extends Model{
        function __construct()
        {
            $this->tableName = TABLE_PR . "favorite";
        }
        function find($bookid,$userid){
         $sql="SELECT * FROM $this->tableName WHERE user_nane=$userid AND book=$bookid";
        return $this->one($sql);
        }
        function _insert1($bookid,$userid,$time){
            $sql="INSERT INTO {$this->tableName} set user_nane=$userid,book=$bookid,read_time='{$time}'";
            $_db=DB::getDB();
            $_db->query($sql);
            $insert_id=$_db->insert_id;
            DB::unDB($_result = null,$_db);
            return $insert_id;
        }
    }




?>