<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"C:\AppServ\www\jmyp\public/../application/index\view\shop\index.html";i:1524569485;s:54:"C:\AppServ\www\jmyp\application\index\view\layout.html";i:1524539667;}*/ ?>
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
	<title>商品详情</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	<script src='/static/index/js/jquery.min.js'></script>
	<style>
	  .box{width:610px;margin:100px auto;}
			.tb-pic a{display:table-cell;text-align:center;vertical-align:middle;}
			.tb-pic a img{vertical-align:middle;}
			.tb-pic a{*display:block;*font-family:Arial;*line-height:1;}
			.tb-thumb{margin:10px 0 0;overflow:hidden;}
			.tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
			.tb-s310, .tb-s310 a{height:310px;width:310px;}
			.tb-s310, .tb-s310 img{max-height:310px;max-width:310px;}
			.tb-s310 a{*font-size:271px;}
			.tb-s40 a{*font-size:35px;}
			.tb-s40, .tb-s40 a{height:40px;width:40px;}
			.tb-booth{;position:relative;z-index:1;}
			.tb-thumb .tb-selected{background:none repeat scroll 0 0 #C30008;height:40px;padding:2px;}
			.tb-thumb .tb-selected div{border:medium none;}
			.tb-thumb li div{border:1px solid #CDCDCD;}
			.zoomDiv{z-index:999;position:absolute;top:0px;left:0px;width:200px;height:200px;display:none;text-align:center;overflow:hidden;}
			.zoomMask{position:absolute;background:url("/static/index/img/mask.png") repeat scroll 0 0 transparent;cursor:move;z-index:1;}
	</style>
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
						
					        </div>
					        <div class='mz_inner clearfix'>
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
					        </div>
				        </div> -->
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
				<!-- <div class='header_pop_subAtc box-shadow' id='header_pop_subAct'>
					<div class='mz_imglist'>
						<a href=''><img src='img/30573_254_135_003-web.jpg'></a>
						<a href=''><img src='img/30573_254_135_005-web.jpg'></a>	
						
					</div>
					<div class='mz_inner clearfix'>
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
					</div>
				</div> -->
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
	
<!-- 内容-->
    <div class="mall_shop_content">
    	<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
    	<div class="mall_shop_banner" style='background:url("http://www.jmyp.com/static/upload/brand/<?php echo $dat['bimg']; ?>") center top no-repeat;'>
    		<a href='' class='layout'>
    			
    		</a>
    	</div>
    	<div class="mall_shop_menu">
    		<div class="layout_1090 mall_shop_all">
    			<ul class='mall_menu_ul'>
    				<li><span></span><a href=''>首页</a></li>
    				<li><span></span><a href=''>全部商品</a></li>
    				<li><span></span><a href=''>补水套装</a></li>
    				<li><span></span><a href=''>明星单品</a></li>
    				<li><span></span><a href=''>美白保湿系列</a></li>
    				<li><span></span><a href=''>面膜系列</a></li>
    			</ul>
    			<a href="javascript:void(0)" class="mall_shop_fav"><i></i>收藏</a>
    			<div class="mall_shop_introduce">
    				<span><?php echo $dat['store']; ?></span><i></i>

    			</div>
    		</div> 		
    	</div>

    </div>
    <div class="mall_detail_wrap  white_bg">
    	<div class="mall_detail_sub">
    		<a href=''>美妆商城首页</a><em>&gt;</em>
    		<a href=''><?php echo $dat['store']; ?></a><em>&gt;</em>
    		<?php endforeach; endif; else: echo "" ;endif; if(is_array($colum) || $colum instanceof \think\Collection || $colum instanceof \think\Paginator): $i = 0; $__LIST__ = $colum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$colu): $mod = ($i % 2 );++$i;?>
    		<a href="<?php echo url('Classs/index',array('id'=>$colu['columid'])); ?>"><?php echo $colu['cname']; ?></a><em>&gt;</em>
    		<?php endforeach; endif; else: echo "" ;endif; if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shp): $mod = ($i % 2 );++$i;?>
    		<span><?php echo mb_substr($shp['contact'],0,56,'utf-8');?>。</span>
    	</div>
    	<h1 class="mall_main_title"><?php echo $shp['contact']; ?></h1>
        <div class="mall_detail_all clearfix">
        	<!-- <div class="mall_detail_l jqZoomContent fl">
        		<div class="pro_img">
        			<div class="jqzoom small">
        				<img src='img/28491_350_350.jpg'>
        				<i class='zoom_icon'></i>
        			</div>
        		</div>
        	</div> -->
        	<div id="demo" class='box mall_detail_l jqZoomContent fl'>
			    <div id="small-box" class='pro_img tb-booth tb-pic tb-s310'>
			        <!-- <a href="">
			        <img src="/static/upload/shop/<?php echo $shp['simg']; ?>" id='midimg' class="jqzoom"/></a> -->
			        <a href="/static/index/upload/shop/<?php echo $shp['simg']; ?>"><img src="/static/upload/shop/<?php echo $shp['simg']; ?>" alt="美女" rel="/static/upload/shop/<?php echo $shp['simg']; ?>" class="jqzoom" id="imgs"/></a>
			        <!-- <a href="/static/index/img/01.jpg"><img src="/static/index/img/01_mid.jpg" alt="美女" rel="/static/index/img/01.jpg" class="jqzoom" style="width:292px;height:252px;"/></a> -->
			    </div>
			   
			    
			</div>
			
			<!-- <div class="preview"> -->
				<!-- <div id="vertical" class="bigImg">
					<img src="img/28491_1000_1000.jpg" id="midimg" />
					<div id="mark"></div>
			        <div id="float-box"></div>
					
				</div> --><!--bigImg end	-->
				<!-- <div class="smallImg">
					<div class="scrollbutton smallImgUp disabled"></div>
					<div id="imageMenu">
						<ul>						
							<li><img src="public/img/54fd01dfN91990a8c.jpg"/></li>
							<li><img src="public/img/54fcf801N016ed0ea (1).jpg"/></li>
							<li><img src="public/img/54fcf803Nf4c91bdf (1).jpg"/></li>
							<li><img src="public/img/54fcf805N63fb9a40 (1).jpg"/></li>
							<li><img src="public/img/54fd01e6N9f98d797 (1).jpg"/></li>
							
						</ul>
					</div>
					<div class="scrollbutton smallImgDown"></div>
				</div> --><!--  smallImg end -->	 
				<!-- <div id="bigView" style="display:none;"><img alt="" src="" /></div> -->
			<!-- </div>  -->
        	



        	<div class="mall_detail_r fl">
        		<div class="mall_price_detail">
        			
        			<div class="mall_price clearfix">
        				<em class="yen">¥</em>
        				<span class="price_num"><?php echo $shp['price']; ?></span>
        				<span class="label">聚美价</span>
        			</div>
        			<dl class='mall_sale_rules'>
        				<dd>
        					<span class="sale_rules_l fl">满减</span>
        					<a class="sale_rules_m fl" href="">温碧泉满99减10；199减50；满299减100</a>
        					<span class="sale_rules_r fr">
        						<span class="today_time">仅剩</span>
        					</span>
        				</dd>
        				<dd>
        					<span class="sale_rules_l fl">满减</span>
        					<a class="sale_rules_m fl" href="">温碧泉满99元送透芯润MINI三件套</a>
        					<span class="sale_rules_r fr">
        						<span class="today_time">仅剩</span>
        					</span>
        				</dd>
        				<dd>
        					<span class="sale_rules_l fl">满减</span>
        					<a class="sale_rules_m fl" href="">温碧泉满199元送润透保湿旅行套</a>
        					<span class="sale_rules_r fr">
        						<span class="today_time">仅剩</span>
        					</span>
        				</dd>
        				<dd>
        					<span class="sale_rules_l fl">满减</span>
        					<a class="sale_rules_m fl" href="">温碧泉买即赠泉芯长效补水面膜1片</a>
        					<span class="sale_rules_r fr">
        						<span class="today_time">仅剩</span>
        					</span>
        				</dd>
        			</dl>
        		</div>
        		<div class="mall_detail_common mall_detail_koubei mar_t15 clearfix">
        			<span class="label">口碑</span>
        			<div class="mall_koubei_detail">
        				<span class="mall_koubei_star fl">
        					<i style="width:98%;"></i>
        				</span>
        				<span class="mall_koubei_rate fl">
        					<a>4.7</a>分
        				</span>
        				<div class="clear"></div>
        			</div>
        		</div>
        		<div id="mall_sku_list" class="mall_detail_common mall_sku_list mar_t15 clearfix"></div>
                <div class="mall_detail_common mall_product_num mar_t15 clearfix">
                	<span class="label">数量</span>
                	<div class="num_detail" id="num_detail">
	                    <em title="减少" class="number_reduce fl"></em>

	                    <input type="text" id="number" name="num" value="1" class="buy_number fl" >
	                    <em title="增加" class="number_add fl"></em>
						
						<input type="hidden" value="1">
						<input type="hidden"  value="<?php echo $shp['id']; ?>" id="shopid">
					
	                 
	                    
	                </div>
                </div>

                <div class="mall_info_button mar_t20 clearfix">
                	<a href="javascript:;"class="mall_addcart_up" style="cursor:pointer;"></a>
                	<!-- <input type="hidden" name="id" value="<?php echo $shp['id']; ?>"> -->
                	<!-- <input class="s-btncar" type="submit" value="加入购物车"> -->
                	<div class="mall_like_all">
	                    <a class="mall_like_fav" href="javascript:;">
	                        <span class="ilike_text">收藏</span>
	                        <span class="ilike_num">(<em class="ilike_num">2213</em>)</span>
	                    </a>
	                </div>
	                <div class="clear"></div>
                </div>
                <div class="mall_detail_buynum mar_t15 clearfix">
                	<i class="deal_buy_icon"></i>
                	<p class="buynum">
                        月销<span class="red_num"><?php echo $shp['sales']; ?></span>
                    </p>
                </div>
                <div class="mall_detail_common mall_product_service mar_t20 clearfix">
                	<span class="label">服务</span>
                	<div class="mall_serce_list">
                		<a href=''class='con'>正品保证</a>
                		<a href=''class='con'>质量保险</a>
                		<a href=''class='con'>本商品支持30天拆封无条件退货</a>
                		<a href=''class='con'>官方授权</a>
                		<a href=''class='con'>闪电发货</a>
                		<a href=''class='con'>本商品满299元或2件包邮</a>
                	</div>
                </div>
                <div class="shopname_self mar_t15">
                	<span class="shopname_icon fl">聚美自营</span>
                	<span class="shopname_word fl">
                		本商品由<em class="self_mar">聚美优品</em>拥有和销售
                	</span>
                </div>
        	</div>
        	<div class='clear'></div>
       
        </div>
    </div>
