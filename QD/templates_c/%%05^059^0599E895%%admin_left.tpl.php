<?php /* Smarty version 2.6.26, created on 2017-02-22 16:12:27
         compiled from admin_left.tpl */ ?>
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
            <?php $_from = $this->_tpl_vars['roleresult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['value']):
?>
            <li style="margin-top: 0px;">
                <img src="images/rear/<?php echo $this->_tpl_vars['k']; ?>
.png" style="float: left; margin-top: 9px; margin-left: 25px;">
                <a href="admin.php?c=BackplanControl&m=<?php echo $this->_tpl_vars['k']; ?>
_manage" class="text" target="right">
                    <?php echo $this->_tpl_vars['value']; ?>

                </a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
    </ul>
</body>
</html>