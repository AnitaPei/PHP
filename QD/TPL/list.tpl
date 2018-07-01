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
    <script src="js/jquery-3.1.1.min.js"></script>
    <link href="js/index.css" rel="stylesheet" type="text/css">
    <link href="js/list.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--登录和注册开始-->
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column ">
            <!--登录和注册开始-->
            <nav class="navbar navbar-inverse  " role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">中文起点网</a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="list.php?id=1">玄幻</a></li>
                            <li class=""><a href="list.php?id=5">都市</a></li>
                            <li class=""><a href="list.php?id=11">科幻</a></li>
                            <li class=""><a href="list.php?id=9">游戏</a></li>
                            <li class=""><a href="list.php?id=8">历史</a></li>
                            <li class=""><a href="ranking.php?">排行</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">全部作品</a></li>
                                    <li><a href="#">二次元</a></li>
                                    <li><a href="#">奇幻</a></li>
                                    <li><a href="#">武侠</a></li>
                                    <li><a href="#">军事</a></li>
                                    <li><a href="#">职场</a></li>
                                    <li><a href="#">体育</a></li>
                                </ul>
                            </li>
                        </ul>
                        <p class="navbar-text navbar-right" id="nav_button">
                            {{if $user_name !=""}}
                            <a href="admin.php?c=backplan&m=personal" >欢迎书友{{$user_name}}</a>
                            {{else}}
                            <a href="entry.php" >登录</a>|
                            <a href="admin.php?c=backplan&m=login" >注册</a>
                            {{/if}}
                        </p>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 column ">
                        <div class="row clearfix"> <!--logo 搜索 我的书架-->
                            <div class="col-md-4 column logo">
                                <img alt="140x140" src="images/qd.png" />
                            </div>
                            <div class="col-md-4 column logo"><!--logo 搜索 我的书架-->
                                <form class="bs-example bs-example-form" role="form" action="search.php">
                                    <div class="input-group ">
                                        <input type="text" name="search"  value="" placeholder="格林童话" class="form-control input-group_width">
                                        <span class="input-group-addon logo_search input-group_width"><input type="image" src="images/index/searchIOC.png"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 column logo_book"><!--logo 搜索 我的书架-->
                               <a href="mybook.php"> <span class="book_button"><img src="images/index/book_black.png">我的书架</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--登录和注册结束-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <ul class="breadcrumb" style="background-color: #fff;">
                    {{foreach from=$listNav item=val}}
                    <li class="active"><a href="list.php?childid={{$val->id}}">{{$val->book_nav}}</a></li>
                    {{/foreach}}
                    <li class="active"><a href="ranking.php?id=1">{{$listp->book_nav}}排行</a></li>
                    <li class="active"><a href="">{{$listp->book_nav}}完本</a></li>
                    <li class="active"><a href="#">{{$listp->book_nav}}免费</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row clearfix col-bottom"><!-- 下 -->
        <div class="col-md-2 column col-left"><!-- 左 -->
            <h4 class="left-h-1">本周强推</h4>
            <ul class="left-ul-1">
                {{foreach from=$listbook item=val}}
                <li class="left-li-1"><a href="read.php?bookid={{$val->id}}">{{$val->book_name}}</a><span class="left-li-sp"><a href="">{{$val->admin_user}}</a></span></li>
                {{/foreach}}
            </ul>
        </div>
        <div class="col-md-7 column col-center"><!-- 中 -->
            <div class="col-md-12 column">
                <div class="col-center-top"><!-- 中上 -->
                    {{foreach from=$listcon item=val}}
                    <div class="col-md-3 column ">
                        <a href="read.php?bookid={{$val->id}} "><center><img src="{{$val->cover}}" class="center-top-img"></center></a>
                        <p class="center-top-p1" ><a href="read.php?bookid={{$val->id}}">{{$val->book_name}}</a></p>
                        <p class="center-top-p2">{{$val->book_info|truncate:11}}</p>
                    </div>
                    {{/foreach}}

                </div>
            </div>
            <!-- 中下 -->
            <div class="col-md-12 column">
                <div class="center-bottom">
                    <div class="col-md-2 column ">
                        <div class="col-md-12 column">
                            <h4 class="center-bottom-h4">新书精选</h4>
                        </div>
                    </div>
                    <div class="col-md-10 column">
                        <div class="row clearfix">
                            {{foreach from=$listrc item=val}}
                                <div class="col-md-6 column center-bottom-li">
                                    <a href="read.php?bookid={{$val->id}}">{{$val->book_name}}</a>·<span class="center-bottom-span">{{$val->book_info|truncate:10}}</span>
                                </div>
                            {{/foreach}}
                        </div>

                    </div>
                </div>
            </div>
        </div><!--中中结束-->
        <div class="col-md-3 column col-right"><!-- 右 -->
            <div class="col-right-top"><!-- 右上 -->
                <p class="col-right-p1">编辑力荐</p>
                <p>种种田，打打架，世界要和平！</p>
                <span class="col-right-sp1"><a href="#">《通天仙路》</a></span>·<span class="col-right-sp2"><a href="">苍天白鹤</a></span>
            </div>
            <div class="col-right-cont"><!-- 右中 -->
                <p class="col-right-p2">频道动态</p>
                <ul>
                    <li class="col-right-li"><a href="#">「活动」 喜迎新春看好书</a></li>
                    <li class="col-right-li"><a href="#">「公告」 斗破苍穹动画</a></li>
                    <li class="col-right-li"><a href="#">「活动」 风云榜颁奖盛典</a></li>
                    <li class="col-right-li"><a href="#">「公告」 起点安全中心</a></li>
                </ul>
            </div>
            <div><!-- 右下 -->
                <a href=""><img src="images/1.jpg" style="width: 220px"></a>
            </div>
        </div>
    </div><!--中部结束-->
        <!--玄幻新书-->
    <div class="col-md-12 column">
        <div class="row clearfix">
            <div class="col-md-9   column">
                <div class="col-md-12 column xinshu-top">
                    <div class="xinshu">
                        {{$listp->book_nav}}新书
                    </div>
                </div>
                <div class="row clearfix xinshu-border-bom ">
                    {{foreach from=$listbom item=val}}
                        <div class="col-md-4 column xuanhuan-li" >
                            <div class="row clearfix">
                            <div class="xuanhuan-img">
                                <img src="{{$val->cover}}" style="width: 80px; height: 100px;">
                            </div>
                            <p class="xuanhuan-li-p1"><a href="read.php?bookid={{$val->id}}">{{$val->book_name}}</a></p>
                            <p class="xuanhuan-li-p2">{{$val->book_info|truncate:15}}</p>
                            <a href="read.php?bookid={{$val->id}}"><img src="images/user.0.1.png" class="xuanhuan-li-img"></a><span class="xuanhuan-li-sp"><a href="read.php?bookid={{$val->id}}">{{$val->admin_user|truncate:10}}</a></span>
                            <span class="xuanhuan-li-sp1">{{$val->book_nav}}</span>
                        </div>
                    </div>
                    {{/foreach}}
                </div>
                <center style="margin-top: 20px; font-size: 20px;">{{$list_page}}</center>
            </div>
            <div class="col-md-3 column" style="margin-top: 15px;">
                <ul>
                    <h5>新书排行榜 </h5>
                    <li class="list_book1">
                        <div class="list_book11" >
                            <a href="read.php?bookid={{$freeone->id}}"> <img src="{{$freeone->cover}}" style="float: right; width: 70px; height: auto;"></a>
                            <img src="images/1.png"><br>
                            <a href="read.php?bookid={{$freeone->id}}"><span>{{$freeone->book_name}}</span></a><br>
                            <span class="book_list1_red">{{$freeone->favorte}}月票</span><br>
                            <span>{{$freeone->author}}</span>
                        </div>
                    </li>
                    {{foreach from=$freelist key=key item=value}}
                    <li class="list_book1">
                        <a href="read.php?bookid={{$value->id}}"><img src="images/{{$key+2}}.png"><span class="book_name">{{$value->book_name}}</span> <span class="book_author">{{$value->author}}</span></a>
                    </li>
                    {{/foreach}}
                </ul>

            </div>
        </div>
    </div>
        <!-- 分页-->
</div>
<!--登录和注册结束-->
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{include file="foot.tpl"}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>