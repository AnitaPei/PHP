<?php /* Smarty version 2.6.26, created on 2017-02-28 16:55:39
         compiled from advt_creat.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>广告管理</title>
</head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<body>
<center>
    <?php if ($_GET['id']): ?>
    <h1>修改广告</h1>
    <?php else: ?>
    <h1>发布广告</h1>
    <?php endif; ?>
    <form  name="content" style="text-align: left; width: 400px; margin-left: 10%" action="admin.php?c=BackplanControl&m=advt_creat" method="post">
        <p>
            <span>广告名称：</span>
            <input type="text" value="<?php echo $this->_tpl_vars['advtinfo']->advt_name; ?>
" placeholder="广告名称不超过20中文字符" name="advt_name">
        </p>
        <p>
            广告图片：<input type="text" name="cover" class="text" value="<?php echo $this->_tpl_vars['advtinfo']->advt_img; ?>
" />
            <input type="button" value="上传缩略图" onclick="centerWindow('admin.php?c=BackplanControl&m=upfile','upfile','400','130')" />
            <img name="pic" src="<?php echo $this->_tpl_vars['url']; ?>
"  style="width: 68px; height: auto;"/> ( * 必须是jpg,gif,png，并且200k内)
        </p>
        <input type="hidden" value="<?php echo $this->_tpl_vars['advtinfo']->id; ?>
" name="advtid">
        <p>
            选择广告位：
            <select name="book_type">
                <option value="顶部">顶部</option>
                <option value="中间轮播">中间轮播</option>
                <option value="轮播下面">轮播下面</option>
                <option value="公告下面">公告下面</option>
            </select>
        <p>
        <?php if ($this->_tpl_vars['update'] != 'update'): ?>
        <p>
            <input type="submit" value="发布" name="creat_advt">
        <p>
        <?php else: ?>
        <p>
            <input type="submit" value="修改" name="update_advt">
        <p>
        <?php endif; ?>
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