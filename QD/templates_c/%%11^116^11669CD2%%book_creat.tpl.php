<?php /* Smarty version 2.6.26, created on 2017-03-01 15:11:31
         compiled from book_creat.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书创建</title>
</head>
<body>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<center>
    <h1>新建图书</h1>
    <form  name="content" style="text-align: left; width: 400px; margin-left: 10%"action="" method="post">
        <p>
            <span>图书名称：</span>
            <input type="text" value="" placeholder="图书名称不超过20中文字符" name="book_name">
        </p>
        <p>
            <span>图书封面：</span>
            <input type="text" name="cover" class="text" value="<?php echo $this->_tpl_vars['url']; ?>
" />
            <input type="button" value="上传缩略图" onclick="centerWindow('admin.php?c=BackplanControl&m=upfile','upfile','400','130')" />
            <img name="pic" src="<?php echo $this->_tpl_vars['url']; ?>
"  style="width: 68px; height: auto;"/> ( * 必须是jpg,gif,png，并且200k内)( * 必须是jpg,gif,png，并且200k内)
        </p>
        <p>
        图书类型：
            <select name="book_type">
                <?php $_from = $this->_tpl_vars['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                <option value="<?php echo $this->_tpl_vars['val']->id; ?>
" ><?php echo $this->_tpl_vars['val']->book_nav; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
            </select>
        </p>
        <span>图书状态：</span>
        <select name="update_model">
            <option>连载中</option>
            <option>完本</option>
        </select>

        <p class="ckeditor">
            图书简介：
                    <span>
                        <textarea id="TextArea1" name="book_info" class="ckeditor"> </textarea>
                    </span>
        </p>
        <p>
           <input type="submit" value="创建" name="book_creat">
        <p>
    </form>
    <script type="text/javascript">
        function centerWindow(url, name, width, height) {
            var left = (screen.width - width) / 2;
            var top = (screen.height - height) / 2 - 50;
            window.open(url, name, 'width='+width+',height='+height+',top='+top+',left='+left);
        }
    </script>
</center>
</body>
</html>