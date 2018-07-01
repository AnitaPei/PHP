<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--在IE中运行最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--初始化移动浏览器不区分手机与pc-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login</title>
    <!-- 载入Bootstrap -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="js/index.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.1.1.min.js"></script>
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
        li span{
            margin-left: -27px;
        }
     </style>
</head>
<body>
<div class="wrap">
    <!-- start 头部 -->
    <div class="header reg-header">
        <div class="box-center">
            <div class="logo cf"><a href=""></a><em></em><span class="lang">用户注册</span></div>
        </div>
    </div>
    <!-- start 中间部分 -->
            <div class="row clearfix">
                <h2 class="text-center">
                <big><b>填写注册信息</b></big>
                </h2>
            </div>
            <br/>
            <div id="div2">
            <div class="reg-form-wrap1">
                <ul>
                    <form class="bs-example bs-example-form" role="form" method="post">
                    <li>
                        &nbsp; &nbsp;<span style="margin-left: 70px;">邮 箱 :</span>
                        <input class="mid" type="text"  id="useremail" name="email" placeholder="输入邮箱"  >
                        &nbsp; &nbsp; &nbsp; &nbsp; <span id="bt1">发送验证码</span>
                    </li>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<li> 密 码：<input type="password" name="password" placeholder="密码">
                    </li>
                    <br/>
                    <li>
                        <span>
                     输入验证码：<input type="text" name="zy" placeholder="验证码">
                        </span>
                    </li>
                    <br/>
                    <li>
                        <input type="submit" name="login" value="注册" style="background-color: #BF2C24;color: white">
                    </li>
                    </form>
                 </ul>
                <script>
                    $(document).ready(function(){
                        $("#bt1").click(function(){
                            var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            if (filter.test($("#useremail").val())) {
                                var $username=$("#useremail").val();
                                $.ajax({ //一个Ajax过程
                                    type: "post", //以post方式与后台沟通
                                    url : "admin.php?c=backplan&m=sendemail", //与此php页面沟通
                                    dataType:'json',//从php返回的值以 JSON方式 解释
                                    data: 'userEmail='+$username ,//发给php的数据
                                    success: function(json){
                                        $('#bt1').text("验证码已发送");
                                        $('#useremail').val($username);
                                    }
                                });
                            } else {
                                alert('您的电子邮件格式不正确,请重新输入');
                            }
                        });
                    });
                </script>
            </div> 
            </div>
            <br/>
            <br/>
     <script src="https://sta.book.qq.com/qd/js/lulu/Checkbox.js"></script>
     <script src="https://sta.book.qq.com/qd/js/lulu/Select.js"></script>
     <script src="https://sta.book.qq.com/js/jquery.cookie.js"></script>
     <script src="https://sta.book.qq.com/js/yuewenauth.js"></script>
     <script src="https://sta.book.qq.com/js/register_v1.js"></script>
    <!-- end 中间部分 -->
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
</div>    
<!-- end 页脚 -->
</div>
<script src="https://qidian.gtimg.com/lbf/2.0.0/qidian/report.js"></script>
<script src="https://sta.book.qq.com/js/stat.js"></script>
</html>
