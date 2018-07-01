<?php /* Smarty version 2.6.26, created on 2017-03-02 10:44:45
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="col-md-3 column">
                <ul class="list_booklist" >
                    <?php $_from = $this->_tpl_vars['childNavlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                    <li class="list_book">
                        <a href="list.php?id=<?php echo $this->_tpl_vars['value']->id; ?>
"><div class="test" style="<?php if ($this->_tpl_vars['value']->id/2 != 0): ?> margin-right: 40px;<?php endif; ?>"><img src="images/index/<?php echo $this->_tpl_vars['value']->book_nav; ?>
.png"/><?php echo $this->_tpl_vars['value']->book_nav; ?>
<br><span style="float: right;">1234</span></div></a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
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
                        <?php $_from = $this->_tpl_vars['advtlist2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                        <div class="col-md-4 column img_center">
                            <img src="<?php echo $this->_tpl_vars['value']->advt_img; ?>
" />
                        </div>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 column">
                    <ul  class="book_pack">
                        <?php $_from = $this->_tpl_vars['postlistinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                            <?php if ($this->_tpl_vars['key'] == 0): ?>
                            <li class="list_book">
                                <a href="list.php?id=<?php echo $this->_tpl_vars['value']->id; ?>
"><div class="nav1_advt"><?php echo $this->_tpl_vars['value']->post_title; ?>
</div></a>
                            </li>
                            <?php endif; ?>
                        <li class="list_book">
                            <a href="list.php?id=<?php echo $this->_tpl_vars['value']->id; ?>
">「<?php echo $this->_tpl_vars['value']->post_type; ?>
」<?php echo $this->_tpl_vars['value']->post_title; ?>
</a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php $_from = $this->_tpl_vars['postlistinfo1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                        <li class="list_book">
                            <span class="yeyou"> 页游 </span> <a href="#"><strong>★☆<?php echo $this->_tpl_vars['value']->post_title; ?>
★☆</strong></a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                    <div class="col-md-3 column " style="margin:53px 0px 20px 0px; vertical-align: middle;">
                        <?php $_from = $this->_tpl_vars['advtlist3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['values']):
?>
                        <?php if ($this->_tpl_vars['key'] == 0): ?> <img src="<?php echo $this->_tpl_vars['values']->advt_img; ?>
"  alt="Cinque Terre" ><?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
            </div>
        </div>
    </div>

<?php $_from = $this->_tpl_vars['advtlist1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['values']):
?>
<div class="row clearfix"><!--广告-->
    <div class="col-md-12 column column " style="margin: 0px 0px 20px;">
        <?php if ($this->_tpl_vars['key'] == 1): ?> <img src="<?php echo $this->_tpl_vars['values']->advt_img; ?>
"  class="img-responsive" alt="Cinque Terre" ><?php endif; ?>
    </div>
</div>
<?php endforeach; endif; unset($_from); ?>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-2 column">
                    <div class="row clearfix">
                        <h5>热门作品<a href="ranking.php"><?php echo $this->_tpl_vars['fenpage']; ?>
</a> </h5>
                        <script type="text/javascript" src="js/imageflow.js"></script>
                    </div>
                         <link type="text/css" rel="Stylesheet" href="js/imageflow.css" />
                        <input id="S_Num" type="hidden" value="6" />
                    <a href="read.php?bookid=<?php echo $this->_tpl_vars['hotlistone']->id; ?>
">
                        <div id="starsIF" class="imageflow">
                            <img src="<?php echo $this->_tpl_vars['hotlistone']->cover; ?>
"  class="img-responsive" />
                            <img src="<?php echo $this->_tpl_vars['hotlistone']->cover; ?>
"  class="img-responsive"/>
                            <img src="<?php echo $this->_tpl_vars['hotlistone']->cover; ?>
"  class="img-responsive" />
                        </div>
                    </a>
                        <a href="read.php?bookid=<?php echo $this->_tpl_vars['hotlistone']->id; ?>
">
                    <div class="jianjie">
                         <p class="bookname"><?php echo $this->_tpl_vars['hotlistone']->book_name; ?>
</p>
                         <p class="author"><?php echo $this->_tpl_vars['hotlistone']->author; ?>
·<?php echo $this->_tpl_vars['hotlistone']->update_mode; ?>
</p>
                         <p><span><?php echo $this->_tpl_vars['hotlistone']->favorte; ?>
</span>人在追</p>
                         <p class="content"><?php echo $this->_tpl_vars['hotlistone']->book_info; ?>
</p>
                         <a href="read.php?bookid=<?php echo $this->_tpl_vars['hotlistone']->id; ?>
" ><span class="book_button">书籍详情</span></a>
                    </div>
                </div>
                <?php $_from = $this->_tpl_vars['hotlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                <div class="col-md-3 column">
                   <?php if ($this->_tpl_vars['value'][0]->book_nav != ""): ?><h5>
                        <?php if ($this->_tpl_vars['key'] == 0): ?>奇幻·玄幻<?php endif; ?>
                        <?php if ($this->_tpl_vars['key'] == 1): ?>武侠·仙侠<?php endif; ?>
                        <?php if ($this->_tpl_vars['key'] == 2): ?>都市·职场<?php endif; ?>
                        <?php if ($this->_tpl_vars['key'] == 3): ?>历史·军事<?php endif; ?>
                        <?php if ($this->_tpl_vars['key'] == 4): ?>游戏·体育<?php endif; ?>
                        <?php if ($this->_tpl_vars['key'] == 5): ?>科幻·灵异<?php endif; ?>
                    </h5><?php endif; ?>
                    <ul>
                        <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value1']):
?>
                        <li class="list_book">
                        <a href="read.php?bookid=<?php echo $this->_tpl_vars['value1']->id; ?>
"><span class="list_book_advt">「Hot」</span><?php echo $this->_tpl_vars['value1']->book_name; ?>
</a>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
                <?php endforeach; endif; unset($_from); ?>
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
                            <a href="read.php?bookid=<?php echo $this->_tpl_vars['favortelist']->id; ?>
"> <img src="<?php echo $this->_tpl_vars['favortelist']->cover; ?>
" class="img-responsive"  style="width: 68px; height: 100px;" /></a>
                        </div>
                       <a href="read.php?bookid=<?php echo $this->_tpl_vars['favortelist']->id; ?>
"> <p class="bookname"><?php echo $this->_tpl_vars['favortelist']->book_name; ?>
</p></a>
                        <p class="author"><?php echo $this->_tpl_vars['favortelist']->author; ?>
·<?php echo $this->_tpl_vars['favortelist']->update_mode; ?>
</p>
                        <p><span><?php echo $this->_tpl_vars['favortelist']->favorte; ?>
</span>人在追</p>
                        <p class="content"><?php echo $this->_tpl_vars['favortelist']->book_info; ?>
</p>
                        <a href="list.php?bookid=<?php echo $this->_tpl_vars['favortelist']->id; ?>
" ><span class="book_button">书籍详情</span></a>
                    </div>
                </div>
                <div class="col-md-9 column">
                    <ul class="list_book2">
                        <?php $_from = $this->_tpl_vars['machfavorte']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vale']):
?>
                        <li>
                            <a href="read.php?bookid=<?php echo $this->_tpl_vars['vale']->id; ?>
"> <img src="<?php echo $this->_tpl_vars['vale']->cover; ?>
" style="float: left; width: 80px; height: auto;"></a>
                            <span class="text_title"> <a href="read.php?bookid=<?php echo $this->_tpl_vars['vale']->id; ?>
"><?php echo $this->_tpl_vars['vale']->book_name; ?>
</a></span><br>
                            <span class="text_content"><?php echo $this->_tpl_vars['vale']->book_info; ?>
</span><br>
                            <span class="text_author"><img src="images/user.0.1.png"><?php echo $this->_tpl_vars['vale']->author; ?>
 </span>
                            <span class="text_attr"><?php echo $this->_tpl_vars['vale']->update_mode; ?>
</span> <span class="text_nav"><?php echo $this->_tpl_vars['vale']->attr; ?>
</span>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
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
                        <a href="read.php?bookid=<?php echo $this->_tpl_vars['freeone']->id; ?>
"><img src="<?php echo $this->_tpl_vars['freeone']->cover; ?>
" style="float: right; width: 80px; height: auto;"></a>
                        <img src="images/1.png"><br>
                        <span> <a href="read.php?bookid=<?php echo $this->_tpl_vars['freeone']->id; ?>
"><?php echo $this->_tpl_vars['freeone']->book_name; ?>
</a></span><br>
                        <span class="book_list1_red"><?php echo $this->_tpl_vars['freeone']->favorte; ?>
月票</span><br>
                        <span><?php echo $this->_tpl_vars['freeone']->author; ?>
</span>
                    </div>
                </li>
                <?php $_from = $this->_tpl_vars['freelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
                    <li class="list_book1">
                        <a href="read.php?bookid=<?php echo $this->_tpl_vars['value']->id; ?>
"><img src="images/<?php echo $this->_tpl_vars['key']+2; ?>
.png"><span class="book_name"><?php echo $this->_tpl_vars['value']->book_name; ?>
</span> <span class="book_author"><?php echo $this->_tpl_vars['value']->author; ?>
</span></a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "foot.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>