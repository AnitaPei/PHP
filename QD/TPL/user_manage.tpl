<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>post_manage</title>
</head>
<style>
    *{padding: 0px;margin: 0px; list-style: none;}
    a:hover{ color: #f00;}
    .CreatBook{ text-align: center; background-color: #0000CC ;color: #fff; text-decoration: none; padding: 10px; float: right; margin: 15px 50px;}
    .CreatBook:hover{ background-color:#2F6FAB;}
    center a{ margin-left:5px; margin-top:20px;}

</style>
<body style=" overflow: hidden;">
    <div style=" height: 65px; overflow: hidden;">
        <span style="margin:0px 20px 0px; font-size: 14px; line-height: 65px;  color: #888;">当前总数{{$countManage}}条</span>
        <a href="admin.php?c=BackplanControl&m=user_content" class="CreatBook">+ 新增</a>
    </div>
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3;">
        <span style="line-height: 50px; display:block;float:left;width:10%;font-size:14px; margin-left: 20px;">编号</span>
        <span style="line-height: 50px; display:block;float:left;width:10%;font-size:14px;">姓名</span>
        <span style="line-height: 50px; display:block;float:left;width:10%;font-size:14px;">所属</span>
        <span style="line-height: 50px; display:block;float:left;width:30%;font-size:14px;">邮箱</span>
        <span style="line-height: 50px; display:block;float:left;width:18%;font-size:14px;">最后登录时间</span>
        <span style="line-height: 50px; display:block;float:left;width:18%;font-size:14px;">操作</span>

    </div>
    <ul style="overflow: hidden;">
        {{foreach from=$manageResult item=value }}
        <li style="border-bottom: 1px solid #ccc; overflow: hidden; height: 40px;">
            <span style="display:block;float:left;width:10%;font-size:14px;">
                <span style="line-height: 40px; margin-left: 20px;">{{$value->id}}</span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                     <span style="line-height: 40px;">{{$value->admin_user}}</span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                     <span style="line-height: 40px;">
                         {{if $value->level==1}}管理员{{/if}}
                         {{if $value->level==2}}作者{{/if}}
                         {{if $value->level==3}}广告商{{/if}}
                         {{if $value->level==4}}小说编辑{{/if}}
                         {{if $value->level==5}}广告编辑{{/if}}
                     </span>
            </span>
             <span style=" display:block;float:left;width:30%;font-size:14px;">
                     <span style="line-height: 40px;">{{$value->email}}</span>
            </span>
            <span style=" display:block;float:left;width:18%;font-size:14px;">
                     <span style="line-height: 40px;">{{$value->last_time}}</span>
            </span>
            <span style=" display:block;float:left;width:18%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=user_content&user_Id={{$value->id}}" style="text-decoration: none;line-height: 40px;">修改</a>
                <a href="admin.php?c=BackplanControl&m=user_Delete&user_Id={{$value->id}}" style="text-decoration: none;line-height: 40px;">删除</a>
            </span>
        </li>
        {{/foreach}}
       <center style="margin-top: 20px;"> {{$list_page}}</center>
    </ul>
</body>
</html>