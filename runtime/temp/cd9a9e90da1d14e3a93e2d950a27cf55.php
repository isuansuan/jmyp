<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"C:\AppServ\www\jmyp\public/../application/index\view\person\comment.html";i:1524576123;s:54:"C:\AppServ\www\jmyp\application\index\view\layout.html";i:1524539667;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="聚美优品是国内知名正品女性团购网站,也是领先的品牌化妆品团购和护肤品团购网,聚美优品团购化妆品每天有超值的化妆品和护肤品团购信息,详情登陆聚美优品官网：jumei.com。"/>
	<meta name="keywords" content="聚美优品,化妆品团购,今日团购,化妆品防伪,化妆品验真,真品联盟"/>
	<title>聚美优品</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	<script src='/static/index/js/jquery.min.js'></script>
	
	
</head>

<body>
	<div class='headerTop'>
		<div class='headerTopBox'>
			<ul class='header_top_left' id='headerTopLeft'>
				<li>欢迎来到聚美！</li>
			    

				<li><a href='<?php echo url('Resig/index'); ?>'>快速注册</li>
			    <?php if(session('username')): ?>
                   <li><a href='<?php echo url('Login/index'); ?>' style="color:red"><?php echo \think\Session::get('username'); ?></a></li>	
					<span class='tpl-header-list-user-ico'><a href='<?php echo url('login/logout'); ?>'>[退出]</a></span>
					</a>
			    <?php else: ?>
                   <li><a href='<?php echo url('Login/index'); ?>'>请登录</a></li>
			    <?php endif; ?>	
					
				
					
				
				
			
				
			</ul>
			<ul class='header_top_right' id='headerTopRight'>
				<li><a hsref=''>正品保证</a></li>
				<li><a href=''>订单查询</a></li>
				<li><a href=''><s class='icon_favorite'></s>收藏的品牌</a></li>
			    <li class='item_ijumei'>
			    	<a href='<?php echo url('Person/index'); ?>'>我的聚美<s class='icon_arrow_down'></s></a>
			    	<div class='sub_nav sub_nav1'>
			    		<ul>
			    			<li><a href=''>我的订单</a></li>
			    			<li><a href=''>我的现金券</a></li>
			    			<li><a href=''>我的红包</a></li>
			    			<li><a href=''>我的余额</a></li>
			    			<li><a href=''>我的提现退款</a></li>
			    			<li><a href=''>我的收藏</a></li>
			    			<li><a href=''>我的心愿单</a></li>
			    			<li><a href=''>会员中心</a></li>
			    			<li><a href=''>礼品卡兑换</a></li>
			    		</ul>
			    	</div>
			    </li>
			    <li class='item_mobile'>
			    	<a href=''>
			    		<span class='line'></span>
			    		<s class='icon_mobile'></s>手机聚美
			    	</a>
			    </li>
			    <li id='see_more'>
			    	<span class='line'></span>
			    </li>
			    <li class='item_more'>
			    	<a href=''>更多<s class='icon_arrow icon_arrow_down'></s></a>
			        <div class='sub_nav sub_nav2'>
			        	<ul>
			        		<li><a href=''>邀请好友</a></li>
			        		<li><a href=''>加入收藏</a></li>
			        		<li><a href=''>新浪微博</a></li>
			        		<li><a href=''>聚美微信</a></li>
			        		<li><a href=''>百度贴吧</a></li>
			        		<li><a href=''>腾讯微博</a></li>
			        		<li><a href=''>人人公众主页</a></li>
			        	</ul>
			        </div>
			    </li>
			</ul>
		</div>
	</div>
	

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	<script src='/static/index/js/jquery.min.js'></script>
	<script src="/static/public/up/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/static/public/up/uploadify.css">
</head>
<body>
	
