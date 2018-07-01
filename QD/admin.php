<?php
    require dirname(__FILE__).'/init.inc.php';
    global $_tpl;
    if ($_REQUEST['c']){//控制器
        if (strstr($_REQUEST['c'],'Control')==false){
            $need_last='Control';
        }
        $control_name=$_REQUEST['c'].$need_last;
    }else{
         $control_name='BackplanControl';
    }
        $_index=new $control_name($_tpl);
   if ($_REQUEST['m']){//方法
       $functionname="_".$_REQUEST['m'];
    }else{
       $functionname="_index";
   }
$_index->$functionname();
?>