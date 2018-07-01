<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{list-style: none;}
		ul{width: 300px;height:200px;border:0px solid #f00;margin:100px auto;}
	</style>
</head>
<body>

<ul>
    <form role="form" method="post">
    <big><b>会员注册</b></big><br/><br/>
    	<li>Name：<input type="text" name="user_name" placeholder="用户名"></li>
    	<br/>
    	<li>Email：<input class="mid" type="text"  id="useremail" name="email" placeholder="输入邮箱"></li>
        <br/>
        <li>password：<input type="password" name="password" placeholder="密码"></li>
        <br/>
        <li>
		<input type="submit" name="login" value="注册" style="background-color: #BF2C24;color:white;width:80px;height:30px;">
        </li>
    </form>
</ul>
</body>
</html>