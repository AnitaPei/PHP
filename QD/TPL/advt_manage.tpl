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
<body style=" overflow: hidden; ">
    <div style=" height: 65px; overflow: hidden;">
        <span style="margin:0px 20px 0px; font-size: 14px; line-height: 65px;  color: #888;">当前广告总数{{$count}}</span>
        <a href="admin.php?c=BackplanControl&m=advt_creat" class="CreatBook" > + 发布广告</a>
    </div>
    <div style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; height: 50px; overflow: hidden; background-color:#F3F3F3;">
        <span style="line-height: 50px; display:block;float:left;width:15%;font-size:14px;margin-left: 20px;">广告名</span>
        <span style="line-height: 50px; display:block;float:left;width:50%;font-size:14px;">广告图片</span>
        <span style="line-height: 50px; display:block;float:left;width:15%;font-size:14px;">广告位</span>
        <span style="line-height: 50px; display:block;float:left;width:10%;font-size:14px;">操作</span>
    </div>
    <ul style="overflow: hidden;">
        {{foreach from=$alladvt item=v}}
        <li style="border-bottom: 1px solid #ccc; overflow: hidden; height: 100px;">
            <span style="display:block;float:left;width:15%;font-size:14px;margin-left: 20px;">
                    <span style="line-height: 70px;">{{$v->advt_name}}</span>
            </span>
            <span style=" display:block;float:left;width:50%;font-size:14px;">
                  <img src="{{$v->advt_img}}" style="width:500px;height:100px;margin:auto;">
            </span>
            <span style=" display:block;float:left;width:15%;font-size:14px;">
                     <span style="line-height: 70px;">
                     {{ if $v->advt_space==1}}顶部{{/if}}
                     {{ if $v->advt_space==2}}中间轮播{{/if}}
                     {{ if $v->advt_space==3}}轮播下面{{/if}}
                     {{ if $v->advt_space==4}}公告下面{{/if}}
                     </span>
            </span>
            <span style=" display:block;float:left;width:10%;font-size:14px;">
                <a href="admin.php?c=BackplanControl&m=advt_creat&id={{$v->id}}" style="text-decoration: none;line-height: 70px;">修改</a>
                <a href="admin.php?c=BackplanControl&m=deladvt&id={{$v->id}}" onclick="return confirm('确定删除吗?')?true:false" style="text-decoration: none;line-height: 70px;">删除</a>
            </span>
        </li>
        {{/foreach}}
       <center style="margin-top: 20px;">{{$fpage}}</center>
    </ul>
</body>
</html>