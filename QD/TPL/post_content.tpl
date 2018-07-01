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
                    <input type="text" {{if $smarty.get.id}} value="{{$checkpost->post_title}}" {{/if}} placeholder="图书名称不超过20中文字符" name="book_name">
                </p>
                <p class="ckeditor">
                    <span>
                        <span>公告内容：</span>
                        <textarea id="TextArea1" name="content" class="ckeditor">
                            {{if $smarty.get.id}}
                                {{$checkpost->post_content}}
                            {{/if}}
                        </textarea>
                    </span>
                </p>
                <div style=" height: 50px;">
                    <p>
                        公告类型：
                        <select name="book_type">
                            <option value="公告" {{ if $smarty.get.id && "公告"==$checkpost->post_type }} selected {{/if}} >公告</option>
                            <option value="游戏" {{ if $smarty.get.id && "游戏"==$checkpost->post_type }} selected {{/if}} >游戏</option>
                            <option value="资讯" {{ if $smarty.get.id && "资讯"==$checkpost->post_type }} selected {{/if}} >资讯</option>
                            <option value="活动" {{ if $smarty.get.id && "活动"==$checkpost->post_type }} selected {{/if}} >活动</option>
                        </select>
                    <p>
                    <input type="submit" class="Creatpost" value="+ 发布公告">
                </div>
            </form>
        </center>
    </div>
</body>
</html>