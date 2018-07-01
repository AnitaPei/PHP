<?php /* Smarty version 2.6.26, created on 2017-02-22 11:42:38
         compiled from post_content.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>post_Content</title>
</head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<style>
    *{padding: 0px;margin: 0px; list-style: none;}
    a:hover{ color: #f00;}
    .CreatBook{ text-align: center; background-color: #0000CC ;color: #fff; text-decoration: none; padding: 10px; float: right; margin:5px 80px;}
    .CreatBook:hover{ background-color:#2F6FAB;}
</style>
<body style=" overflow: hidden;">
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3; ">
        <span style="line-height: 50px; margin:0px 20px;">公告修改</span>
        <span style="line-height: 50px; margin:0px 20px;">公告增加</span>
    </div>
    <div style=" overflow: hidden;">
        <center>
            <form style="text-align: left;width: 800px;margin-top: 4%;margin-left: 5%" method="post">
                <p>
                    <span>公告标题：</span>
                    <input type="text" <?php if ($_GET['id']): ?> value="<?php echo $this->_tpl_vars['checkpost']->post_title; ?>
" <?php endif; ?> placeholder="图书名称不超过20中文字符" name="book_name">
                </p>
                <p class="ckeditor">
                    <span>
                        <span>公告内容：</span>
                        <textarea id="TextArea1" name="content" class="ckeditor">
                            <?php if ($_GET['id']): ?>
                                <?php echo $this->_tpl_vars['checkpost']->post_content; ?>

                            <?php endif; ?>
                        </textarea>
                    </span>
                </p>
                <div style=" height: 50px;">
                    <p>
                        公告类型：
                        <select name="book_type">
                            <option value="公告" <?php if ($_GET['id'] && "公告" == $this->_tpl_vars['checkpost']->post_type): ?> selected <?php endif; ?> >公告</option>
                            <option value="游戏" <?php if ($_GET['id'] && "游戏" == $this->_tpl_vars['checkpost']->post_type): ?> selected <?php endif; ?> >游戏</option>
                            <option value="资讯" <?php if ($_GET['id'] && "资讯" == $this->_tpl_vars['checkpost']->post_type): ?> selected <?php endif; ?> >资讯</option>
                            <option value="活动" <?php if ($_GET['id'] && "活动" == $this->_tpl_vars['checkpost']->post_type): ?> selected <?php endif; ?> >活动</option>
                        </select>
                    <p>
                    <input type="submit" class="Creatpost" value="+ 发布公告">
                </div>
            </form>
        </center>
    </div>
</body>
</html>