<!-- logo 搜索 cart -->
	<div class='header'>
		<div class='header_center'>
			<h1 class='logo'>
				<a href='<?php echo url('Index/index'); ?>' id='home'></a>
			</h1>
			<div class='header_searchbox header_out_searchbox'>
				<form action='http://search.jumei.com' method='get'>
					<input type='text' name='search' class='header_search_input' id='header_search_input'>
					<button type='submit' class='header_search_btn'>搜索</button>
				</form>
				<div class='search_result_pop_a' id='top_out_search_pop_div'></div>
			    <ul class='hot_word'>
			    	<li><a href=''>保湿</a><s class='line'></s></li>
			    	<li><a href=''>面膜</a><s class='line'></s></li>
			    	<li><a href=''>洗面奶</a><s class='line'></s></li>
			    	<li><a href=''>补水</a><s class='line'></s></li>
			    	<li><a href=''>香水</a><s class='line'></s></li>
			    	<li><a href=''>眼霜</a><s class='line'></s></li>
			    	<li><a href=''>口红</a><s class='line'></s></li>
			    	<li><a href=''>护肤套装</a><s class='line'></s></li>
			    	<li><a href=''>BB霜</a></li>

			    </ul>
			</div>
		    <div id='cart_box' class='cart_box'>
		    	<a id='cart' class='cart_link' href=''>
		    		<img src='/static/index/img/cart.gif' class='cart_gif'>
		    		<span class='text'>去购物车结算</span>
		    		<span class='num'></span>
		    		<s class='icon_arrow_right'></s>
		    	</a>
		    </div>
	    </div>
	</div>
<!-- 导航条 -->	
	<div class='header_bottom'>
		<div class='channel_nav_box'>
			<div class='channel_nav_list_wrap'>
				<ul class='channel_nav_list'>
					<li class='currentn'>
						<a href='' class='home'>首页</a>
					</li>
					<li>
						<a href=''>极速免税店</a>
					</li>
					<li>
						<a href=''>母婴特卖</a>
					</li>
					<li class='meizhuang'>
						<a href='' class='mei'>美妆商城<s></s></a>
						<!-- <div class='header_pop_subAtc box-shadow' id='header_pop_subAct'>
					        <div class='mz_imglist'>
								<a href=''><img src='/static/index/img/30573_254_135_003-web.jpg'></a>
								<a href=''><img src='/static/index/img/30573_254_135_005-web.jpg'></a>	
						
					        </div> -->
					     <!--    <div class='mz_inner clearfix'>
								<dl class='mz1'>
									<dt class='item_int png'><a>国际大牌</a></dt>
									<dd><a href=''>兰蔻</a></dd>
									<dd><a href=''>娇韵诗</a></dd>
									<dd><a href=''>伊丽莎白雅顿</a></dd>
									<dd><a href=''>雅诗兰黛</a></dd>
									<dd><a href=''>欧莱雅</a></dd>
									<dd><a href=''>兰芝</a></dd>
									<dd><a href=''>倩碧</a></dd>
									<dd><a href=''>SK-ll</a></dd>
									<dd><a href=''>雅漾</a></dd>
									<dd><a href=''>菲诗小铺</a></dd>
									<dd><a href=''>悦诗风吟</a></dd>
								</dl>
								<dl>
									<dt class='item_hufu png'><a>护肤</a></dt>
									<dd><a href=''>洁面</a></dd>
									<dd><a href=''>爽肤水</a></dd>
									<dd><a href=''>精华</a></dd>
									<dd><a href=''>乳液</a></dd>
									<dd><a href=''>面霜</a></dd>
									<dd><a href=''>眼霜</a></dd>
									<dd><a href=''>面膜</a></dd>
									<dd><a href=''>护肤套装</a></dd>
									
								</dl>
								<dl>
									<dt class='item_caizhuang png'><a>彩妆</a></dt>
									<dd><a href=''>卸妆</a></dd>
									<dd><a href=''>BB霜</a></dd>
									<dd><a href=''>粉底液</a></dd>
									<dd><a href=''>粉饼</a></dd>
									<dd><a href=''>眼影</a></dd>
									<dd><a href=''>眼线笔</a></dd>
									<dd><a href=''>睫毛膏</a></dd>
									<dd><a href=''>眉笔</a></dd>
									<dd><a href=''>口红</a></dd>
									<dd><a href=''>腮红</a></dd>
									
								</dl>
								<dl class='mz4'>
									<dt class='item_xiangfen png'><a>香氛</a></dt>
									<dd><a href=''>女士香水</a></dd>
									<dd><a href=''>男士香水</a></dd>
									<dd><a href=''>中性香水</a></dd>
									<dd><a href=''>Q版香水</a></dd>
									<dd><a href=''>香水套装</a></dd>
									<dd><a href=''>精油</a></dd>
									
								</dl>
								<dl class='mz5'>
									<dt class='item_nanshi png'><a>男士专区</a></dt>
									<dd><a href=''>洁面</a></dd>
									<dd><a href=''>爽肤水</a></dd>
									<dd><a href=''>面霜</a></dd>
									<dd><a href=''>精华</a></dd>
									<dd><a href=''>护肤套装</a></dd>
									<dd><a href=''>洗发</a></dd>
									<dd><a href=''>沐浴</a></dd>
									
								</dl>
								<dl class='mz6'>
									<dt class='item_hot png'><a>热门搜索</a></dt>
									<dd><a href=''>面膜贴</a></dd>
									<dd><a href=''>洗面奶</a></dd>
									<dd><a href=''>唇膏</a></dd>
									<dd><a href=''>去黑头</a></dd>
									<dd><a href=''>怯斑</a></dd>
									<dd><a href=''>隔离</a></dd>
									<dd><a href=''>祛痘</a></dd>
									<dd><a href=''>去角质</a></dd>
									<dd><a href=''>指甲油</a></dd>
									
								</dl>
					        </div> -->
				        <!-- </div> -->
					</li>
					<li>
						<a href=''>国际轻奢</a>
					</li>
					<li>
						<a href=''>服装运动</a>
					</li>
					<li>
						<a href=''>鞋包配饰</a>
					</li>
				</ul>
				
			    <ul id='icon_wrap' class='icon_wrap'>
			    	<li>
			    		<a href=''><span></span></a>
			    	</li>
			    	<li>
			    		<a href=''><span class='th'></span></a>
			    	</li>
			    	<li>
			    		<a href=''><span class='by'></span></a>
			    	</li>
			    </ul>
			</div>
		</div>
	</div>
