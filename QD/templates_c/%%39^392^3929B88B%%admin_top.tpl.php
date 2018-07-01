<?php /* Smarty version 2.6.26, created on 2017-03-01 14:46:07
         compiled from admin_top.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
</head>
<style>
    *{ padding: 0px;  margin: 0px;  }
    .user{text-decoration: none;display: block;  margin-left:6px;float: right; line-height: 40px;}
    .user:hover{color: #f00;}
    .infrom{text-decoration: none;display: block; float: left; margin-left:6px;margin-right: 25px; line-height: 40px;}
    .infrom:hover{color: #f00;}
</style>
<body>
    <div style="border-top:3px solid #0000ff; overflow: hidden">
        <img src="images/rear/logo.png" style="margin: 20px 0px 20px 100px;">
        <span style="margin: 20px 100px 20px 0px; float: right;">
            <span style="overflow: hidden">
             <img src="images/rear/infrom.png" style="width: 40px; height: auto; float: left;">
            <a href="admin.php?c=BackplanControl&m=admin_login" class="infrom" target="_blank">退出</a>
                <span style="float: left; line-height: 40px; display: block;">|</span>
            </span>
                <img src="images/rear/photo_default.png" style="width: 40px; height: auto; margin-left: 25px;">
            <a href="admin.php?c=backplan&m=user_content&adminId=<?php echo $this->_tpl_vars['admin_id']; ?>
" class="user" target="right"><?php echo $this->_tpl_vars['username']; ?>
</a>
        </span>
    </div>
</body>
</html>