<!-- 参数	 -->
    <div class="layout_1090 product_detail clearfix">
    	<div class="product_detail_l fl">
    		<div class="product_tabs">
    			<div class="product_tabs_content">
    				<ul class='new_tabs'>
    					<li class='product_tabs_right'>
    						<span class="price">
                            	<em>¥</em><span class="tabs_price"><?php echo $shp['price']; ?></span>
                        	    <a href="javascript:;"class="buy mall_addcart_up deal_add_cart" id="foot_car_btn"></a>
                        	</span>
    					</li>
    					<li class="tabs-detail-title">
    						<?php echo $shp['sname']; ?><i class="icons-abt"></i>
    					</li>
    					<li class="p_tabs_menu">
    						<a href="#product_parameter">商品参数</a>
    					</li>
    					<li class="p_tabs_menu">
    						<a href="#product_story">本单详情</a>
    					</li>
    					<li class="p_tabs_menu">
    						<a href="#real_photo">商品实拍</a>
    					</li>
    					<li class="p_tabs_menu">
    						<a href="#real_photo">用户口碑</a>
    					</li>
    					<li class="p_tabs_menu">
    						<a href="#real_photo">聚美优势</a>
    					</li>
    				</ul>
    			</div>
    			<div id='nav_bar_fixed' class="product_tabs_content nav_bar_fixed">
    				<ul class='new_tabs'>
    					<li class="p p_tabs_menu"><a href=""class='tab_menu_a'>商品参数</a></li>
    					<li class="p p_tabs_menu"><a href=""class='tab_menu_a'>本单详情</a></li>
    					<li class="p p_tabs_menu"><a href=""class='tab_menu_a'>商品实拍</a></li>
    					<li class="p p4 p_tabs_menu"><a href="javascript:;"class='tab_menu_a'>用户口碑</a></li>
    					<li class="p p_tabs_menu"><a href="" class='tab_menu_a'>聚美优势</a></li>

    					<li class="mall_cart_icons">
			                <span class="jm_price fl"><em class="jm_yen">¥</em><?php echo $shp['price']; ?></span>
			                <a class="mall_bottom_cart" href="javascript:;"></a>
			            </li>
    				</ul>
    			</div>
    		</div>
    		<div class="product_info_border">
    			<div class="product_info_detail">
    				<div class="new_user_imgshow">
    					
    					<?php echo $shp['content']; ?>
    				</div>
    			</div>
    		</div>
    	</div>
    	
    	
        <div class="clear"></div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
