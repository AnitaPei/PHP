<?php /* Smarty version 2.6.26, created on 2017-03-01 11:04:43
         compiled from header.tpl */ ?>
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
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
    <link href="js/index.css" rel="stylesheet" type="text/css">
    <link href="js/<?php if ($this->_tpl_vars['jsfile']): ?><?php echo $this->_tpl_vars['jsfile']; ?>
<?php endif; ?>.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
<!--登录和注册开始-->
<div class="container">
    <div class="row clearfix"><!--导航栏-->
        <div class="col-md-12 column">
            <ul class="nav nav-tabs">
                <li class="active"> <a href="index.php">起点中文网</a></li>
                <li><a href="#">起点女生网</a></li>
                <li><a href="#">创世中文网</a></li>
                <li><a href="#">云起书院</a></li>
                <li><a href="#">繁体版</a></li>
                <li><a href="#">返回旧版</a></li>
                <p class="navbar-text navbar-right" id="nav_button">
                    <?php if ($this->_tpl_vars['user_name'] != ""): ?>
                    <a href="admin.php?c=backplan&m=personal" >欢迎书友<?php echo $this->_tpl_vars['user_name']; ?>
</a>
                    <?php else: ?>
                    <a href="entry.php" >登录</a>|
                    <a href="admin.php?c=backplan&m=login" >注册</a>
                    <?php endif; ?>
                </p>
            </ul>

        </div>
    </div>

    <div class="row clearfix"><!--广告-->
        <div class="col-md-12 column column " style="margin: 0px 0px 20px;">
            <?php $_from = $this->_tpl_vars['advtlist1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['values']):
?>
                <?php if ($this->_tpl_vars['key'] == 0): ?> <img src="<?php echo $this->_tpl_vars['values']->advt_img; ?>
"  class="img-responsive" alt="Cinque Terre" ><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix"> <!--logo 搜索 我的书架-->
                <div class="col-md-4 column logo">
                    <img alt="140x140" src="images/qd.png" />
                </div>
                <div class="col-md-4 column logo"><!--logo 搜索 我的书架-->
                    <form class="bs-example bs-example-form" role="form" action="search.php" >
                        <div class="input-group ">
                            <input type="text" name="search"  placeholder="格林童话" class="form-control input-group_width">
                            <span class="input-group-addon logo_search input-group_width"><input type="image" src="images/index/searchIOC.png"></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 column logo_book"><!--logo 搜索 我的书架-->
                   <center> <a href="mybook.php"> <span class="book_button"><img src="images/index/book_black.png">我的书架</span></a></center>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix"><!--导航-->
        <div class="col-md-12 column">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navbar-brand1" href="index.php"><img src="images/index/book_ioc.png"><span>作品分类</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li ><a href="allbook.php">全部作品</a></li>
                            <li><a href="ranking.php">排行</a></li>
                            <li><a href="list.php">书库</a></li>
                            <li><a href="freebook.php">免费</a></li>
                            <li class="#"><a href="admin.php">作家专区</a></li>
                            <li><a href="#"><img src="images/index/phone.png" class="client">客户端</a></li>
                        </ul>
                        <p class="navbar-text navbar-right nav_button">
                            <a href="entry.html" >  <img src="images/index/mouse.png">页游</a>
                            <a href="login.html" > <img src="images/index/play_key.png">手游</a>
                        </p>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--登录和注册结束-->