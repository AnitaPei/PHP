<?php /* Smarty version 2.6.26, created on 2017-03-02 10:39:21
         compiled from book_manage.tpl */ ?>
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
        <span style="margin:0px 20px 0px; font-size: 14px; line-height: 90px;  color: #888;">当前作品总数<?php echo $this->_tpl_vars['countBook']; ?>
本</span>
        <a href="admin.php?c=BackplanControl&m=book_creat&id=<?php echo $this->_tpl_vars['admin_id']; ?>
" class="CreatBook"> + 创建作品</a>
    </div>
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3;">
        <span style="line-height: 50px; display:block;float:left;width:7%;font-size:14px; margin-left: 40px;">封面</span>
        <span style="line-height: 50px; display:block;float:left;width:13%;font-size:14px; margin-left: 20px;">书名</span>
        <span style="line-height: 50px; display:block;float:left;width:20%;font-size:14px;">最新章节</span>
        <span style="line-height: 50px; display:block;float:left;width:15%;font-size:14px;">编辑分组</span>
        <span style="line-height: 50px; display:block;float:left;width:12%;font-size:14px;">状态</span>
        <span style="line-height: 50px; display:block;float:left;width:10%;font-size:14px;">操作</span>
    </div>
    <ul style="overflow: hidden;">
        <?php $_from = $this->_tpl_vars['bookmanage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
        <li style="border-bottom: 1px solid #ccc; overflow: hidden; height: 120px;">
            <span style="display:block;float:left;width:25%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=content_manage&id=<?php echo $this->_tpl_vars['val']->id; ?>
" style="text-decoration: none;">
                    <a href="admin.php?c=BackplanControl&m=content_manage&id=<?php echo $this->_tpl_vars['val']->id; ?>
"><img src="<?php echo $this->_tpl_vars['val']->cover; ?>
" style="margin: 0px 20px 0px; vertical-align: middle; width: 68px; height: 100px;"></a>
                    <a href="admin.php?c=BackplanControl&m=content_manage&id=<?php echo $this->_tpl_vars['val']->id; ?>
"><span style="line-height: 120px;"><?php echo $this->_tpl_vars['val']->book_name; ?>
</span></a>
                </a>
            </span>
            <span style=" display:block;float:left;width:20%;font-size:14px;">
                  <span style="line-height: 120px;">无最新章节</span>
            </span>
            <span style=" display:block;float:left;width:15%;font-size:14px;">
                <span style="line-height: 120px;">短篇编辑组</span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                    <span style="line-height: 120px;"><?php echo $this->_tpl_vars['val']->update_mode; ?>
</span>
            </span>
            <span style=" display:block;float:left;width:15%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=book_content&id=<?php echo $this->_tpl_vars['val']->id; ?>
" style="text-decoration: none;line-height: 120px;">新建章节</a>
                <a href="admin.php?c=BackplanControl&m=bookupdate&id=<?php echo $this->_tpl_vars['val']->id; ?>
" style="text-decoration: none;line-height: 120px;">修改</a>
                <a href="admin.php?c=BackplanControl&m=BookDelete&id=<?php echo $this->_tpl_vars['val']->id; ?>
" style="text-decoration: none;line-height: 120px;">删除</a>
            </span>

        </li>
        <?php endforeach; endif; unset($_from); ?>
        <center style="margin-top: 20px;"><?php echo $this->_tpl_vars['list_page']; ?>
</center>
    </ul>
</body>
</html>