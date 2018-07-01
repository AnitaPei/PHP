<?php /* Smarty version 2.6.26, created on 2017-02-28 10:30:20
         compiled from post_manage.tpl */ ?>
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

</style>
<body style=" overflow: hidden;">
    <div style=" height: 65px; overflow: hidden;">
        <span style="margin:0px 20px 0px; font-size: 14px; line-height: 65px;  color: #888;">当前公告总数<?php echo $this->_tpl_vars['sum']->total; ?>
条</span>
        <a href="admin.php?c=BackplanControl&m=post_content&userid=1" class="CreatBook"> + 创建公告</a>
    </div>
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3;">
        <span style="line-height: 50px; display:block;float:left;width:25%;font-size:14px; margin-left: 20px;">公告标题</span>
        <span style="line-height: 50px; display:block;float:left;width:25%;font-size:14px;">编辑分组</span>
        <span style="line-height: 50px; display:block;float:left;width:25%;font-size:14px;">时间</span>
        <span style="line-height: 50px; display:block;float:left;width:20%;font-size:14px;">操作</span>
    </div>
    <ul style="overflow: hidden;">
        <?php $_from = $this->_tpl_vars['postinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
        <li style="border-bottom: 1px solid #ccc; overflow: hidden; height:50px;">
            <span style="display:block;float:left;width:28%;font-size:14px;">
                <span style="line-height: 50px; margin-left: 20px;"><?php echo $this->_tpl_vars['value']->post_title; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:22%;font-size:14px;">
                     <span style="line-height: 50px;"><?php echo $this->_tpl_vars['value']->post_type; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:25%;font-size:14px;">
                     <span style="line-height: 50px;"><?php echo $this->_tpl_vars['value']->post_date; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:20%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=post_content&id=<?php echo $this->_tpl_vars['value']->id; ?>
" style="text-decoration: none;line-height: 50px;">修改</a>
                <a href="admin.php?c=BackplanControl&m=postDelete&id=<?php echo $this->_tpl_vars['value']->id; ?>
" style="text-decoration: none;line-height: 50px;" onclick="return confirm('你真的要删除这个管理员吗？') ? true : false">删除</a>
            </span>

        </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
    <center style="margin-top: 20px;"><?php echo $this->_tpl_vars['page_html']; ?>
<center>
</body>
</html>