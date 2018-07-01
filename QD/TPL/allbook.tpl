{{include file="header.tpl"}}
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-3 column"><!--左-->
                    <div class="listbook">
                        <div class="listbook-div">
                            <p class="listbook-p">分类</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php">全部</a></li>
                                {{foreach from=$leftnav item=v}}
                                <li class="listbook-li"><a onclick='esc1("navid","{{$v->id}}")'>{{$v->book_nav}}</a></li>
                                {{/foreach}}
                                <div style="clear: both"></div>
                            </ul>
                            <script type="text/javascript">
                                function esc1(name,chares){
                                  window.location.href="allbook.php?"+name+"="+escape(chares);
                                }
                                $(function(){
                                    $('[class="listbook-li"]').click()
                                    {
                                        $(this).css("background-color", "red");
                                    }
                                });
                            </script>
                        </div>
                        <div class="listbook-div">
                            <p class="listbook-p">属性</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php">全部</a></li>
                                <li class="listbook-li"><a onclick='esc1("free","now()")'>免费</a></li>
                                <li class="listbook-li"><a href="allbook.php">vip</a></li>
                            </ul>
                            <script>
                            </script>
                            <div style="clear: both"></div>
                        </div>
                        <div class="listbook-div">
                            <p class="listbook-p">字数</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php">全部</a></li>
                                <li class="listbook-li"><a href="allbook.php?sizemin=300000">30万字以下</a></li>
                                <li class="listbook-li"><a href="allbook.php?size=500000">30-50万字</a></li>
                                <li class="listbook-li"><a href="allbook.php?sizemax=2000000">200万字以上</a></li>
                            </ul>
                            <div style="clear: both"></div>
                        </div>
                        <div class="listbook-div">
                            <p class="listbook-p">更新时间</p>
                            <ul class="listbook-ul">
                                <li class="listbook-li"><a href="allbook.php?mm=3">三个月前</a></li>
                                <li class="listbook-li"><a href="allbook.php?mm=3">一个月前</a></li>
                                <li class="listbook-li"><a href="allbook.php?day=15">半个月前</a></li>
                                <li class="listbook-li"><a href="allbook.php?day=7">七日内</a></li>
                            </ul>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 column"><!--右-->
                    <div class="row clearfix">
                        {{foreach from=$allbook item=v}}
                        <div class="col-md-6 column" style="padding-bottom: 10px;padding-top: 10px; border-bottom: 1px solid #ccc;">
                            <div class="content-img-div">
                               <a href="read.php?bookid={{$v->id}}"> <img src="{{$v->cover}}" class="content-img1" style="width: 80px; height: 130px; margin-right: 5px;"></a>
                            </div>
                            <p class="content-h"> <a href="read.php?bookid={{$v->id}}">{{$v->book_name}}</a></p>
                            <a href="">
                                <img src="images/user.0.1.png" class="content-img2">
                            </a>
                            <span class="content-span content-admin-a">
                                <a href="">{{$v->author}}</a> |
                            </span>
                            <span  class="content-span content-nav-a"><a href="#">{{$v->book_nav}}</a> | </span>  <span  class="content-span">{{$v->update_mode}}</span>
                            <p class="content-info">{{$v->book_info|truncate:20}}</p>
                            <p class="content-size">{{$v->size}}字</p>
                        </div>
                        {{/foreach}}
                    </div>
                    <center style="font-size: 20px; margin-top: 20px;">{{$fenpage}}</center>
                </div>
            </div>
        </div>
    </div>
</div>
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{include file="foot.tpl"}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>