<!-- 内容 -->	
    <div class="profile">
     	<div class="nav" style="height:2210px;">
     		<div class="notice">
     			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; if($data): if($dat['img']): ?>
     			<a href='' class='img'><img src='/static/upload/user/<?php echo $dat['img']; ?>'></a>
                <?php else: ?>  
                <a href='' class='img'><img src='/static/index/img/284241596-64-15173983821.jpg'></a>  
     			
     			<?php endif; else: ?>  
	                 <a href='' class='img'><img src='/static/index/img/284241596-64-15173983821.jpg'></a> 
             	 <?php endif; ?>	
     			
     			<p class='nickname'>
     				<a href=''>JM180BNEN9073</a>
     			</p>
     			<p class='nick'><a href=''>普通会员</a></p>
     			<p class="uid">用户ID: 284241596</p>

     		</div>
     		<h2><b></b>我的聚美优品</h2>
     		<a href="<?php echo url('Person/index'); ?>" class="list selected"><b></b>我的订单</a>
     		<a href="<?php echo url('Person/mycomm'); ?>" class="wish"><b></b>评价晒单</a>
     		<a href="<?php echo url('Person/collect'); ?>" class="fav"><b></b>我的收藏</a>
     		<!-- <a href="<?php echo url('Person/comment'); ?>" class="fav"><b></b>我的评价</a> -->
     		<a href="<?php echo url('Person/order'); ?>" class="fav"><b></b>订单详情</a>
     		<h2><b></b>管理个人账户</h2>
     		<a href="<?php echo url('Person/add'); ?>" class="addr"><b></b>管理收货地址</a>
     		<a href="<?php echo url('Person/uppass'); ?>" class="bind"><b></b>修改密码</a>
     		<a href="<?php echo url('Person/mess'); ?>" class="settings"><b></b>设置账户信息</a>
     	</div>
     	
        <h1 class='righta'>
		    <a href="" target="_blank">手机客户端，随时随地查看物流详情</a>
		    评价宝贝
		</h1>
		<form action="" id=""  method="post"  enctype="multipart/form-data" >
			<?php if(is_array($brand) || $brand instanceof \think\Collection || $brand instanceof \think\Paginator): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shp): $mod = ($i % 2 );++$i;?>
		
			<div class="item-detail">
				<div  style="display:inline-block;">
					<a href="" class="item-d-img" >
						<input type="hidden" name="sid" class="imgss" value="<?php echo $shp['id']; ?>">
						<img src="/static/upload/shop/<?php echo $shp['simg']; ?>"style="width:148px;height:114px;">
						
						<span class="clear"></span>
					</a>
						
				</div>
				<div class="item-title">
					<?php echo mb_substr($shp['contact'],8,10,'utf-8'); ?>.....
				</div>
				<div class="clear"style='width:800px;'></div>
			</div>
			
			<div class="itemlist">
				<div class="textinput">
					
					<textarea name="content" class="imgss" maxlength="" aria-labelby="label-ti-145650173528839212" class="rate-msg"placeholder='咳咳，如果商品不符合您的要求，亲可以先联系卖家沟通一下售后哦~' style="height:115px;padding-left:63px;padding-top:20px;width:428px;"></textarea>
					
					<div id="queue" style="width:500px; height:100px"></div>
					
					
					<input type="hidden" name="cimg" id='img'>
					<input id="file_upload" name="file_upload" type="file" multiple="true">
					
				</div>
				<div class="clear"style='width:500px;'></div>
			</div>
		    
			<div class="dsr-box">
				<h2 class="dsr-title"><span>店铺动态评分</span></h2>
				<ul class="stars">
					<li>
					    <label>宝贝与描述相符</label>
						<span data-type="description" class="rate-stars" style="position: absolute; left: -9999px; display:none;">
							<label><input type="radio" value="1" name="description" title="很不满意，差得太离谱，与卖家描述的严重不符，非常不满">一星</label>
							<label><input type="radio" value="2" name="description" title="不满意，部分有破损，与卖家描述的不符，不满意">二星</label>
							<label><input type="radio" value="3" name="description" title="一般，质量一般，没有卖家描述的那么好">三星</label>
							<label><input type="radio" value="4" name="description" title="满意，质量不错，与卖家描述的基本一致，还是挺满意的">四星</label>
							<label><input type="radio" value="5" name="description" title="很满意，质量非常好，与卖家描述的完全一致，非常满意">五星</label>
						</span>
						<span class="ks-simplestar"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png" class='miaoshu'></span>
						<span class="ks-ss-tips" style="display:none;"><strong>5 分</strong> - 质量非常好，与卖家描述的完全一致，非常满意</span>
					</li>
					<li>
						<label>卖家的服务态度</label>
						<span data-type="attitude" class="rate-stars" style="position: absolute; left: -9999px;">
							<label><input type="radio" value="1" name="attitude" title="很不满意，卖家态度很差，还骂人、说脏话，简直不把顾客当回事">一星</label>
							<label><input type="radio" value="2" name="attitude" title="不满意，卖家有点不耐烦，承诺的服务也兑现不了">二星</label>
							<label><input type="radio" value="3" name="attitude" title="一般，卖家回复问题很慢，态度一般，谈不上沟通顺畅">三星</label>
							<label><input type="radio" value="4" name="attitude" title="满意，卖家服务挺好的，沟通挺顺畅的，总体满意">四星</label>
							<label><input type="radio" value="5" name="attitude" title="很满意，卖家的服务太棒了，考虑非常周到，完全超出期望值">五星</label>
						</span>
						<span class="ks-simplestar"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png" class='maijia'></span>
						<span class="ks-ss-tip" style="display:none;"><strong>5 分</strong> - 卖家的服务太棒了，考虑非常周到，完全超出期望值</span>
					</li>
					<li>
						<label>物流服务的质量</label>
						<span data-type="delivery" class="rate-stars" style="position: absolute; left: -9999px;">
							<label><input type="radio" value="1" name="delivery" title="很不满意，到货速度严重延误，货物破损，派件员态度恶劣">一星</label>
							<label><input type="radio" value="2" name="delivery" title="不满意，到货速度慢，外包装严重变形，派件员不耐烦，态度差">二星</label>
							<label><input type="radio" value="3" name="delivery" title="一般，到货速度一般，外包装变形，派件员态度一般">三星</label>
							<label><input type="radio" value="4" name="delivery" title="满意，到货速度及时，派件员态度较好">四星</label>
							<label><input type="radio" value="5" name="delivery" title="很满意，到货速度非常快，商品完好无损，派件员态度很好">五星</label>
						</span>
						<span class="ks-simplestar"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png"><img src="/static/index/img/T1j_SkXl0fXXXXXXXX-19-19.png" class='wuliu'></span>
						<span class="ks-s-tips" style="display:none;"><strong>5 分</strong> - 到货速度非常快，商品完好无损，派件员态度很好</span>
					</li>
				</ul>
			
				<div class="clear"style='width:500px;'></div>
			</div>

			
			<div class="submitbox" style="display:inline-block;padding:20px 0 30px 233px;">
					<button type="submit" class="J_submit_rate tb-rate-btn type-primary wide-xxl">发表评论</button>
			</div>
		
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</form>
	    <div class="null_info">
	        <h2>
	            
	        </h2>
	    </div>
	    <a href="javascript:;" class="backtotop" id='btn_gotop'><b></b>回到顶部</a>
		
	   <div class="clear"></div>	
    </div>
    
