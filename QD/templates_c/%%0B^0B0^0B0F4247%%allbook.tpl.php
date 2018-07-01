<?php /* Smarty version 2.6.26, created on 2017-03-01 17:27:13
         compiled from allbook.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'allbook.tpl', 77, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-3 column"><!--左-->
                    <div class="listbook">
                        <div class="listbook-div">
                            <p class="listbook-p">分类</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php">全部</a></li>
                                <?php $_from = $this->_tpl_vars['leftnav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                <li class="listbook-li"><a onclick='esc1("navid","<?php echo $this->_tpl_vars['v']->id; ?>
")'><?php echo $this->_tpl_vars['v']->book_nav; ?>
</a></li>
                                <?php endforeach; endif; unset($_from); ?>
                                <div style="clear: both"></div>
                            </ul>
                            <script type="text/javascript">
                                function esc1(name,chares){
                                  window.location.href="allbook.php?"+name+"="+escape(chares);
                                }
                                $(function(){
                                    $('[class="listbook-li"]').click()
                                    {
                                        $(this).css("background-color", "red");
                                    }
                                });
                            </script>
                        </div>
                        <div class="listbook-div">
                            <p class="listbook-p">属性</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php">全部</a></li>
                                <li class="listbook-li"><a onclick='esc1("free","now()")'>免费</a></li>
                                <li class="listbook-li"><a href="allbook.php">vip</a></li>
                            </ul>
                            <script>
                            </script>
                            <div style="clear: both"></div>
                        </div>
                        <div class="listbook-div">
                            <p class="listbook-p">字数</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php">全部</a></li>
                                <li class="listbook-li"><a href="allbook.php?sizemin=300000">30万字以下</a></li>
                                <li class="listbook-li"><a href="allbook.php?size=500000">30-50万字</a></li>
                                <li class="listbook-li"><a href="allbook.php?sizemax=2000000">200万字以上</a></li>
                            </ul>
                            <div style="clear: both"></div>
                        </div>
                        <div class="listbook-div">
                            <p class="listbook-p">更新时间</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php?mm=3">三个月前</a></li>
                                <li class="listbook-li"><a href="allbook.php?mm=3">一个月前</a></li>
                                <li class="listbook-li"><a href="allbook.php?day=15">半个月前</a></li>
                                <li class="listbook-li"><a href="allbook.php?day=7">七日内</a></li>
                            </ul>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 column"><!--右-->
                    <div class="row clearfix">
                        <?php $_from = $this->_tpl_vars['allbook']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                        <div class="col-md-6 column" style="padding-bottom: 10px;padding-top: 10px; border-bottom: 1px solid #ccc;">
                            <div class="content-img-div">
                               <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"> <img src="<?php echo $this->_tpl_vars['v']->cover; ?>
" class="content-img1" style="width: 80px; height: 130px; margin-right: 5px;"></a>
                            </div>
                            <p class="content-h"> <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a></p>
                            <a href="">
                                <img src="images/user.0.1.png" class="content-img2">
                            </a>
                            <span class="content-span content-admin-a">
                                <a href=""><?php echo $this->_tpl_vars['v']->author; ?>
</a> |
                            </span>
                            <span  class="content-span content-nav-a"><a href="#"><?php echo $this->_tpl_vars['v']->book_nav; ?>
</a> | </span>  <span  class="content-span"><?php echo $this->_tpl_vars['v']->update_mode; ?>
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
        </div>
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