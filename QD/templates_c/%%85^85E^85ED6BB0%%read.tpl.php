<?php /* Smarty version 2.6.26, created on 2017-03-02 11:29:26
         compiled from read.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'read.tpl', 143, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--在IE中运行最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--初始化移动浏览器不区分手机与pc-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>
    <!-- 载入Bootstrap -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="js/read.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/read.js"></script>
</head>
<body>

<div class="container all" style="width:100%;">
	<!-- 头部开始 -->
	<div class="row clearfix top">
		<div class="col-md-12 column">
        	<div class="row clearfix">
            	<!-- 头部左边导航开始 -->
				<div class="col-md-6 column">
                    <ul class="nav nav-tabs top_left">
                        <!-- 起点 logo 图标 起点中文网 -->
                        <img src="images/read/logo.png" class="top_img-1"> <!-- logo -->
                        <li class="public_li logo">
                             <!--起点中文网 图片-->
                             <a href="index.php" class="public_a"><span class="logo_qidian"><img src="images/read/logo-font.png" class="top_img-2"><span class="arrow"></span></span></a>
                        </li>
					</ul>
                </div>
                <!-- 头部左边导航结束 -->
                
                <!-- 头部右边导航开始 -->
                <div class="col-md-6 column top-right">
                    <ul class="nav nav-tabs" style="float: right;margin-right: 40%;">
                        <?php if ($_GET['userid']): ?>
                        <li class="right_user public_li public_red">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle user_a"><font><?php echo $this->_tpl_vars['bookinfo']->user_name; ?>
</font><span class="arrow"></span></a>
                            <div class="user_menu menu" style="display:none;">
                                <ul>
                                    <li>
                                         <a href="#">账户设置</a>
                                    </li>
                                    <li>
                                         <a href="#">账务中心</a>
                                    </li>
                                    <li>
                                         <a href="#">作家专区</a>
                                    </li>
                                    <li>
                                         <a href="#">退出</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['user_name'] != ""): ?>
                                <a href="admin.php?c=backplan&m=personal"  style="margin-top: 20px;">欢迎书友<?php echo $this->_tpl_vars['user_name']; ?>
</a>
                            <?php else: ?>
                                <a href="entry.php" style="margin-top: 20px;" >登录</a>
                                <a href="admin.php?c=backplan&m=login" style="margin-top: 20px;" >注册</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </ul>
            	</div>
                <!-- 头部右边导航结束 -->
            </div>
		</div>
	</div>
    <!-- 头部结束 -->
    
    <!-- 阅读内容开始 -->
	<div class="row clearfix ">
    	<div class="col-md-2 column"></div>
		<div class="col-md-8 column content">
        	<!-- 内容 导航 开始 -->
			<div class="row clearfix">
				<div class="col-md-12 column content_nav">
                	<a href="index.php">首页</a> &gt; <a href="list.php?id=<?php echo $this->_tpl_vars['readnav']->perantnavid; ?>
"><?php echo $this->_tpl_vars['readnav']->perantnav; ?>
</a> > <a href="list.php?childid=<?php echo $this->_tpl_vars['readnav']->childnavid; ?>
"><?php echo $this->_tpl_vars['readnav']->childnav; ?>
</a> ><a href="#"> <?php echo $this->_tpl_vars['bookinfo']->book_name; ?>
</a>
				</div>
			</div>
            <!-- 内容 导航 结束 -->
            
            <!-- 内容 开始 -->
			<div class="row clearfix content_book">
            	<!-- 左边列表 开始 -->
				<div class="col-md-2 column book_left_list">
                	<ul class="left_list_nav">
                    	<!--<span class="glyphicon glyphicon-list"></span> 用设置bootstrap 设置字体图标-->
                      <li class="shujia" id="bookfrom"><span id="left_img"></span><font>书架</font></li>
                    </ul>
                    <script>
                        $(function(){
                            $('[id="bookfrom"]').click(function(){
                                var $bookid=<?php echo $this->_tpl_vars['bookinfo']->id; ?>
;
                                $.ajax({ //一个Ajax过程
                                    type: "post", //以post方式与后台沟通
                                    url : "admin.php?c=backplan&m=addbook", //与此php页面沟通
                                    dataType:'json',//从php返回的值以 JSON方式 解释
                                    data: 'bookid='+$bookid ,//发给php的数据
                                    success: function(date){
                                        alert(date);
                                    }
                                });
                            });
                        })
                    </script>
                    <!-- 指南 -->
                    <!--<a href="#"><div class="handbook">指南</div></a>-->
                </div>
                <!-- 左边列表 结束 -->
                
                <!-- 具体内容 开始 -->
				<div class="col-md-8 column book_center_content">
                	<!-- 第一部分 -->
                    <?php if ($_GET['page'] <= 1): ?>
					<div class="row clearfix content_top">

                    	<!-- 图书信息 开始 -->
						<div class="col-md-12 column content_title">
                        	<dl class="title_author">
                                <dt><img src="<?php echo $this->_tpl_vars['bookinfo']->cover; ?>
"></dt>
                                <dd class="title"><?php echo $this->_tpl_vars['bookinfo']->book_name; ?>
</dd>
                                <dd class="author"> <?php echo $this->_tpl_vars['bookinfo']->admin_user; ?>
 著</dd>
                            </dl>
                            <div class="title_center">
                                <dl class="center_type">
                                    <dt><?php echo $this->_tpl_vars['readnav']->perantnav; ?>
</dt>
                                    <dd>类型</dd>
                                </dl>
                                <dl class="center_time">
                                    <dt><?php echo ((is_array($_tmp=$this->_tpl_vars['bookinfo']->reg_time)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y.%m.%d") : smarty_modifier_date_format($_tmp, "%Y.%m.%d")); ?>
</dt>
                                    <dd>上架</dd>
                                </dl>
                                <dl class="center_serialized">
                                    <dt><?php echo $this->_tpl_vars['bookinfo']->size; ?>
</dt>
                                    <dd>连载 (字)</dd>
                                </dl>
                            </div>
                            <div class="banquan">
                                <p class="banquan_sf">本书由起点中文网首发</p>
                                <p class="banquan_bq">&copy;版权所有 侵权必究</p>
                            </div>
						</div>
                        <!-- 图书信息 结束 -->
					</div>
                    <?php endif; ?>
                    <!-- 第二部分 -->
					<div class="row clearfix content_info">
						<div class="col-md-12 column">
                            <h3><?php echo $this->_tpl_vars['bookinfo']->conchapter; ?>
</h3>
                            
                            <!-- 章节 具体 内容 -->
                            <div class="con_info" style="float: left;line-height: 30px;font-size: 16px;">
                                <center style="font-size: 25px;"><?php echo $this->_tpl_vars['allbook'][0]->chapter; ?>
</center>
                                <?php echo $this->_tpl_vars['allbook'][0]->content; ?>

                            </div>
						</div>
					</div>
                    
                    <!-- 第三部分 上一章、下一章 开始  -->
                    <div class="row clearfix">
                        <div class="col-md-12 column content_next">
                            <div class="row clearfix">
                               <center style="font-size:18px; margin-top: 22px;"> <?php echo $this->_tpl_vars['fpage']; ?>
</center>
                                <?php if ($this->_tpl_vars['user_name'] != ""): ?>
                                <?php else: ?>
                                    <p style=" text-align: center;font-size: 15px;"><a href="entry.php">登录</a>后，可看全本图书</p>
                                <?php endif; ?>
                             </div>
                        </div>
                    </div>
                 	<!-- 第三部分 上一章、下一章 结束 -->
				</div>
                <!-- 具体内容 结束 -->
                
                <!-- 右边列表 -->
				<div class="col-md-2 column right">
                	<!--<ul>
                        <a href="#"><li><span class="vote"></span><br>投票</li></a>
                    </ul>-->
                </div>
			</div>
            <!-- 内容 结束 -->
            
		</div>
        <div class="col-md-2 column"></div>
	</div>
    <!-- 阅读内容 结束 -->
    
</div>

<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>