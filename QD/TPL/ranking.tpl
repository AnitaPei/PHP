{{include file="header.tpl"}}
<!-- 内容开始 -->
	<div class="container">  
		<!-- 头部开始 -->
		<div class="row clearfix">
		    <div class="right-top-div">
		        <h4>人气榜单</h4>
		        <span id="span1">{{$datetime}} 更新</span>
		        <p>
		            <a href="list.php" id="a1">全部分类</a>
		            {{foreach from=$rankingnavs item=v}}
		            <a href="list.php?id={{$v->id}}"> · {{$v->book_nav}}</a>
		            {{/foreach}}
		        </p>
		    </div>
		<!-- 头部结束 -->
		        <!-- 排行榜列表 第1行-->
		        <!-- 第1行 第1列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>点击榜 <a href="ranking.php">更多></a> <span class="span2" style="padding-top: 5px;"><a href="ranking.php" class="zhou">周</a><a href="ranking.php">·月</a><a href="ranking.php">·总</a></span></h5>
		                {{foreach from=$rankfirst2 item=v}}
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid={{$v->id}}">{{$v->book_name}}</a>
		                            </h4>
		                            <p class="digital"><strong>{{$v->click}}</strong> 点击</p>
		                            <p class="kind">
		                                <a href="list.php?id={{$v->id}}" class="type">{{$v->book_nav}}</a> <a href="#" class="writer">· {{$v->admin_user}}</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid={{$v->id}}">
		                                <img src="{{$v->cover}}" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		                {{foreach from=$rankform2 key=k item=v}}
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/{{$k+2}}.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid={{$v->id}}" class="name">{{$v->book_name}}</a>
		                            <span class="num">{{$v->click}}</span>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}	
		            </ul>
		        </div>
		        <!-- 第1行 第2列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>推荐票榜 <a href="ranking.php">更多></a> <span class="span2" style="padding-top: 5px;"><a href="ranking.php" class="zhou">周</a><a href="ranking.php">·月</a><a href="ranking.php">·总</a></span></h5>
		                {{foreach from=$rankfirst1 item=v}}
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid={{$v->id}}">{{$v->book_name}}</a>
		                            </h4>
		                            <p class="digital"><strong>{{$v->vip_count}}</strong> 推荐票</p>
		                            <p class="kind">
		                                <a href="list.php?id={{$v->id}}" class="type">{{$v->book_nav}}</a> <a href="#" class="writer">· {{$v->admin_user}}</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid={{$v->id}}">
		                                <img src="{{$v->cover}}" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		                {{foreach from=$rankform1 key=k item=v}}
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/{{$k+2}}.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid={{$v->id}}" class="name">{{$v->book_name}}</a>
		                            <span class="num">{{$v->vip_count}}</span>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		            </ul>
		        </div>       
		        <!-- 第1行 第3列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>收藏榜 <a href="ranking.php">更多></a></h5>
		                {{foreach from=$rankfirst item=v}}
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid={{$v->id}}">{{$v->book_name}}</a>
		                            </h4>
		                            <p class="digital"><strong>{{$v->favorte}}</strong> 收藏数</p>
		                            <p class="kind">
		                                <a href="list.php?id={{$v->id}}" class="type">{{$v->book_nav}}</a> <a href="#" class="writer">· {{$v->admin_user}}</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid={{$v->id}}">
		                                <img src="{{$v->cover}}" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		                {{foreach from=$rankform key=k item=v}}
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/{{$k+2}}.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid={{$v->id}}" class="name">{{$v->book_name}}</a>
		                            <span class="num">{{$v->favorte}}</span>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		            </ul>
		        </div>
		        <!-- 第1行 第4列 -->
		        <div class="col-md-3 column">
		            <ul>
		                <h5>完本榜 <a href="ranking.php">更多></a> <span class="span2" style="padding-top: 5px;"><a href="ranking.php" class="zhou">周</a><a href="ranking.php">·月</a><a href="ranking.php">·总</a></span></h5>
		                {{foreach from=$rankfirst2 item=v}}
		                <li>
		                    <div class="books">
		                        <div class="book-info">
		                            <h3>NO.1</h3>
		                            <h4>
		                                <a href="read.php?bookid={{$v->id}}">{{$v->book_name}}</a>
		                            </h4>
		                            <p class="digital"><strong>{{$v->click}}</strong> 点击</p>
		                            <p class="kind">
		                                <a href="list.php?id={{$v->id}}" class="type">{{$v->book_nav}}</a> <a href="#" class="writer">· {{$v->admin_user}}</a>
		                            </p>
		                        </div>
		                        <div class="book-cover">
		                            <a class="link" href="read.php?bookid={{$v->id}}">
		                                <img src="{{$v->cover}}" style="width: 80px; height: auto;">
		                            </a>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		                {{foreach from=$rankform2 key=k item=v}}
		                <li>
		                    <div class="bookname">
		                        <div class="num-div">
		                            <img src="images/{{$k+2}}.png">
		                        </div>
		                        <div class="name-div">
		                            <a href="read.php?bookid={{$v->id}}" class="name">{{$v->book_name}}</a>
		                            <span class="num">{{$v->click}}</span>
		                        </div>
		                    </div>
		                </li>
		                {{/foreach}}
		            </ul>
		        </div>
		        <!-- 第1行 第4列 结束 -->
			</div>
	</div>
<!-- 内容结束 --> 
{{include file="foot.tpl"}}
<!--登录和注册结束-->
<!---->
<!---->
<!--插入jq与js-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.8.3.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>