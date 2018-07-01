
<html>
<head>
    <title>jQuery Ajax 实例演示</title>
</head>
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){//这个就是jQueryready ，它就像C语言的main 所有操作包含在它里面
        $("#button_login").mousedown(function(){
            login(); //点击ID为"button_login"的按钮后触发函数 login();
        });

        function login(){ //函数 login();
            var username = $("#username").val();//取框中的用户名
            var password = $("#password").val();//取框中的密码
            $.ajax({ //一个Ajax过程
                type: "post", //以post方式与后台沟通
                url : "login.php", //与此php页面沟通
                dataType:'json',//从php返回的值以 JSON方式 解释
                data: 'username='+username+'&password='+password, //发给php的数据有两项，分别是上面传来的u和p
                success: function(json){//如果调用php成功
                    //alert(json.username+'\n'+json.password); //把php中的返回值（json.username）给 alert出来
                    $('#result').html("姓名:" + json.username + "<br/>密码:" + json.password); //把php中的返回值显示在预定义的result定位符位置
                }
            });
        }
        //$.post()方式：
        $('#test_post').mousedown(function (){
            $.post(
                'login.php',
                {
                    username:$('#username').val(),
                    password:$('#password').val()
                },
                function (data) //回传函数
                {
                    var myjson='';
                    eval_r('myjson=' + data + ';');
                    $('#result').html("姓名1:" + myjson.username + "<br/>密码1:" + myjson.password);
                }
            );
        });
        //$.get()方式：
        $('#test_get').mousedown(function (){
            $.get(
                'login.php',
                {
                    username:$('#username').val(),
                    password:$('#password').val()
                },
                function(data) //回传函数
                {
                    var myjson='';
                    eval_r("myjson=" + data + ";");
                    $('#result').html("姓名2:" + myjson.username + "<br/>密码2:" + myjson.password);
                }
            );
        });
    });
</script>
<body>
<div id="result" style="background:orange;border:1px solid red;width:300px;height:200px;"></div>
<form id="formtest" action="" method="post">
    <p><span>输入姓名:</span><input type="text" name="username" id="username" /></p>
    <p><span>输入密码:</span><input type="text" name="password" id="password" /></p>
</form>
<button id="button_login">ajax提交</button>
<button id="test_post">post提交</button>
<button id="test_get">get提交</button>
</body>
</html>
<?php
echo json_encode(array ('username'=>$_REQUEST['username'],'password'=>$_REQUEST['password']));
?>
