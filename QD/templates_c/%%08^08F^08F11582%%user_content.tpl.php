<?php /* Smarty version 2.6.26, created on 2017-02-28 10:09:45
         compiled from user_content.tpl */ ?>
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
    <?php if ($this->_tpl_vars['updateT'] == 'personal'): ?>
        <p>
            <span>笔&nbsp; &nbsp;&nbsp; &nbsp;名:</span>
            <input type="text"  name="admin_user" value="<?php echo $this->_tpl_vars['manageResult']->admin_user; ?>
" readonly="true" >
        </p>
    <?php else: ?>
        <p>
            <span>笔&nbsp; &nbsp;&nbsp; &nbsp;名:</span>
            <input type="text"  name="admin_user" value="<?php echo $this->_tpl_vars['manageResult']->admin_user; ?>
" >
        </p>
    <?php endif; ?>
        <input type="hidden" name="adminId" value="<?php echo $this->_tpl_vars['manageResult']->id; ?>
" >
    <p>
        <span>密&nbsp; &nbsp;&nbsp; &nbsp;码:</span>
        <input type="password"  name="admin_pass" value="<?php echo $this->_tpl_vars['manageResult']->admin_pass; ?>
" >
    </p>
    <p>
        <span>电子邮箱:</span>
        <input type="text"  name="email" value="<?php echo $this->_tpl_vars['manageResult']->email; ?>
" >
    </p>
    <p>

        <?php if ($this->_tpl_vars['updateT'] != 'personal'): ?>
        <span>角色选择：</span>
            <select name="role">
                <option value="1" <?php if ($this->_tpl_vars['manageResult']->level == 1): ?> selected <?php endif; ?>>管理员</option>
                <option value="2" <?php if ($this->_tpl_vars['manageResult']->level == 2): ?> selected <?php endif; ?>>作者</option>
                <option value="3" <?php if ($this->_tpl_vars['manageResult']->level == 3): ?> selected <?php endif; ?>>广告商</option>
                <option value="4" <?php if ($this->_tpl_vars['manageResult']->level == 4): ?> selected <?php endif; ?>>小说编辑</option>
                <option value="5" <?php if ($this->_tpl_vars['manageResult']->level == 5): ?> selected <?php endif; ?>>广告编辑</option>
            </select>
        <script></script>
        <?php endif; ?>
        <br>
    </p>
    <p style="margin-left: 130px;">
        <?php if ($this->_tpl_vars['updateT'] == 'personal'): ?>
             <input type="submit" name="update" value="修改">
        <?php else: ?>
            <?php if ($this->_tpl_vars['updateT1'] == 'all'): ?>
                <input type="submit" name="update" value="修改">
            <?php else: ?>
                 <input type="submit" name="insert" value="新增">
            <?php endif; ?>
        <?php endif; ?>

    <p>
</body>
</html>