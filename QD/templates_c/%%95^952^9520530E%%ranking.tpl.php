<?php /* Smarty version 2.6.26, created on 2017-02-28 16:19:15
         compiled from ranking.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- 内容开始 -->
	<div class="container">  
		<!-- 头部开始 -->
		<div class="row clearfix">
		    <div class="right-top-div">
		        <h4>人气榜单</h4>
		        <span id="span1"><?php echo $this->_tpl_vars['datetime']; ?>
 更新</span>
		        <p>
		            <a href="list.php" id="a1">全部分类</a>
		            <?php $_from = $this->_tpl_vars['rankingnavs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		            <a href="list.php?id=<?php echo $this->_tpl_vars['v']->id; ?>
"> · <?php echo $this->_tpl_vars['v']->book_nav; ?>
</a>
		            <?php endforeach; endif; unset($_from); ?>
		        </p>
		    </div>
		<!-- 头部结束 -->
		        <!-- 排行榜列表 第1行-->
		        <!-- 第1行 第1列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>点击榜 <a href="ranking.php">更多></a> <span class="span2" style="padding-top: 5px;"><a href="ranking.php" class="zhou">周</a><a href="ranking.php">·月</a><a href="ranking.php">·总</a></span></h5>
		                <?php $_from = $this->_tpl_vars['rankfirst2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            </h4>
		                            <p class="digital"><strong><?php echo $this->_tpl_vars['v']->click; ?>
</strong> 点击</p>
		                            <p class="kind">
		                                <a href="list.php?id=<?php echo $this->_tpl_vars['v']->id; ?>
" class="type"><?php echo $this->_tpl_vars['v']->book_nav; ?>
</a> <a href="#" class="writer">· <?php echo $this->_tpl_vars['v']->admin_user; ?>
</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
">
		                                <img src="<?php echo $this->_tpl_vars['v']->cover; ?>
" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		                <?php $_from = $this->_tpl_vars['rankform2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/<?php echo $this->_tpl_vars['k']+2; ?>
.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
" class="name"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            <span class="num"><?php echo $this->_tpl_vars['v']->click; ?>
</span>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>	
		            </ul>
		        </div>
		        <!-- 第1行 第2列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>推荐票榜 <a href="ranking.php">更多></a> <span class="span2" style="padding-top: 5px;"><a href="ranking.php" class="zhou">周</a><a href="ranking.php">·月</a><a href="ranking.php">·总</a></span></h5>
		                <?php $_from = $this->_tpl_vars['rankfirst1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            </h4>
		                            <p class="digital"><strong><?php echo $this->_tpl_vars['v']->vip_count; ?>
</strong> 推荐票</p>
		                            <p class="kind">
		                                <a href="list.php?id=<?php echo $this->_tpl_vars['v']->id; ?>
" class="type"><?php echo $this->_tpl_vars['v']->book_nav; ?>
</a> <a href="#" class="writer">· <?php echo $this->_tpl_vars['v']->admin_user; ?>
</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
">
		                                <img src="<?php echo $this->_tpl_vars['v']->cover; ?>
" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		                <?php $_from = $this->_tpl_vars['rankform1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/<?php echo $this->_tpl_vars['k']+2; ?>
.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
" class="name"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            <span class="num"><?php echo $this->_tpl_vars['v']->vip_count; ?>
</span>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		            </ul>
		        </div>       
		        <!-- 第1行 第3列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>收藏榜 <a href="ranking.php">更多></a></h5>
		                <?php $_from = $this->_tpl_vars['rankfirst']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            </h4>
		                            <p class="digital"><strong><?php echo $this->_tpl_vars['v']->favorte; ?>
</strong> 收藏数</p>
		                            <p class="kind">
		                                <a href="list.php?id=<?php echo $this->_tpl_vars['v']->id; ?>
" class="type"><?php echo $this->_tpl_vars['v']->book_nav; ?>
</a> <a href="#" class="writer">· <?php echo $this->_tpl_vars['v']->admin_user; ?>
</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
">
		                                <img src="<?php echo $this->_tpl_vars['v']->cover; ?>
" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		                <?php $_from = $this->_tpl_vars['rankform']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/<?php echo $this->_tpl_vars['k']+2; ?>
.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
" class="name"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            <span class="num"><?php echo $this->_tpl_vars['v']->favorte; ?>
</span>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		            </ul>
		        </div>
		        <!-- 第1行 第4列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>完本榜 <a href="ranking.php">更多></a> <span class="span2" style="padding-top: 5px;"><a href="ranking.php" class="zhou">周</a><a href="ranking.php">·月</a><a href="ranking.php">·总</a></span></h5>
		                <?php $_from = $this->_tpl_vars['rankfirst2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            </h4>
		                            <p class="digital"><strong><?php echo $this->_tpl_vars['v']->click; ?>
</strong> 点击</p>
		                            <p class="kind">
		                                <a href="list.php?id=<?php echo $this->_tpl_vars['v']->id; ?>
" class="type"><?php echo $this->_tpl_vars['v']->book_nav; ?>
</a> <a href="#" class="writer">· <?php echo $this->_tpl_vars['v']->admin_user; ?>
</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
">
		                                <img src="<?php echo $this->_tpl_vars['v']->cover; ?>
" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		                <?php $_from = $this->_tpl_vars['rankform2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/<?php echo $this->_tpl_vars['k']+2; ?>
.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid=<?php echo $this->_tpl_vars['v']->id; ?>
" class="name"><?php echo $this->_tpl_vars['v']->book_name; ?>
</a>
		                            <span class="num"><?php echo $this->_tpl_vars['v']->click; ?>
</span>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; endif; unset($_from); ?>
		            </ul>
		        </div>
		        <!-- 第1行 第4列 结束 -->
			</div>
	</div>
<!-- 内容结束 --> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--登录和注册结束-->
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.8.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>