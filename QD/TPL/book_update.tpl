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
    <h1>修改图书</h1>
    <form  name="content" style="text-align: left; width: 400px; margin-left: 10%"action="" method="post">
        <p>
            <span>图书名称：</span>
            <input type="text" value="{{$book->book_name}}" placeholder="图书名称不超过20中文字符" name="book_name">
        </p>
        <p>
            <span>图书封面：</span>
            <input type="text" name="cover" class="text" value="{{$book->cover}}" />
            <input type="button" value="上传缩略图" onclick="centerWindow('admin.php?c=BackplanControl&m=upfile','upfile','400','130')" />
            <img name="pic" src="{{$url}}"  style="width: 68px; height: auto;"/> ( * 必须是jpg,gif,png，并且200k内)( * 必须是jpg,gif,png，并且200k内)
        </p>
        <p>
        图书类型：
            <select name="book_type">
                {{foreach from=$nav item=val}}
                <option value="{{$val->id}}" >{{$val->book_nav}}</option>
               {{/foreach}}
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
                        <textarea id="TextArea1" name="book_info" class="ckeditor">{{$book->book_info}} </textarea>
                    </span>
        </p>
        <p>
           <input type="submit" value="修改" name="book_creat">
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