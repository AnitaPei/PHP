<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--在IE中运行最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--初始化移动浏览器不区分手机与pc-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>entry</title>
    <!-- 载入Bootstrap -->
    <link href="../js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../js/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://sta.book.qq.com/c/=/qd/css/cssreset.css,/qd/css/header.css,/qd/css/login.css,/qd/css/layout.css,/qd/css/sprites.css,/qd/css/ui.css,/qd/css/footer.css,/qd/css/font.css,/qd/css/reg.css,/qd/css/pact.css"/>
    <style type="text/css">
        *{
            margin: 0px;
            padding: 0px;
        }
        input{
            background-color: #DFE6E4;
            border:solid #A1A1A1 1px;
            width: 300px;
            height: 30px;
        }
        #div2{
            text-align: center;
        }

    </style>
</head>
<body>
<div class="wrap">
    <!-- start 头部 -->
    <div class="header ">
        <div class="box-center">
            <div class="logo"><a href="" target="_blank"></a></div>
        </div>
    </div>
    <!-- end 头部 -->
    <br/>
    <br/>
    <!-- start 中间部分 -->
    <div id="div2">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <form class="bs-example bs-example-form" role="form" method="post">
                        <ul class="list-unstyled">
                            <li>
                                <big><b>账号登录</b></big>
                            </li>
                            <br/>
                            <li>
                                <input type="text" name="user_name" placeholder="起点账号">
                            </li>
                            <br/>
                            <li>
                                <input type="password" name="user_password" placeholder="密码">
                            </li>
                            <br/>
                            <li>
                                <input type="submit" name="c" value="登录" style="background-color: #BF2C24;color: white">
                            </li>
                            <li>
                                <a href="admin.php?c=backplan&m=login" ><input type="button" value="注册" style="background-color: #BF2C24;color: white"></a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end 中间部分 -->
    <br/>
    <br/>
    <!-- start 页脚 -->
    <div class="footer">
        <p>Copyright (C) 2002-2016 www.qidian.com All Right Reserved版权所有 上海玄霆娱乐信息科技有限公司</p>
        <p>上海玄霆娱乐信息科技有限公司 增值电信业务经营许可证沪B2-20080046 沪网文[2012]0068-008 新出网证（沪）字010 沪ICP备08017520号-1</p>
        <p>请所有作者发布作品时务必遵守国家互联网信息管理办法规定，我们拒绝任何色情小说，一经发现，即作删除！客服电话：010-59357051</p>
        <p>本站所收录作品、社区话题、书库评论及本站所做之广告均属个人行为，与本站立场无关</p>
        <div class="safety-box">
            <div class="safety-img dib-wrap">
                <a class="site1" href="http://www.pdxa.cn/Welcome.Asp?Id=3101151112" target="_blank"></a><a class="site2" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20111011181417625" target="_blank"></a><a class="site3" href="http://www.cyberpolice.cn/wfjb" target="_blank"></a><a class="site4" href="https://ss.knet.cn/verifyseal.dll?sn=e12120411010037414000000&amp;pa=090993" target="_blank"></a><a class="site5" href="http://www.shjbzx.cn" target="_blank"></a><a class="site6" href="http://www.12377.cn/node_548446.htm" target="_blank"></a><a class="site7" href="http://www.12377.cn/" target="_blank"></a>
            </div>
            <p>起点正积极配合国家最新发布的《关于办理侵犯知识产权刑事案件适用法律若干问题的意见》，</p>
            <p>采用刑事手段进行严厉打击盗版，目前相关公安机关已经抓获犯罪嫌疑人15名！正告盗版网站立即停止侵权行为！</p>
        </div>
    </div>    <!-- end 页脚 -->
</div>
<!--登录和注册结束-->
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.8.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>