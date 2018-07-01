<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息管理</title>
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
<style>
    p{margin-left:30px }
</style>
<div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3; ">
    <span style="line-height: 50px; margin:0px 20px;">个人资料</span>
</div>
<form style="text-align: left; width: 400px; margin-left: 10%" method="post"">
    {{if $updateT =="personal"}}
        <p>
            <span>笔&nbsp; &nbsp;&nbsp; &nbsp;名:</span>
            <input type="text"  name="admin_user" value="{{$manageResult->admin_user}}" readonly="true" >
        </p>
    {{else}}
        <p>
            <span>笔&nbsp; &nbsp;&nbsp; &nbsp;名:</span>
            <input type="text"  name="admin_user" value="{{$manageResult->admin_user}}" >
        </p>
    {{/if}}
        <input type="hidden" name="adminId" value="{{$manageResult->id}}" >
    <p>
        <span>密&nbsp; &nbsp;&nbsp; &nbsp;码:</span>
        <input type="password"  name="admin_pass" value="{{$manageResult->admin_pass}}" >
    </p>
    <p>
        <span>电子邮箱:</span>
        <input type="text"  name="email" value="{{$manageResult->email}}" >
    </p>
    <p>

        {{if $updateT !="personal"}}
        <span>角色选择：</span>
            <select name="role">
                <option value="1" {{if $manageResult->level==1}} selected {{/if}}>管理员</option>
                <option value="2" {{if $manageResult->level==2}} selected {{/if}}>作者</option>
                <option value="3" {{if $manageResult->level==3}} selected {{/if}}>广告商</option>
                <option value="4" {{if $manageResult->level==4}} selected {{/if}}>小说编辑</option>
                <option value="5" {{if $manageResult->level==5}} selected {{/if}}>广告编辑</option>
            </select>
        <script></script>
        {{/if}}
        <br>
    </p>
    <p style="margin-left: 130px;">
        {{if $updateT =="personal"}}
             <input type="submit" name="update" value="修改">
        {{else}}
            {{if $updateT1=="all"}}
                <input type="submit" name="update" value="修改">
            {{else}}
                 <input type="submit" name="insert" value="新增">
            {{/if}}
        {{/if}}

    <p>
</body>
</html>