{{include file="header.tpl"}}
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="col-md-3 column">
                <ul class="list_booklist" >
                    {{foreach from=$childNavlist item=value }}
                    <li class="list_book">
                        <a href="list.php?id={{$value->id}}"><div class="test" style="{{if $value->id/2!=0}} margin-right: 40px;{{/if}}"><img src="images/index/{{$value->book_nav}}.png"/>{{$value->book_nav}}<br><span style="float: right;">1234</span></div></a>
                    </li>
                    {{/foreach}}
                </ul>
            </div>
            <div class="col-md-6 column">
                <div clss="row clearfix">
                        <style type="text/css">
                            .titile_image{ border:1px solid #ccc;width: auto; height:220px; background-image:url(images/1.jpg); margin:10px auto 50px; overflow:hidden; border-radius:20px;}
                            .titile_{ list-style:none; overflow:hidden;}
                            .titile_text{ width:20px; height:20px; margin:10px; border:1px solid #ccc; float:left; display:block; text-align:center;}
                        </style>
                        <script type="text/javascript" language="javascript">
                            var $js=1;
                            function js(){
                                $('[class="titile_image"]').css("background-image",'url(images/'+$js+'.jpg)');
                                $js++;
                                if($js==5){
                                    $js=1
                                }
                            };
                            aa=setInterval("js()",1000);//善用变量
                        </script>
                        <div class="titile_image">
                            <ul class="titile_">
                            </ul>
                        </div>
                    <div class="row clearfix">
                        {{foreach from=$advtlist2 item=value}}
                        <div class="col-md-4 column img_center">
                            <img src="{{$value->advt_img}}" />
                        </div>
                        {{/foreach}}
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                    <ul  class="book_pack">
                        {{foreach from=$postlistinfo key=key item=value}}
                            {{if $key==0}}
                            <li class="list_book">
                                <a href="list.php?id={{$value->id}}"><div class="nav1_advt">{{$value->post_title}}</div></a>
                            </li>
                            {{/if}}
                        <li class="list_book">
                            <a href="list.php?id={{$value->id}}">「{{$value->post_type}}」{{$value->post_title}}</a>
                        </li>
                        {{/foreach}}
                        {{foreach from=$postlistinfo1 item=value}}
                        <li class="list_book">
                            <span class="yeyou"> 页游 </span> <a href="#"><strong>★☆{{$value->post_title}}★☆</strong></a>
                        </li>
                        {{/foreach}}
                    </ul>
                    <div class="col-md-3 column " style="margin:53px 0px 20px 0px; vertical-align: middle;">
                        {{foreach from=$advtlist3 key=key item=values}}
                        {{if $key==0}} <img src="{{$values->advt_img}}"  alt="Cinque Terre" >{{/if}}
                        {{/foreach}}
                    </div>
            </div>
        </div>
    </div>

{{foreach from=$advtlist1 key=key item=values}}
<div class="row clearfix"><!--广告-->
    <div class="col-md-12 column column " style="margin: 0px 0px 20px;">
        {{if $key==1}} <img src="{{$values->advt_img}}"  class="img-responsive" alt="Cinque Terre" >{{/if}}
    </div>
</div>
{{/foreach}}
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-2 column">
                    <div class="row clearfix">
                        <h5>热门作品<a href="ranking.php">{{$fenpage}}</a> </h5>
                        <script type="text/javascript" src="js/imageflow.js"></script>
                    </div>
                         <link type="text/css" rel="Stylesheet" href="js/imageflow.css" />
                        <input id="S_Num" type="hidden" value="6" />
                    <a href="read.php?bookid={{$hotlistone->id}}">
                        <div id="starsIF" class="imageflow">
                            <img src="{{$hotlistone->cover}}"  class="img-responsive" />
                            <img src="{{$hotlistone->cover}}"  class="img-responsive"/>
                            <img src="{{$hotlistone->cover}}"  class="img-responsive" />
                        </div>
                    </a>
                        <a href="read.php?bookid={{$hotlistone->id}}">
                    <div class="jianjie">
                         <p class="bookname">{{$hotlistone->book_name}}</p>
                         <p class="author">{{$hotlistone->author}}·{{$hotlistone->update_mode}}</p>
                         <p><span>{{$hotlistone->favorte}}</span>人在追</p>
                         <p class="content">{{$hotlistone->book_info}}</p>
                         <a href="read.php?bookid={{$hotlistone->id}}" ><span class="book_button">书籍详情</span></a>
                    </div>
                </div>
                {{foreach from=$hotlist key=key item=value}}
                <div class="col-md-3 column">
                   {{if $value[0]->book_nav !=""}}<h5>
                        {{if $key==0}}奇幻·玄幻{{/if}}
                        {{if $key==1}}武侠·仙侠{{/if}}
                        {{if $key==2}}都市·职场{{/if}}
                        {{if $key==3}}历史·军事{{/if}}
                        {{if $key==4}}游戏·体育{{/if}}
                        {{if $key==5}}科幻·灵异{{/if}}
                    </h5>{{/if}}
                    <ul>
                        {{foreach from=$value item=value1}}
                        <li class="list_book">
                        <a href="read.php?bookid={{$value1->id}}"><span class="list_book_advt">「Hot」</span>{{$value1->book_name}}</a>
                        </li>
                        {{/foreach}}
                    </ul>
                </div>
                {{/foreach}}
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-9 column">
            <div class="row clearfix">
                <h5>本周强推<a href="ranking.php">更多</a> </h5>
                <div class="col-md-3 column">
                    <div class="jianjie">
                        <div style="overflow: hidden; align-content: center; margin-left:45px;">
                            <a href="read.php?bookid={{$favortelist->id}}"> <img src="{{$favortelist->cover}}" class="img-responsive"  style="width: 68px; height: 100px;" /></a>
                        </div>
                       <a href="read.php?bookid={{$favortelist->id}}"> <p class="bookname">{{$favortelist->book_name}}</p></a>
                        <p class="author">{{$favortelist->author}}·{{$favortelist->update_mode}}</p>
                        <p><span>{{$favortelist->favorte}}</span>人在追</p>
                        <p class="content">{{$favortelist->book_info}}</p>
                        <a href="list.php?bookid={{$favortelist->id}}" ><span class="book_button">书籍详情</span></a>
                    </div>
                </div>
                <div class="col-md-9 column">
                    <ul class="list_book2">
                        {{foreach from=$machfavorte item=vale}}
                        <li>
                            <a href="read.php?bookid={{$vale->id}}"> <img src="{{$vale->cover}}" style="float: left; width: 80px; height: auto;"></a>
                            <span class="text_title"> <a href="read.php?bookid={{$vale->id}}">{{$vale->book_name}}</a></span><br>
                            <span class="text_content">{{$vale->book_info}}</span><br>
                            <span class="text_author"><img src="images/user.0.1.png">{{$vale->author}} </span>
                            <span class="text_attr">{{$vale->update_mode}}</span> <span class="text_nav">{{$vale->attr}}</span>
                        </li>
                        {{/foreach}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 column">
            <ul>
                <h5>限时免费
                    <span style="color: #2aabd2">
                    <div class="colockbox" id="colockbox1"> <span class="day">00天</span><span class="hour">00时</span> <span class="minute">00分</span> <span class="second">00秒</span> </div>
                    </span>
                </h5>
                <li class="list_book1">
                    <div class="list_book11" >
                        <a href="read.php?bookid={{$freeone->id}}"><img src="{{$freeone->cover}}" style="float: right; width: 80px; height: auto;"></a>
                        <img src="images/1.png"><br>
                        <span> <a href="read.php?bookid={{$freeone->id}}">{{$freeone->book_name}}</a></span><br>
                        <span class="book_list1_red">{{$freeone->favorte}}月票</span><br>
                        <span>{{$freeone->author}}</span>
                    </div>
                </li>
                {{foreach from=$freelist key=key item=value}}
                    <li class="list_book1">
                        <a href="read.php?bookid={{$value->id}}"><img src="images/{{$key+2}}.png"><span class="book_name">{{$value->book_name}}</span> <span class="book_author">{{$value->author}}</span></a>
                    </li>
                {{/foreach}}
            </ul>
        </div>
    </div>
</div>
<style>
    *{ padding:0; margin:0;}
    .colockbox{ float:right;width:auto;height:30px; background-color:#fff;color:#00f;}
    .colockbox span{float:left;display:block;width:45px;height:29px;line-height:29px;font-size:18px;text-align:center;color:#00f;}
</style>
<script type="text/javascript">
    $(function(){
        countDown("2017/3/3 10:00:00","#colockbox1");
    });
    function countDown(time,id){
        var day_elem = $(id).find('.day');
        var hour_elem = $(id).find('.hour');
        var minute_elem = $(id).find('.minute');
        var second_elem = $(id).find('.second');
        var end_time = new Date(time).getTime(),//月份是实际月份-1
                sys_second = (end_time-new Date().getTime())/1000;
        var timer = setInterval(function(){
            if (sys_second > 1) {
                sys_second -= 1;
                var day = Math.floor((sys_second / 3600) / 24);
                var hour = Math.floor((sys_second / 3600) % 24);
                var minute = Math.floor((sys_second / 60) % 60);
                var second = Math.floor(sys_second % 60);
                day_elem &&$(day_elem).text(day+"天");//计算天
                $(hour_elem).text(hour+"时"<10?"0"+hour:hour+"时");//计算小时
                $(minute_elem).text(minute+"分"<10?"0"+minute:minute+"分");//计算分钟
                $(second_elem).text(second+"秒"<10?"0"+second:second+"秒");//计算秒杀
            } else {
                clearInterval(timer);
            }
        }, 1000);
    }
</script>
</head>
<body>
{{include file="foot.tpl"}}
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>