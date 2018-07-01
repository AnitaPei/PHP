<?php /* Smarty version 2.6.26, created on 2017-03-02 10:16:58
         compiled from book_content.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>book_manage</title>
</head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<style>
    *{padding: 0px;margin: 0px; list-style: none;}
    a:hover{ color: #f00;}
    .CreatBook{ text-align: center; background-color: #0000CC ;color: #fff; text-decoration: none; padding: 10px; float: right; margin:5px 80px;}
    .CreatBook:hover{ background-color:#2F6FAB;}
</style>
<body style=" overflow: hidden;">
    <div style=" overflow: hidden; margin: 20px auto;">
        <center>
            <form style="text-align: left; width: 800px; margin-left: 10%" name="frm1" method="post">

                <p style="margin-top: 10px">
                    章节名称：
                    <input type="text" value="<?php if ($this->_tpl_vars['type'] == 'update'): ?><?php echo $this->_tpl_vars['one']->chapter; ?>
<?php endif; ?>" placeholder="章节名称不大于20个中文字符" name="chapter">
                </p>
                <p class="ckeditor">
                    <span>
                        <textarea id="TextArea1" name="content" class="ckeditor"><?php if ($this->_tpl_vars['type'] == 'update'): ?><?php echo $this->_tpl_vars['one']->content; ?>
<?php endif; ?></textarea>
                    </span>
                </p>
                <div style=" height: 50px;">
                    <input type="submit" class="CreatBook"  name="aa" value="<?php if ($this->_tpl_vars['type'] == 'update'): ?>+修改章节<?php else: ?>+发布章节<?php endif; ?>">
                </div>
            </form>
        </center>
    </div>
</body>
</html>