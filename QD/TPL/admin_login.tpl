<!DOCTYPE >
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
 	<link type="text/css" href="js/admin_login.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<title>管理员登录_新希望商城</title>
</head>
<body>
<div id="login">
<div id="top">
	<p>起点后台管理系统</p>
</div>
	<form  method="post" name="login">
		<p> 账&nbsp;&nbsp;&nbsp;号：<input type="text" name="admin_user" style="width: 260px;height: 25px;"/></p>
		<p> 密&nbsp;&nbsp;&nbsp;码：<input type="password" name="admin_pass" style="width: 260px;height: 25px;" /></p>
		<p>验证码：<input type="text" name="code" size="5" style="width: 120px;height: 32px;"><img src="admin.php?c=backplan&m=code" style="vertical-align: middle" onclick="javascript:this.src='admin.php?c=backplan&m=code&tm='+Math.random();"></p>
		<p><input type="submit"  name="entry" value="登录" style="color: #fff;"></p>
	</form>
</div>
</body>
</html>