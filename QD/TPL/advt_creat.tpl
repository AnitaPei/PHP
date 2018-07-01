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
    {{if $smarty.get.id}}
    <h1>修改广告</h1>
    {{else}}
    <h1>发布广告</h1>
    {{/if}}
    <form  name="content" style="text-align: left; width: 400px; margin-left: 10%" action="admin.php?c=BackplanControl&m=advt_creat" method="post">
        <p>
            <span>广告名称：</span>
            <input type="text" value="{{$advtinfo->advt_name}}" placeholder="广告名称不超过20中文字符" name="advt_name">
        </p>
        <p>
            广告图片：<input type="text" name="cover" class="text" value="{{$advtinfo->advt_img}}" />
            <input type="button" value="上传缩略图" onclick="centerWindow('admin.php?c=BackplanControl&m=upfile','upfile','400','130')" />
            <img name="pic" src="{{$url}}"  style="width: 68px; height: auto;"/> ( * 必须是jpg,gif,png，并且200k内)
        </p>
        <input type="hidden" value="{{$advtinfo->id}}" name="advtid">
        <p>
            选择广告位：
            <select name="book_type">
                <option value="1">顶部</option>
                <option value="2">中间轮播</option>
                <option value="3">轮播下面</option>
                <option value="4">公告下面</option>
            </select>
        <p>
        {{if $update!="update"}}
        <p>
            <input type="submit" value="发布" name="creat_advt">
        <p>
        {{else}}
        <p>
            <input type="submit" value="修改" name="update_advt">
        <p>
        {{/if}}
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