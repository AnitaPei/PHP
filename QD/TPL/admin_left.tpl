<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
</head>
<style>
    *{padding: 0px;margin: 0px;}
    li{ height: 50px; display: block;}
    .text{display: block; float: left;margin: 0px 20px; line-height: 50px;}
</style>
<body style="margin-left: 25px;">
    <ul style="float: left; width: 175px;overflow: hidden;list-style: none;">
            {{foreach from=$roleresult key=k item=value}}
            <li style="margin-top: 0px;">
                <img src="images/rear/{{$k}}.png" style="float: left; margin-top: 9px; margin-left: 25px;">
                <a href="admin.php?c=BackplanControl&m={{$k}}_manage" class="text" target="right">
                    {{$value}}
                </a>
            </li>
            {{/foreach}}
    </ul>
</body>
</html>