</body>
<script src='/static/index/js/index.js'></script>
<script src='/static/index/js/setinterval.js'></script>
 <script>
 $(function() {
        $('#file_upload').uploadify({
            'swf'      : '/static/public/up/uploadify.swf',
            'uploader' : "<?php echo url('ajax_upload1'); ?>",
            'buttonText':'上传轮播图片',
            'fileObjName':'file',
            onUploadSuccess:function(file,data,response){
              img="<img src='/static/upload/comment/"+data+"' alt='' width='120px' height='80px'>"
              $('#queue').html(img);
              $('#img').val(data);
            }
        });
    });

 $('.miaoshu').click(function(){
 	$(this).parent().find('img').attr('src','/static/index/img/T1eMt9XclyXXXXXXXX-19-19.png');
 	$('.ks-ss-tips').show();
 });
 $('.maijia').click(function(){
 	$(this).parent().find('img').attr('src','/static/index/img/T1eMt9XclyXXXXXXXX-19-19.png');
 	$('.ks-ss-tip').show();
 });
 $('.wuliu').click(function(){
 	$(this).parent().find('img').attr('src','/static/index/img/T1eMt9XclyXXXXXXXX-19-19.png');
 	$('.ks-s-tips').show();
 });
 </script>
</html>
	

    

	<div class='footer' id='footer'>
 		<div class='footer_textarea'>
 			<div class='footer_top'>
 				<div class='footer_con footer_credit'>
 					<a href='' class='foot_link mostmall'>
 						<span class='first corn'></span>
 						<span class='con'><b>值得信赖美妆电商</b></span>四千万用户信赖
 					</a>
 					<a href='' class='foot_link quality'>
 						<span class='first corn'></span>
 						<span class='con'><b>成功在美上市</b></span>股票代码NYSE:JMEI
 					</a>
 					<a href='' class='foot_link back'>
 						<span class='first corn'></span>
 						<span class='con'><b>品牌防伪码</b></span>支持品牌官网验真
 					</a>
 					<a href='' class='foot_link depot'>
 						<span class='first corn'></span>
 						<span class='con'><b>30天无理由退货</b></span>只要不满意无理由退货
 					</a>
 					<a href='' class='foot_link consignment'>
 						<span class='first corn'></span>
 						<span class='con'><b>百万用户口碑</b></span>帮你选对的
 					</a>
 					<a href='' class='foot_link packaging'>
 						<span class='first corn'></span>
 						<span class='con'><b>订单闪电发货</b></span>1.5小时订单极速出库
 					</a>
 					<a href='' class='foot_link confide'>
 						<span class='first corn'></span>
 						<span class='con'><b>大牌明星热荐</b></span>打造精致明星脸
 					</a>
 				</div>
 			</div>
 			<div class='footer_top_sen'>
 				<div class='footer_con footer_links'>
 					<ul class='linksa'>
 						<li class='links'>服务保障</li>
 						<li><a href=''>正牌真品防伪码</a></li>
 						<li><a href=''>正品保障</a></li>
 						<li><a href=''>30天无条件退货</a></li>
 						<li><a href=''>7×24小时客服服务</a></li>
 					</ul>
 					<ul class='linksb'>
 						<li class='links'>使用帮助</li>
 						<li><a href=''>新手指南</a></li>
 						<li><a href=''>常见问题</a></li>
 						<li><a href=''>帮助中心</a></li>
 						<li><a href=''>用户协议</a></li>
 					</ul>
 					<ul class='linksc'>
 						<li class='links'>支付方式</li>
 						<li><a href='' class='zhifu'>货到付款</a></li>
 						<li><a href=''>在线支付</a></li>
 						<li><a href=''>余额支付</a></li>
 						<li><a href=''>现金券支付</a></li>
 					</ul>
 					<ul class='linksd'>
 						<li class='links'>配送方式</li>
 						<li><a href=''>包邮政策</a></li>
 						<li><a href=''>配送说明</a></li>
 						<li><a href=''>运费说明</a></li>
 						<li><a href=''>验货签收</a></li>
 					</ul>
 					<ul class='linkse'>
 						<li class='links'>售后服务</li>
 						<li><a href=''>正品承诺</a></li>
 						<li><a href=''>售后咨询</a></li>
 						<li><a href=''>退货政策</a></li>
 						<li><a href=''>退货办理</a></li>
 					</ul>
 					<div class='links_er_box'>
 						<ul class="linksf">
                           <li class="links">手机聚美</li>
                           <li><span class="link_bottom_pic"></span></li>
                           <li>下载移动客户端</li>
                        </ul>
                        <ul class="linksg">
	                        <li class="links">聚美微信</li>
	                        <li><span class="link_bottom_pic"></span></li>
	                        <li>聚美官方微信</li>
                        </ul>
 					</div>
 				</div>
 			</div>
 			<div class='footer_dy'>
 				<div class="play_box"><span class="play"></span></div>
 			</div>
 			<div class='footer_center'>
 				<div class='footer_con'>
 					<a href=''>关于聚美优品</a>
 					<a href=''>INVESTOR RELATIONS</a>
 					<a href=''>合作招商</a>
 					<a href=''>获取更新</a>
 					<a href=''>加入聚美</a>
 					<a href=''>品牌合作专区</a>
 					<a href=''>网站联盟</a>
 					<a href=''>媒体报道</a>
 					<a href=''>商务合作</a>
 				</div>
 			</div>
 			<div class="footer_copyright">
 				<div class="footer_con">
 					<p class="footer_copy_con">
                    COPYRIGHT © 2010-2018 北京创锐文化传媒有限公司 JUMEI.COM 保留一切权利。
                    客服热线：400-123-8888
                    <br>
                    京公网安备 11010102001226 | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">京ICP证111033号</a> | <a href="http://f0.jmstatic.com/btstatic/pc_static/food_pic.jpg">食品经营许可证</a>
                    | <a href="http://mp5.jmstatic.com/mobile/pc/chuangrui.jpg" target="_blank" rel="nofollow">营业执照</a> | <a href="http://mp5.jmstatic.com/mobile/pc/ICP.jpg" target="_blank" rel="nofollow">ICP许可证</a> | <a href="http://mp5.jmstatic.com/mobile/pc/chuban.jpg" target="_blank" rel="nofollow">出版物经营许可证</a>
                </p>
 				</div>
 			</div>
 		</div>
 	</div>
</body>
<script src='/static/index/js/header.js'></script>
<script src='/static/index/js/index.js'></script>
</html>