<!-- 评论 -->
    <div class="user_koubei w_700">
		<h2 class='detail_title'></h2>
		<ul class='reports_list_wrap'>
			<?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comm): $mod = ($i % 2 );++$i;?>
			
			<li class='pfTrends'>

				<div class="avatar user_info_wrap">
                <?php if($comm['img']): ?>
     			<a href=''><img src='/static/upload/user/<?php echo $comm['img']; ?>'></a>
                <?php else: ?>  
                <a href='' class='img'><img src='/static/index/img/284241596-64-15173983821.jpg'></a>  
     			
     			<?php endif; ?>

					
					<div class="user_name_wrap"><a href=''><?php echo $comm['username']; ?></a></div>
					<div class="rate-score"><h4>与描述相符</h4><strong >4.8</strong><p><span class="score-value-no score-value-4d8"><em></em></span></p></div>
				</div>
				<div class="report">
					<div class="report_content">
						<div class="desc"><a href=''><?php echo $comm['content']; ?></a></div>
					</div>
					<div class="report_content">
						<div class="desc">
							<?php if($comm['cimg']): ?>
							<a href=''>
							<img style="width:80px;height:80px;"src="/static/upload/comment/<?php echo $comm['cimg']; ?>"/></a>
							<?php else: ?><a href=""></a><?php endif; ?>
						</div>
					</div>
					<div class="user_name_wrap"><a href=''><?php echo date("Y-m-d H:i:s",$comm['time']); ?></a></div>

				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="clear"></div>
		</ul>
    	<div class="clear"></div>	
    </div>
    
