<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{width: 300px;height:200px;border:0px solid #f00;margin:100px auto;}
	</style>
</head>
<body>
<form method="post">

	日期：<input type="date" name="date"{{if $smarty.get.id}} value="{{$eventinfo->date}}" {{/if}}><br/><br/>
	事件：<textarea cols="30" rows="5" name="text">{{if $smarty.get.id}}{{$eventinfo->text}}{{/if}}</textarea><br/><br/>
	<input type="submit" name='save' value="保存" style="background-color: #BF2C24;color: white;width: 80px;height:30px;">
    <input type="reset" value="取消" style="background-color: #BF2C24;color: white;width: 80px;height:30px;">

</form>
</body>
</html>
