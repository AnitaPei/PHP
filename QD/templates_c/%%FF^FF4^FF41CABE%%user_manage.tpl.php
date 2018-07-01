<?php /* Smarty version 2.6.26, created on 2017-02-28 10:34:15
         compiled from user_manage.tpl */ ?>
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
        <span style="margin:0px 20px 0px; font-size: 14px; line-height: 65px;  color: #888;">当前总数<?php echo $this->_tpl_vars['countManage']; ?>
条</span>
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
        <?php $_from = $this->_tpl_vars['manageResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
        <li style="border-bottom: 1px solid #ccc; overflow: hidden; height: 40px;">
            <span style="display:block;float:left;width:10%;font-size:14px;">
                <span style="line-height: 40px; margin-left: 20px;"><?php echo $this->_tpl_vars['value']->id; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                     <span style="line-height: 40px;"><?php echo $this->_tpl_vars['value']->admin_user; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                     <span style="line-height: 40px;">
                         <?php if ($this->_tpl_vars['value']->level == 1): ?>管理员<?php endif; ?>
                         <?php if ($this->_tpl_vars['value']->level == 2): ?>作者<?php endif; ?>
                         <?php if ($this->_tpl_vars['value']->level == 3): ?>广告商<?php endif; ?>
                         <?php if ($this->_tpl_vars['value']->level == 4): ?>小说编辑<?php endif; ?>
                         <?php if ($this->_tpl_vars['value']->level == 5): ?>广告编辑<?php endif; ?>
                     </span>
            </span>
             <span style=" display:block;float:left;width:30%;font-size:14px;">
                     <span style="line-height: 40px;"><?php echo $this->_tpl_vars['value']->email; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:18%;font-size:14px;">
                     <span style="line-height: 40px;"><?php echo $this->_tpl_vars['value']->last_time; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:18%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=user_content&user_Id=<?php echo $this->_tpl_vars['value']->id; ?>
" style="text-decoration: none;line-height: 40px;">修改</a>
                <a href="admin.php?c=BackplanControl&m=user_Delete&user_Id=<?php echo $this->_tpl_vars['value']->id; ?>
" style="text-decoration: none;line-height: 40px;">删除</a>
            </span>
        </li>
        <?php endforeach; endif; unset($_from); ?>
       <center style="margin-top: 20px;"> <?php echo $this->_tpl_vars['list_page']; ?>
</center>
    </ul>
</body>
</html>