<!-- 右侧固定 -->
    <div class='ibar'>
    	<div class='ibar_main_panel'>
    		<ul class='ibar_mp_center'>
    			<li class='mpbtn_login'>
    				<a href=''><s></s>登录</a>

    			</li>
    			<li class='mpbtn_cart'>
    				<a href=''>
    					<s></s>
    					<span class='text'>购物车</span>
    					<span class='cart_num'>0<span>
    				</a>
    			</li>
    			<li class='mpbtn_asset'>
    				<a href=''><s></s>我的财产</a>
    				<div class='mp_tooltip'>
    					我的财产<s class='icon_arrow_right_black'></s>
    				</div>
    			</li>
    			<li class='mpbtn_favorite'>
    				<a href=''><s></s>我的心愿单</a>
    				<div class='mp_tooltip'>
    					我的心愿单<s class='icon_arrow_right_black'></s>
    				</div>
    			</li>
    			<li class='mpbtn_histroy'>
    				<a href=''><s></s>我看过的</a>
    				<div class='mp_tooltip'>
    					我看过的<s class='icon_arrow_right_black'></s>
    				</div>
    			</li>
    			
    		</ul>
    		<ul class='ibar_mp_bottom'>
    			<li class='mpbtn_qrcode'>
    				<a href=''><s></s>手机聚美</a>
    				<div class='mp_qrcode'>
    					<img src='/static/index/img/qrcode.png'>
    					<s class='icon_arrow_white'></s>
    				</div>
    			</li>
    			<li class='mpbtn_support'>
    				<a href=''><s></s>客服中心</a>
    				<div class='mp_tooltip'>
    					客服中心
    					<s class='icon_arrow_right_black'></s>
    				</div>
    			</li>
    			<li class='mpbtn_gotop'>
    				<a href='javascript:;' id='btn_goto' class='btn_gotop'><s></s>返回顶部</a>
    				<div class='mp_tooltip'>
    					返回顶部
    					<s class='icon_arrow_right_black'></s>
    				</div>
    			</li>
    			<script>
					$('#btn_goto').click(function(){
						sh=$(window).scrollTop();
						v=50;

						sobj=setInterval(function(){
							sh-=v;

							if(sh<=0){
								sh=0;
								clearInterval(sobj);
							}
							$(window).scrollTop(sh);
						},5);
					});
    			</script>
    		</ul>
    	</div>
    	<div class='ibar_login_box  status_logout'>
    		<div class='avatar_box'>
    			<p class='avatar_imgbox'>
    				<img src='/static/index/img/avatar_nonesign.jpg'>
    			</p>
    			<p>你好！请&nbsp;<a href=''>登录</a>&nbsp;|&nbsp;<a href=''>注册</a></p>
    		</div>
    		<div class="login_btnbox">
    			<a href='' class='login_order'>我的订单</a>
    			<a href='' class='login_favorite'>我的收藏</a>
    			
    		</div>
    		<s class='icon_arrow_white'></s>
    		<a href='javascript:;' class='ibar_closebtn'  title='关闭'></a>
    	</div>
    </div>
 

