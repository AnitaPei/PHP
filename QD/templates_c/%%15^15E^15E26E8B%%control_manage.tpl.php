<?php /* Smarty version 2.6.26, created on 2017-02-23 17:42:48
         compiled from control_manage.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>book_manage</title>
</head>
<script src="js/jquery-3.1.1.min.js"></script>
<style>
    *{padding: 0px;margin: 0px; list-style: none;}
    a:hover{ color: #f00;}
    .CreatBook{ text-align: center; background-color: #0000CC ;color: #fff; text-decoration: none; padding: 10px; float: right; margin:5px 80px;}
    .CreatBook:hover{ background-color:#2F6FAB;}
    input{
        line-height: 30px;
    }
    span{
        background-color: #2aabd2;
        line-height: 30px;
    }
</style>
<body style=" overflow: hidden;">
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3; ">
        <i style="line-height: 50px; margin:0px 20px;">权限管理</i>
    </div>
    <div style=" overflow: hidden;">
        <center>
            <form style="text-align: left; width: 800px; margin-left: 10%" name="frm1" method="post">
                <div style="border: 1px solid #0066ff;width: 500px; margin-top: 20px; height: auto;">
                    <span style="margin-top: 20px;">请选择角色：</span><br>
                   <p style="margin-left: 80px;">
                        <input type="radio" value="1" name="role" checked>管理员
                        <input type="radio" value="2" name="role">作者
                        <input type="radio" value="3" name="role">广告商<br>
                   </p>
                    <script>
                        $(document).ready(function(){
                            $('[type="radio"]').click(function(){
                                var $userlevel=$(this).val();
                                $.ajax({ //一个Ajax过程
                                    type: "post", //以post方式与后台沟通
                                    url : "admin.php?c=backplan&m=reol", //与此php页面沟通
                                    dataType:'json',//从php返回的值以 JSON方式 解释
                                    data: 'userlevel='+$userlevel ,//发给php的数据
                                    success: function(data){
                                        $('[name="rolename[]"]').each(function(){
                                                $(this).attr("checked",false);
                                        });
                                        for(i=0;i<data.length;i++){
                                            $('[name="rolename[]"]').each(function(){
                                                 if($(this).val()==data[i]){
                                                     $(this).attr("checked","checked");
                                                 }
                                            });
                                        }
                                    }
                                });
                            });
                        });
                    </script>
                    <span>请选择权限：</span><br>
                    <p style="width: 150px;   margin-left: 150px; margin-bottom: 30px;">
                        <input type="checkbox" name="rolename[]" value="book" checked>作品管理<br>
                        <input type="checkbox" name="rolename[]" value="post" checked>公告管理<br>
                        <input type="checkbox" name="rolename[]" value="user" checked>用户管理<br>
                        <input type="checkbox" name="rolename[]" value="advt" checked>广告管理<br>
                        <input type="checkbox" name="rolename[]"  value="control" checked>权限管理<br>
                    </p>
                </div>
                <input type="submit" value="确认修改" name="entry" style="margin-left: 430px; margin-top: 10px;">
            </form>
        </center>
    </div>
</body>
</html>