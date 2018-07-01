<?php /* Smarty version 2.6.26, created on 2017-03-01 20:08:14
         compiled from freebook.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'freebook.tpl', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
        <div class="col-md-12 column"><!---->
            <div class="row clearfix">
                <?php $_from = $this->_tpl_vars['freebook']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                <div class="col-md-4 column" style="padding-bottom: 10px;padding-top: 10px; ">
                    <div class="content-img-div">
                       <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"><img src="<?php echo $this->_tpl_vars['v']->cover; ?>
" class="content-img1" style="width: 80px; height: 130px; margin-right: 5px;"></a>
                    </div>
                    <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"> <p class="content-h"><?php echo $this->_tpl_vars['v']->book_name; ?>
</p></a>
                    <a href="">
                        <img src="images/user.0.1.png" class="content-img2">
                    </a>
                    <span class="content-span content-admin-a">
                        <a href=""><?php echo $this->_tpl_vars['v']->admin_user; ?>
</a> |
                    </span>
                    <span  class="content-span content-nav-a"><?php echo $this->_tpl_vars['v']->book_nav; ?>
| </span>  <span  class="content-span"><?php echo $this->_tpl_vars['v']->update_mode; ?>
</span>
                    <p class="content-info"><?php echo ((is_array($_tmp=$this->_tpl_vars['v']->book_info)) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</p>
                    <p class="content-size"><?php echo $this->_tpl_vars['v']->size; ?>
字</p>
                </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
            <center style="font-size: 20px; margin-top: 20px;"><?php echo $this->_tpl_vars['fenpage']; ?>
</center>
        </div>
</div>
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>