</body>


<script src='/static/index/js/setinterval.js'></script>
<script src='/static/index/js/jquery.imagezoom.js'></script>

<script>
	

	$('.number_add').click(function(){
        num=$('.buy_number').val();
        num2=parseInt(num)+1;
        // if(num2>=stock){
        //      num2=stock;
        // }
        $('.buy_number').val(num2);
        if(num2>1){
           $('.number_reduce').css({'color':'#666','cursor':'pointer'});
	    }else{
           $('.number_reduce').css({'color':'#ccc','cursor':'not-allowed'});

	    }
	});
	$('.number_reduce').click(function(){
        num=$('.buy_number').val();
        num2=parseInt(num)-1;
        if(num2<=1){
             num2=1;
          }   
        $('.buy_number').val(num2);
        if(num2>1){
           $('.number_reduce').css({'color':'#666','cursor':'pointer'});
	    }else{
           $('.number_reduce').css({'color':'#ccc','cursor':'not-allowed'});

	    }
	});

	$('.mall_addcart_up').click(function(){
		id=$('#shopid').val();
		
		num=$('#number').val();
		
		$.post("<?php echo url('ajax_cart'); ?>",{id:id,num:num},function(r){
			window.location.href = '<?php echo url("Cart/index"); ?>';
		})
	})
	
		$(document).ready(function(){
			$(".jqzoom").imagezoom();
			$("#thumblist li a").click(function(){
				//增加点击的li的class:tb-selected，去掉其他的tb-selecte
				$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
				//赋值属性
				$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
				$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
			});
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