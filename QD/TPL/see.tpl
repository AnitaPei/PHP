<?php
$date=$_GET['date'];
$event=$_GET['text'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{width: 300px;height:200px;border:0px solid #f00;margin:100px auto;}
	</style>
</head>
<body>
<table border="1">
	<tr>
		<td>日期</td>
		<td>事件</td>
		<td>操作</td>
	</tr>
	{{foreach from=$eventinfo item=value}}
	<tr>
		<td>{{$value->date|date_format:"%Y-%m-%d"}}</td>
		<td>{{$value->text}}</td>
		<td>
			<a href="admin.php?c=BackplanControl&m=create&id={{$value->id}}" style="text-decoration: none;line-height: 50px;">修改</a>
            <a href="admin.php?c=BackplanControl&m=eventDelete&id={{$value->id}}" style="text-decoration: none;line-height: 50px;" onclick="return confirm('你真的要删除吗？') ? true : false">删除</a>
        </td>
	</tr>
	{{/foreach}}
</table>
</body>
</html>