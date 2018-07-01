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
    <script type="text/javascript" src="js/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="js/read.js"></script>
</head>
<body>

<div class="container all">
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
                             <a href="#" class="public_a"><span class="logo_qidian"><img src="images/read/logo-font.png" class="top_img-2"><span class="arrow"></span></span></a>
                             <!-- 起点中文网 下拉菜单 -->
                             <div class="logo_qidian_childmenu menu" style="display:none;">
                                <ul>
                                    <a href="#"><li>起点女生网</li></a>
                                    <a href="#"><li>创世中文网</li></a>
                                    <a href="#"><li>云起书院</li></a>
                                </ul>
                             </div>
                        </li>
                        <!-- 手机阅读 -->
                        <li class="public_li top-left_li2">
                             <a href="" class="public_a">手机阅读</a>
                             <!-- 手机阅读 下拉菜单 -->
                             <div class="phoneread_menu menu" style="display:none;">
                                <p>扫描下载起点读书客户端</p>
                                <img src="images/read/qd_qrcode.0.2.png">
                               <div class="apple">
                                    <a href="#"><span></span>Apple store&nbsp;&nbsp;下载</a>
                                </div>
                                <div class="android">
                                    <a href="#"><span></span>Android&nbsp;&nbsp;下载</a>
                                </div>
                            </div>
                        </li>
                        <!-- 最近阅读 -->
                        <li class="public_li top-left_li3"><a href="#" class="public_a">最近阅读</a>
                        <!-- 最近阅读 下拉菜单 -->
                            <div class="recentlyread_menu menu" style="display:none;">
                                <div class="recentlyread_info">
                                    <a href="#" class="book_img"><img src="images/read/shx.png"></a>
                                    <div class="recentlyread_bookinfo">
                                        <p class="bookinfo_title"><a href="#">圣墟</a></p>
                                        <p class="bookinfo_new">最新章节:<a href="#">第一百九十四章 东西方大决战</a></p>
                                        <p class="bookinfo_see">看到:<a href="#">第一章 沙漠中的彼岸花</a><font><a href="#" style="display:none;">继续阅读</a></font></p>
                                    </div>
                                </div>
                                <a href="#"><div class="see_all">查看全部 <b>></b></div></a>
                            </div>
                        </li>
                        <!-- 快速导航 -->
                        <li class="public_li top-left_li4"><a href="#" class="public_a"><img src="images/read/quicknav_icon.png" class="top_img-4">快速导航</a>
                        	<!-- 快速导航 下拉菜单 -->
                            <div class="quicknav_menu menu" style="display:none;">
                                <div class="quicknav_onelist">
                                    <img src="images/read/classify_font.png">
                                    <ul>
                                        <li><a href="#">玄幻</a></li><li><a href="#">奇幻</a></li><li><a href="#">武侠</a></li>
                                        <li><a href="#">仙侠</a></li><li><a href="#">都市</a></li><li><a href="#">剧场</a></li>
                                        <li><a href="#">历史</a></li><li><a href="#">军事</a></li><li><a href="#">游戏</a></li>
                                        <li><a href="#">体育</a></li><li><a href="#">科幻</a></li><li><a href="#">灵异</a></li>
                                        <li class="quadratic_element"><a href="#">二次元</a></li><li><a href="#">完本</a></li><li><a href="#">女生</a></li><li><a href="#">三江</a></li>
                                    </ul>
                                </div>
                                <div class="quicknav_twolist">
                                    <img src="images/read/other_font.png">
                                    <ul>
                                        <li><a href="#">投稿</a></li><li><a href="#">签约</a></li><li><a href="#">福利</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
					</ul>
                </div>
                <!-- 头部左边导航结束 -->
                
                <!-- 头部右边导航开始 -->
                <div class="col-md-6 column top-right">
                    <ul class="nav nav-tabs">
                    	<li class="nav_right_li">
                            <input type="text" value="" size="20" placeholder="我的末世基地车" class="search">
                        </li>
                        <a href="#"><span class="glyphicon glyphicon-search search_icon"></span></a>
                        <li>
                            <font class="line">|</font>
                        </li>

                        {{if $smarty.get.userid}}
                        <li class="right_user public_li public_red">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle user_a"><font>{{$readinfo->user_name}}</font><span class="arrow"></span></a>
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
                        {{else}}
                        {{if $user_name !=""}}
                        <a href="admin.php?c=backplan&m=personal"  style="margin-top: 20px;">欢迎书友{{$user_name}}</a>
                        {{else}}
                        <a href="entry.php" style="margin-top: 20px;" >登录</a>|
                        <a href="admin.php?c=backplan&m=login" style="margin-top: 20px;" >注册</a>
                        {{/if}}
                        {{/if}}
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
                	<a href="index.php">首页</a> &gt; <a href="list.php?id='{{$readnav->perantnavid}}'">{{$readnav->perantnav}}</a> > <a href="allbook.php?id='{{$readnav->childnavid}}">{{$readnav->childnav}}</a> ><a href="#"> {{$readinfo->book_name}}</a>
				</div>
			</div>
            <!-- 内容 导航 结束 -->
            
            <!-- 内容 开始 -->
			<div class="row clearfix content_book">
            	<!-- 左边列表 开始 -->
				<div class="col-md-2 column book_left_list">
                	<ul class="left_list_nav">
                    	<!--<span class="glyphicon glyphicon-list"></span> 用设置bootstrap 设置字体图标-->
                       	<a href="#"><li class="shujia"><span id="left_img"></span><font>书架</font></li></a>
                    </ul>
                    <!-- 指南 -->
                    <!--<a href="#"><div class="handbook">指南</div></a>-->
                </div>
                <!-- 左边列表 结束 -->
                
                <!-- 具体内容 开始 -->
				<div class="col-md-8 column book_center_content">
                
                	<!-- 第一部分 -->
					<div class="row clearfix content_top">
                    	<!-- 图书信息 开始 -->
						<div class="col-md-12 column content_title">
                        	<dl class="title_author">
                                <dt><img src="{{$readinfo->cover}}"></dt>
                                <dd class="title">{{$readinfo->book_name}}</dd>
                                <dd class="author"> {{$readinfo->admin_user}} 著</dd>
                            </dl>
                            <div class="title_center">
                                <dl class="center_type">
                                    <dt>玄幻</dt>
                                    <dd>类型</dd>
                                </dl>
                                <dl class="center_time">
                                    <dt>{{$readinfo->reg_time|date_format:"%Y.%m.%d"}}</dt>
                                    <dd>上架</dd>
                                </dl>
                                <dl class="center_serialized">
                                    <dt>{{$readinfo->booksize}}</dt>
                                    <dd>连载 (字)</dd>
                                </dl>
                            </div>
                            <div class="wu">
                                <p class="wu_p1">与649.56万位书友共同开启《{{$readinfo->book_name}}》的玄幻之旅</p>
                                <p class="wu_p2">「盟主」 <a href="#">夜冷情深风蓝</a> &nbsp;&nbsp;「盟主」 <a href="#">叁生缘〤杀猎人</a></p>
                            </div>
                            <div class="banquan">
                                <p class="banquan_sf">本书由起点中文网首发</p>
                                <p class="banquan_bq">&copy;版权所有 侵权必究</p>
                            </div>
						</div>
                        <!-- 图书信息 结束 -->
					</div>
                    
                    <!-- 第二部分 -->
					<div class="row clearfix content_info">
						<div class="col-md-12 column">
                        	<!-- 书签 -->
                         	<span class="glyphicon glyphicon-bookmark bookmark"></span>
                            <h3>{{$readinfo->conchapter}}</h3>
                            <!-- 书籍信息 开始 -->
                            <div class="top_info">
                            	<div class="primary_info">
                                	<a href="#" class="info_title"><span class="title"></span>{{$readinfo->book_name}}</a>
                                    <a href="#"><span class="author"></span>{{$readinfo->admin_user}}</a>
                                    <img src="images/read/num_icon.png" class="num_icon"><span class="num">{{$readinfo->contentsize}} 字</span>
                                    <span class="glyphicon glyphicon-time time"></span><font>2016.11.01 10:25</font>
                                </div>

                                <div class="primary_comment">

                                	<!-- 最新评论 -->
                                	<div class="new_answer one_answer">
                                    	<a href="#"><img src="images/read/50.png" class="icon1"></a>
                                    	<!--<div class="comment_icon1 public_answer">
                                        	<a href="#"><span class="glyphicon glyphicon-remove close" onClick=""></span></a>
                                            <div class="pinlun">一直是大大的粉丝<a href="#"><span class="sofa"></span></a></div>
                                            <div class="source">来自 <a href="#">其萍</a><span>2017-02-05 11:19:29</span></div>
                                            <input type="text" name="pinglun"> <a href="#"><span class="answer">回复</span></a>
                                        </div>-->
                                    </div>
                                    <!-- 第二最新评论 -->
                                    <div class="new_answer">
                                    	<a href="#"><img src="images/read/50(2).png" class="icon1"></a>
                                    	<!--<div class="comment_icon1 public_answer" style="display:none">
                                        	<a href="#"><span class="glyphicon glyphicon-remove close" onClick=""></span></a>
                                            <div class="pinlun">到<a href="#"><span class="sofa"></span></a></div>
                                            <div class="source">来自 <a href="#">易际总</a><span>2017-01-31 00:06:14</span></div>
                                            <input type="text" name="pinglun"> <a href="#"><span class="answer">回复</span></a>
                                        </div>-->
                                    </div>
                                    <!-- 第三最新评论 -->
                                    <div class="new_answer">
                                    	<a href="#"><img src="images/read/50(3).png" class="icon1"></a>
                                    	<!--<div class="comment_icon1 public_answer" style="display:none">
                                        	<a href="#"><span class="glyphicon glyphicon-remove close" onClick=""></span></a>
                                            <div class="pinlun">次元羁绊，我的书虽然没几个人看，希望各位能去看看，给我鼓励也好，给...<a href="#"><span class="sofa"></span></a></div>
                                            <div class="source">来自 <a href="#">虚面极影</a><span>2017-01-28 14:35:15</span></div>
                                            <input type="text" name="pinglun"> <a href="#"><span class="answer">回复</span></a>
                                        </div>-->
                                    </div>
                                    
                                    <div><a href="#" class="pencil"><img src="images/read/pen_icon.png" class="pen"></a></div>
                                    54
                                </div>
                            </div>
                            <!-- 书籍信息 结束 -->
                            
                            <!-- 章节 具体 内容 -->

                            <div class="con_info" style="float: left;">

                                {{$readinfo->content}}
                            </div>

                            <div class="info_bottom">
                                <a href="#" class="zs"><div class="zanshang"><b>赞赏</b><font>49</font></div></a>
                                <div class="head">
                                    <a href="#" class="money"><img src="images/read/356498550x50.png">
                                        <span class="cat_money" style="display:none;"></span>
                                    </a>
                                    <a href="#" class="money"><img src="images/read/1.jpg">
                                        <span class="child_money" style="display:none;"></span>
                                    </a>
                                    <a href="#" class="money"><img src="images/read/default_user.0.2.png">
                                        <span class="user1_money" style="display:none;"></span>
                                    </a>
                                    <a href="#" class="money"><img src="images/read/377716350x50.png">
                                        <span class="user2_money" style="display:none;"></span>
                                    </a>
                                    <a href="#" class="money"><img src="images/read/383710050x50.png">
                                        <span class="user3_money" style="display:none;"></span>
                                    </a>
                                </div>
                                <a href="#"><div class="report"><span class="glyphicon glyphicon-warning-sign"></span> 举报</div></a>
                             </div>
						</div>
					</div>
                    
                    <!-- 第三部分 上一章、下一章 开始  -->
                    <div class="row clearfix">
                        <div class="col-md-12 column content_next">
                            <div class="row clearfix">
                                {{if $readinfo->conid<=1}}
                                    <div class="col-md-4 column last">上一章</div>
                                {{else}}
                                    <a href="?{{if $smarty.get.userid}}userid={{$readinfo->userid}}&{{/if}}bookid={{$readinfo->conid-1}}"><div class="col-md-4 column next">上一章</div></a>
                                {{/if}}
                                <!--<font>|</font>-->
                                <a href="#"><div class="col-md-4 column catalog">目录</div></a>
                               <!-- <font>|</font>-->
                                <a href="?{{if $smarty.get.userid}}userid={{$readinfo->userid}}&{{/if}}bookid={{$readinfo->conid+1}}"><div class="col-md-4 column next">下一章</div></a>
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
<script src="js/jquery-1.8.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>