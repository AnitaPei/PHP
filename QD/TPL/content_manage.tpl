<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>book_manage</title>
</head>
<style>
    *{padding: 0px;margin: 0px; list-style: none;}
    a:hover{ color: #f00;}
    .CreatBook{ text-align: center; background-color: #0000CC ;color: #fff; text-decoration: none; padding: 10px; float: right; margin: 15px 50px;}
    .CreatBook:hover{ background-color:#2F6FAB;}

</style>
<body style=" overflow: hidden;">
    <div style=" height: 65px; overflow: hidden;">
        <span style="margin:0px 20px 0px; font-size: 14px; line-height: 90px;  color: #888;">当前作品总数{{$countManage}}章节数</span>
        <a href="admin.php?c=BackplanControl&m=book_creat&id={{$admin_id}}" class="CreatBook"> + 创建作品</a>
    </div>
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3;">
        <span style="line-height: 50px; display:block;float:left;width:7%;font-size:14px; margin-left: 40px;">id</span>
        <span style="line-height: 50px; display:block;float:left;width:20%;font-size:14px; margin-left: 20px;">章节名</span>
        <span style="line-height: 50px; display:block;float:left;width:13%;font-size:14px;">字数</span>
        <span style="line-height: 50px; display:block;float:left;width:15%;font-size:14px;">更新时间</span>
        <span style="line-height: 50px; display:block;float:left;width:10%;font-size:14px;">操作</span>
    </div>
    <ul style="overflow: hidden;">
        {{foreach from=$contentResult item=val}}
        <li style="border-bottom: 1px solid #ccc; overflow: hidden; height: 60px;">
            <span style="display:block;float:left;width:7%;font-size:14px;margin-left: 40px;">
                    <span style="line-height: 60px;"> {{$val->id}}</span>
            </span>
             <span style=" display:block;float:left;width:20%;font-size:14px;">
                    <span style="line-height: 60px;">{{$val->chapter}}</span>
            </span>
            <span style=" display:block;float:left;width:13%;font-size:14px;">
                  <span style="line-height: 60px;">{{$val->size}}</span>
            </span>
            <span style=" display:block;float:left;width:15%;font-size:14px;">
                <span style="line-height: 60px;">{{$val->chapter_date}}</span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=book_content&Cid={{$val->id}}" style="text-decoration: none;line-height: 60px;">修改</a>
                <a href="admin.php?c=BackplanControl&m=BookDelete&Cid={{$val->id}}" style="text-decoration: none;line-height: 60px;">删除</a>
            </span>

        </li>
        {{/foreach}}
        <center style="margin-top: 20px;">{{$list_page}}</center>
    </ul>
</body>
</html>