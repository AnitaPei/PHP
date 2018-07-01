{{include file="header.tpl"}}
<div class="container">
        <div class="col-md-12 column"><!---->
            <div class="row clearfix">
                {{foreach from=$mybook item=v}}
                <div class="col-md-4 column" style="padding-bottom: 10px;padding-top: 10px; ">
                    <div class="content-img-div">
                        <img src="{{$v->cover}}" class="content-img1" style="width: 80px; height: 130px; margin-right: 5px;">
                    </div>
                    <p class="content-h">{{$v->book_name}}</p>
                    <a href="">
                        <img src="images/user.0.1.png" class="content-img2">
                    </a>
                    <span class="content-span content-admin-a">
                        <a href="">{{$v->admin_user}}</a> |
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
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{include file="foot.tpl"}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>