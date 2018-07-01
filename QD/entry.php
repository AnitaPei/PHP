<?php
    require dirname(__FILE__).'/init.inc.php';
    global $_tpl;
    $_index = new IndexControl($_tpl);
    $_index->_entry();
   
?>