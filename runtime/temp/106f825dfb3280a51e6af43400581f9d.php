<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\AppServ\www\jmyp\public/../application/index\view\index\index.html";i:1524615603;s:54:"C:\AppServ\www\jmyp\application\index\view\layout.html";i:1524539667;}*/ ?>
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>聚美优品</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	<link rel="stylesheet" type="text/css" href="/static/index/banner/css/style.css" />
	<script src='/static/index/js/jquery.min.js'></script>
	<link href="/static/index/css/demo.css" rel="stylesheet" />
    <link href="/static/index/css/demo1.css" rel="stylesheet" />
  

    
  
</head>
<body>
	<!-- <audio src="h.mp3" controls autoplay></audio> -->
	
<!-- logo 搜索 cart -->
	<div class='header'>
		<div class='header_center'>
			<h1 class='logo'>
				<a href='<?php echo url('Index/index'); ?>' id='home'></a>
			</h1>
			<div class='header_searchbox header_out_searchbox'>
				<!-- <form action='http://search.jumei.com' method='get'> -->
				<form action='<?php echo url('More/index'); ?>' method='post'>

					<input type='text' name='search' class='header_search_input' id='header_search_input'>
					<button type='submit' class='header_search_btn'>搜索</button>
				</form>
				<div class='search_result_pop_a' id='top_out_search_pop_div'></div>
			    <ul class='hot_word'>
			    	<?php if(is_array($colum) || $colum instanceof \think\Collection || $colum instanceof \think\Paginator): $i = 0; $__LIST__ = $colum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
			    	

			    	<li><a href="<?php echo url('classs/index',array('id'=>$dat['id'])); ?>"><?php echo $dat['cname']; ?></a><s class='line'></s></li>

			    	
                    <?php endforeach; endif; else: echo "" ;endif; ?>

			    </ul>
			</div>
		    <div id='cart_box' class='cart_box'>
		    	<a id='cart' class='cart_link' href='<?php echo url('Cart/index'); ?>'>
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
						<div class='header_pop_subAtc box-shadow' id='header_pop_subAct'>
					        <div class='mz_imglist'>
								<a href=''><img src='/static/index/img/30573_254_135_003-web.jpg'></a>
								<a href=''><img src='/static/index/img/30573_254_135_005-web.jpg'></a>	
						
					        </div>
					        <div class='mz_inner clearfix'>
					        	
					        	<?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arra): $mod = ($i % 2 );++$i;?>
								<dl class='mz1'>
									<dt class='item_int png'>
									   <a><?php echo $arra['cname']; ?></a>
									</dt>
									
									<dd>
                                  

										<?php if(isset($arra['child'])){ if(is_array($arra['child']) || $arra['child'] instanceof \think\Collection || $arra['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $arra['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arrb): $mod = ($i % 2 );++$i;?>
										
										
										<!-- <a href='http://search.jumei.com/?filter=0-11-1&search=%E6%B4%81%E9%9D%A2&from=all_null_index_top_nav_cosmetics&lo=3481&mat=30573'><?php echo $arrb['cname']; ?></a> -->
										<a href='<?php echo url('classs/index',array('id'=>$arrb['id'])); ?>'><?php echo $arrb['cname']; ?></a>
										<?php endforeach; endif; else: echo "" ;endif; }?>
									</dd>
								</dl>
								<?php endforeach; endif; else: echo "" ;endif; ?>

					        </div>
				        </div>
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
<!-- 广告-->
	<div class='site_body'>
		<div class='site_switch' id='site_switch'>
			<div class='sc_container'>
				<ul>
					<li>
						<div id="banners">
							<div class="content">

								<ul class="banner">
									<?php if(is_array($fdata) || $fdata instanceof \think\Collection || $fdata instanceof \think\Paginator): $i = 0; $__LIST__ = $fdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fdat): $mod = ($i % 2 );++$i;?>
									<li class='img1' style="background:url('/static/upload/lunbo/<?php echo $fdat['img']; ?>') 50% 0px no-repeat">
										<a href="javascript:void(0);" >
										
											
										</a>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									
								</ul>
								<a href="javascript:void(0);" class="btn prev"></a>
								<a href="javascript:void(0);" class="btn next"></a>
								<ul class="number">
									<li>
										<a href="javascript:void(0);"></a>
									</li>
									<li>
										<a href="javascript:void(0);"></a>
									</li>
									<li>
										<a href="javascript:void(0);"></a>
									</li>
									<li>
										<a href="javascript:void(0);"></a>
									</li>
									<li>
										<a href="javascript:void(0);"></a>
									</li>
									<li>
										<a href="javascript:void(0);"></a>
									</li>
								</ul>
							</div>
						</div> 
						<!-- <a href=''></a> -->
					</li>
				</ul>
			</div>
		</div>
		
	</div>
<!-- 今日疯抢图片 -->
	<div class='home_top_tab' id='home_top_tab'>
		<ul class='tab_menu clearfix'>
			<li class='current'><a href='' class='check'>今日疯抢</a><b></b></li>
			<li class='current1'><a href='' class='check'>明日预告</a></li>
			<div class='clear'></div>
		</ul>
		<div class='tab_wrapper'>
			<div class='tab_content'>
				<div class='tab_box'>
					<div class='home_top_ad'>
						<div class='home_ad_list clearfix'>
							<?php if(is_array($adata) || $adata instanceof \think\Collection || $adata instanceof \think\Paginator): $i = 0; $__LIST__ = $adata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adat): $mod = ($i % 2 );++$i;?>

							<a href=''><img src='/static/upload/advert/<?php echo $adat['img']; ?>'></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							
						</div>
					</div>
				</div>
				<div class='tab_box1'>
					<div class='home_top_ad'>
						<div class='home_ad_list clearfix'>
							<?php if(is_array($advert) || $advert instanceof \think\Collection || $advert instanceof \think\Paginator): $i = 0; $__LIST__ = $advert;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advert): $mod = ($i % 2 );++$i;?>
							<a href=''><img src='/static/upload/advert/<?php echo $advert['img']; ?>'></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='tab_img'></div>

	</div>
<!-- 每日必看-->
     <div id='m805423' class="module_row module_row_805423 MOD_ID_251421 has-log-mod">
     	<div class="mod_row MCUBE_MOD_ID_251421 J_mod_row_show">
     		<div class="cewebrity_dress_module floor-con">
     			<h2 class='floor_item_title floor_must_see' id='mustsee'></h2>
     			<div class="lazyData cewebrity_dress_module_content">
     				<div class="cewebrity_dress_left_part fl">
     					<!-- <div class="cewebrity_dress_left_part_item cewebrity_dress_left_part_item_0 fl cube-acm-node has-log-mod front">
     						<a href='' class='cewebrity_dress_left_item J_dynamic_imagebox cube-acm-node has-log-mod'>
     							<img src='img/171024_29798j3g8c8440lfijga1l187i05f_302x604.jpg'>
     							<a href='javascript:;' class="addcar cewebrity_dress_left_part_item_title text-hide">加入购物车</a>
     						    
     						</a>
     					</div> -->
     					<div class="cewebrity_dress_left_part_item cewebrity_dress_left_part_item_0 fl cube-acm-node has-log-mod front">
					        <a href='' class='cewebrity_dress_left_item J_dynamic_imagebox cube-acm-node has-log-mod'>
					            <img src='/static/index/img/171024_29798j3g8c8440lfijga1l187i05f_302x604.jpg'>
					            <a href='javascript:;' class="addcar cewebrity_dress_left_part_item_title text-hide">加入购物车</a>
					        </a>
					    </div>
     					<div class="cewebrity_dress_left_part_item cewebrity_dress_left_part_item_1 fl cube-acm-node has-log-mod front">
					        <a href='' class='cewebrity_dress_left_item J_dynamic_imagebox cube-acm-node has-log-mod'>
					            <img src='/static/index/img/171017_1igdbca6f79ekale7849jd3f3ki2k_302x604.jpg'>
					            <a href='javascript:;' class="addcar cewebrity_dress_left_part_item_title text-hide">加入购物车</a>
					        </a>
					    </div>
     					<div class="cewebrity_dress_left_part_item cewebrity_dress_left_part_item_2 fl cube-acm-node has-log-mod front">
					        <a href='' class='cewebrity_dress_left_item J_dynamic_imagebox cube-acm-node has-log-mod'>
					            <img src='/static/index/img/171021_0gdf57llcbjl7gjaia7ej94108d17_302x604.jpg'>
					            <a href='javascript:;' class="addcar cewebrity_dress_left_part_item_title text-hide">加入购物车</a>
					        </a>
					    </div>
     					<div class="cewebrity_dress_left_part_item cewebrity_dress_left_part_item_3 fl cube-acm-node has-log-mod front">
					        <a href='' class='cewebrity_dress_left_item J_dynamic_imagebox cube-acm-node has-log-mod'>
					            <img src='/static/index/img/171016_0626l9j5jkigjb519bb9b6b45ijgi_302x604.jpg'>
					            <a href='javascript:;' class="addcar cewebrity_dress_left_part_item_title text-hide">加入购物车</a>
					        </a>
					    </div>
     					<div class="cewebrity_dress_left_part_item cewebrity_dress_left_part_item_4 fl cube-acm-node has-log-mod front">
					        <a href='' class='cewebrity_dress_left_item J_dynamic_imagebox cube-acm-node has-log-mod'>
					            <img src='/static/index/img/171025_2ebfkk8aid66f1eal2kc483h49335_302x604.jpg'>
					            <a href='javascript:;' class="addcar cewebrity_dress_left_part_item_title text-hide">加入购物车</a>
					        </a>
					    </div>
     					

     				</div>
     			</div>
     		</div>
     	</div>
     </div>
   <!--  <div class="m-sidebar">
        <div class="cart">
            <i id="end"></i>
            <span>购物车</span>
            <span id="pnum">(0)</span>
        </div>
    </div>
    <div id="msg">已成功加入购物车！</div> -->
    <!-- <div id="car">
        <div id="dnum">0</div>
    </div> -->
<!-- 热点预告-->
    <div class='layout_1090 today_later_main'>
    	<div class='today_deal_tit'>
     		<h2 class='floor_head2' id='today_deals'></h2>
     		<p class='today_deals_tip'>每日十点上新</p>
     	</div>
    	<div class='ecope_tab today_later_content' id='today_later_tab'>
    		<div class='tab_wrapper'>
    			<div class='tab_content today_tab_wrapper' id='today_tab_wrapper'>
    				<div action=""  class='tab_boxl' id='today_deal_end '>
    					<?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shp): $mod = ($i % 2 );++$i;?>
    					<div class='today_tab_content today1'>
    						<a href="<?php echo url('Shop/index',array('id'=>$shp['id'])); ?>" class='today_tab_link'>
    							<img class='all_cart_img' name="img" src='/static/upload/shop/<?php echo $shp['simg']; ?>'>
    							<!-- <span class='today_rank_top today_rank_top_1'></span> -->
    						</a>
                          
    						<a href='' class='global_tip tip1'>
    							<span>海外直采</span>
    							<span>海外价格</span>
    							<span>闪电发货</span>
    						</a>
    						<div class='deals_tags'>
    							<span class='tags_list tags_haitao'>海淘</span>
    						</div>
    						<div class='products_detail'>
    							<div class='products_have_time'>
    								<span class='today_end_time'>
    									<span class='icon'>距特卖结束</span>
    									<span class='today_time' id='todaytime'></span>
    								</span>
    							</div>
    							<a href='' name="contact"class='product_short_title'>
    								<em>【官方授权】</em>
    								<?php echo $shp['contact']; ?>						
    							</a>
    							<div class='product_price'>
    								<div class='goto_cart_wrap all_cart_wrap'>
    									<a href='javascript:;' class='redian goto_btn goto_cart all_cart'>加入购物车

                                            <form  action="" method="post" class='forms'>
                                               <input type="hidden" name="id"  value="<?php echo $shp['id']; ?>">
                                               <input type="hidden" id="number" name="num" value="1" class="buy_number fl" >
                                            </form>
                                         </a>
    								</div>
    								<span class='now_price'name="price"><em>¥</em><?php echo $shp['price']; ?></span>
    							</div>

    							<div class='global_sure_tag'>
    								<span class='g_tag'><img src='/static/index/img/029_big.jpg'></span>
    								<span class='wish_like yahei fr'><em><?php echo $shp['sales']; ?></em>人已经购买</span>
    							</div>
    						</div>
    					</div>
    					<?php endforeach; endif; else: echo "" ;endif; ?>
    					

    				</div>
    			</div>
    		</div>
    	</div>
    </div>

<!-- 口碑热议-->
     <div class='layout_1090 today_new_deal'>
     	<div class='today_deal_tit'>
     		<h2 class='floor' id='today_deals'></h2>
     		<p class='today_deals_tip'>每日十点上新</p>
     	</div>
     	<div id="pros">
     		<?php if(is_array($hop) || $hop instanceof \think\Collection || $hop instanceof \think\Paginator): $i = 0; $__LIST__ = $hop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?>
	        <div class="pro">
	            <div class="pro-img"><img src="/static/upload/shop/<?php echo $shop['simg']; ?>" /></div>
	            <div class="pro-price">¥<?php echo $shop['price']; ?></div>
	            <div class="pro-title"><?php echo $shop['contact']; ?></div>

	            <div id="btn-car" class="redian btn-car"><a href="javascript:;">加入购物车
	            	<form  action="" method="post" class='forms'>
                       <input type="hidden" name="id"  value="<?php echo $shop['id']; ?>">
                       <input type="hidden" id="number" name="num" value="1" class="buy_number fl" >
                    </form>
                <form  action="" method="post" class='form'>
                   <input type="hidden" name="id"  value="<?php echo $shop['id']; ?>">
                </form></a></div>
	        </div>
	        <?php endforeach; endif; else: echo "" ;endif; ?>
	       
	        <div class="clear"></div>
	    </div>
<!-- 今日上新单品-->	    
     	<div class='today_deal_tit'>
     		<h2 class='floor_head' id='today_deals'></h2>
     		<p class='today_deals_tip'>每日十点上新</p>
     	</div>
     	<div class='today_new_productlist'>
     		<ul class='today_new_ul clearfix' id='today_new_ul'>
     			<?php if(is_array($rhop) || $rhop instanceof \think\Collection || $rhop instanceof \think\Paginator): $i = 0; $__LIST__ = $rhop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rhp): $mod = ($i % 2 );++$i;?>
     			<li class='newdeal_box'>
     				<div class='img_box img_box1'>
     					<a href="<?php echo url('Shop/index',array('id'=>$rhp['id'])); ?>" class='img_box_href'>
     						<img src='/static/upload/shop/<?php echo $rhp['simg']; ?>' class='img_w1000 all_cart_img'>
     					    <div class='commit_new new1'>
     					    	<div class="commit_new_box commit_new_global">海外直采 海外价格 闪电发货</div>
     					    </div>
     					</a>
     					<div class='add_cart_box box1 all_cart_wrap'>
     						<a href='javascript:;' class='redian add_cart all_cart addcar'>加入购物车
                            <form  action="" method="post" class='forms'>
		                       <input type="hidden" name="id"  value="<?php echo $rhp['id']; ?>">
		                       <input type="hidden" id="number" name="num" value="1" class="buy_number fl" >
		                    </form>
     						</a>
     					</div>
     					<div class='deals_tags'>
     						<span class='tags_list tags_haitao'></span>
     					</div>
     					
     				</div>
     				<a href=''>
     					<div class='today_new_detail'>
     						<p class='title'>
     							<span class="pink">【官方授权】</span><?php echo mb_substr($rhp['contact'],0,30,'utf-8'); ?>
     						</p>
     						<div class='intro_box'>
     							<div class="price_box">
     								<em>¥</em><span class="pnum"><?php echo $rhp['price']; ?></span>
     							</div>
     							<div class='numtimer_box'>
     								<div class='today_time'></div>
     							    <div class='num_box'>销量：<span class='buy_num'>64</span>|</div>
     							</div>
     						</div>
     					</div>
     				</a>
     			</li>
     			<?php endforeach; endif; else: echo "" ;endif; ?>
     			
     			
     			<div class='clear'></div>
     		</ul>
     		<div class='clear'></div>
     	</div>
     	<div class='clear'></div>
     	
     </div>
<!-- 品牌团-->
     <div class='layout_1090' id='brands_head'>
     	<div class='cosmetics-floor brands-floor' id='cosmetics-floor'>
     		<h2 class='floor_head1 '>
     			<a href='class.php' class='floor-view-more'>查看更多>></a>
     		</h2>
     		<div class='bf-content clearfix'>
     			<div class='fl'>
     				<a href=''>
     					<img src='/static/index/img/21619_258_425_001-web.jpg'>
     				</a>
     			</div>
     			<div class='fr'>
     				<div class='bf-ul-content'>
     					<li>
     						<a href=''>
     							<img src='/static/index/img/170250_380_205_002-web.jpg'>
     							<div class='bf-item-info'>
     								<p class="tit">花印品牌团</p>
     								<p class="subtit">花印年货节专场</p>
     								<p class="sale">满<em>199</em>减<em>80</em></p>
     								<p class='today_time'></p>
     							</div>
     						</a>
     					</li>
     					<li>
     						<a href=''>
     							<img src='/static/index/img/170248_380_205_002-web.jpg'>
     							<div class='bf-item-info'>
     								<p class="tit">花印品牌团</p>
     								<p class="subtit">花印年货节专场</p>
     								<p class="sale">满<em>99</em>减<em>20</em></p>
     								<p class='today_time'></p>
     							</div>
     						</a>
     					</li>
     					<li>
     						<a href=''>
     							<img src='/static/index/img/170242_380_205_002-web.jpg'>
     							<div class='bf-item-info'>
     								<p class="tit">花印品牌团</p>
     								<p class="subtit">花印年货节专场</p>
     								<p class="sale">满<em>129</em>减<em>30</em></p>
     								<p class='today_time'></p>
     							</div>
     						</a>
     					</li>
     					<li>
     						<a href=''>
     							<img src='/static/index/img/170240_380_205_002-web.jpg'>
     							<div class='bf-item-info'>
     								<p class="tit">花印品牌团</p>
     								<p class="subtit">花印年货节专场</p>
     								<p class="sale">满<em>199</em>减<em>50</em></p>
     								<p class='today_time'></p>
     							</div>
     						</a>
     					</li>
     				</div>
     			</div>
     		</div>
     	</div>
     </div>
<!-- 左侧飘窗-->
    <div id='home_nav_bar' class='home_nav_bar home_nav_bar_action'>
    	<div class='home_nav_border'>
    		<div class='jumei_idx'>聚美<br>首页</div>
    		<ul class='home_nav_list'>
    			<li class='nav_mustsee'>
    				<a href='javascript:;' class='act'><span>每日必看</span></a>
    			</li>
    			<li class='nav_today_deals'>
    				<a href='javascript:;' ><span>上新单品</span></a>
    			</li>
    			<!-- 添加类act -->
    			<li class='nav_cosmetics_floor'>
    				<a href='javascript:;'><span>品牌团</span></a>
    			</li>
    		</ul>
    	</div>
    </div>
<!-- 右侧固定-->
    <div class='ibar'>
    	<div class='ibar_main_panel'>
    		<ul class='ibar_mp_center'>
    			<li class='mpbtn_login'>
    				<a href=''><s></s>登录</a>

    			</li>
    			<li class='mpbtn_cart'>
    				<a href='javascript:;'>
    					<s id='end'></s>
    					<span class='text'>购物车</span>
    					<span class='cart_num tot' id='pnum'><em></em><span>
    					
    				</a>
    			</li>
    			<div id="msg">已成功加入购物车！</div>

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
    				<a href='javascript:;' id='btn_gotop' class='btn_gotop'><s></s>返回顶部</a>
    				<div class='mp_tooltip'>
    					返回顶部
    					<s class='icon_arrow_right_black'></s>
    				</div>
    			</li>
    			
    		</ul>
    	</div>
    	<div class='ibar_login_box  status_logout'>
    		<div class='avatar_box' style="    margin: 10px auto 10px;overflow: hidden;">
                
                <?php if(is_array($udata) || $udata instanceof \think\Collection || $udata instanceof \think\Paginator): $i = 0; $__LIST__ = $udata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; if($udata): if($dat['img']): ?>
	     			<p class='avatar_imgbox'>
	                    <img src='/static/upload/user/<?php echo $dat['img']; ?>' style="width:70px;height:70px;">
	                </p>
	                    <?php else: ?>  
	                 <a href='' class='img'><img src='/static/index/img/284241596-64-15173983821.jpg' >
	                 	<div class="clear"></div>
	                 </a> 
     			
     				<?php endif; else: ?>
     			<p class='avatar_imgbox'>
	                   <a href='' class='img' ><img src='/static/index/img/284241596-64-15173983821.jpg'  ></a> 
	                </p>  
	                 
             	 <?php endif; if(session('username')): ?>
                <ul class="user_info" style="color:#333;line-height:24px;">
                   <p><a href='<?php echo url('Login/index'); ?>' style="color:#333;">用户名：<?php echo \think\Session::get('username'); ?></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <span class='tpl-header-list-user-ico'><a href=''>级别：普通会员</a></span>
                    </a></p> 
                </ul>
                <?php else: ?>
                
                   <p>你好！请&nbsp;<a href='<?php echo url('Login/index'); ?>'>登录</a>&nbsp;|&nbsp;<a href='<?php echo url('Resig/index'); ?>'>注册</a></p>
                <?php endif; ?>
    		</div>
    		<div class="login_btnbox">
    			<a href='<?php echo url('Person/index'); ?>' class='login_order'>我的订单</a>
    			<a href='<?php echo url('Person/collect'); ?>' class='login_favorite'>我的收藏</a>
    			
    		</div>
    		<s class='icon_arrow_white'></s>
    		<a href='javascript:;' class='ibar_closebtn'  title='关闭'></a>
    	</div>
    	<div class="ibar_sub_panel">
    		<a href="javascript:;" class="ibar_closebtn" title="关闭"></a>

    		
    		
    		
    		<div class="ibar_plugin ibar_cart_content" id='iBarCart'>
    			<div class="ibar_plugin_title">
    				<span class="ibar_plugin_name">购物车

    					<span class='today_end_time'style="color:#000;font-size:12px;">
                            <span class='icon'style="margin-right:0px;">距特卖结束</span>
                            <span class='today_time' id='todaytime'style="background:none;padding-left:0px;"></span>
                        </span>
    			   </span>
    			</div>
    			<div class="ibar_plugin_content">
    				<div class="ibar_cart_group_container">
    					<div class="ibar_cart_group ibar_cart_product">

    						<div class="ibar_cart_group_header clearfix">
	    						<span class="ibar_cart_group_title">聚美优品</span>
	    					</div>
	    					<ul class="ibar_cart_group_items" id="xiaogouwuche">

                            </ul>
    					</div>
    					
    				</div>
    				<div class="ibar_cart_handler  ibar_cart_handler_fixed" style="display:block;top:auto">
    					<div class="ibar_cart_handler_header clearfix">
    						
							<span class="ibar_cart_handler_header_left ">共 <span class="ibar_cart_total_quantity ibar_pink tot"><em></em></span>件商品</span><span class="ibar_cart_total_price ibar_pink sum">￥<em></em></span>

						</div>
    					<a class="ibar_cart_go_btn" href="<?php echo url('Cart/index'); ?>" >去购物车结算</a>
    				</div>
    			</div>
    		</div> 
    
    		<!-- <div class="ibar_cart_group_container ibar_cart_empty" style="top:50px;"><p class="ibar_cart_loading_text">正在为您努力地加载数据！</p> -->
    		<!-- </div>	 -->
    		
    	</div>
    </div>        

   
<!-- 广告-->    
    <div class="fl_wrap_default">
     	<div class="fl_open_wrap" >
     		<div class="fl_open_wrap_cntr" id="float_100_open" style="left: 0%;"></div>
     	    <div class="clear"></div>
     	</div>
     	<div class="fl_pop_wrap"  id="float_100_link">
     		<div class="fl_pop_wrap_cntr">
     			<div class="fl_pop_wrap_cntr_bg"></div>
     			<div class="fl_pop_box">
     				<div class="fl_pop_pic">
     					<img src="/static/index/img/7b42cb90ab5b39fbe4eb46b41daad362.png">
     					<img src="/static/index/img/t01ef6900c131c047eb.jpg">
     					<img src="/static/index/img/7b42cb90ab5b39fbe4eb46b41daad362.png">
     				</div>
     				<div class="fl_pop_cnt">
     					<div class="fl_pop_cnt_bg"></div>
     					<div class="fl_pop_qrcode">
     						<div class="fl_pop_hint">扫描二维码下载</div>
     						
     					</div>
     				</div>
     				<a href="javascript:;" class="fl_wrap_close" title="关闭" id="float_100_close">×</a>
     			</div>
     		</div>
     	</div>
     	<div class="clear"></div>
    </div>
    <div tabindex="-1" style="position: fixed; outline: 0px; left:35%; top: 40%; z-index: 1026;display:none;" class="ui-popup ui-popup-show ui-popup-focus" role="dialog" id="motai">
        <div i="dialog" class="ui-dialog">
            <div class="ui-dialog-arrow-a">
            </div>
            <div class="ui-dialog-arrow-b">
            </div>
            <table class="ui-dialog-grid">
                <tbody>
                    <tr>
                        <td i="header" class="ui-dialog-header" style="display: none;">
                            <button i="close" class="ui-dialog-close" title="cancel">×</button>
                            <div i="title" class="ui-dialog-title" id="title:artAlert">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td i="body" class="ui-dialog-body">
                            <div i="content" class="ui-dialog-content" id="content:artAlert" style="width: 360px;">
                                <div class="bi-alert success">
                                    <div class="bi-alert-bd">
                                        <p class="mod-message">
                                            <span  id="centa"style="color: #00c3f5;">已成功加入购物车</span>
                                        </p>
                                        <p>登录后可以看购物车商品哦~</p>
                                        <a class="mod-link" href="<?php echo url('Login/index'); ?>">去购物车 &gt;</a>
                                    </div>
                                    <a class="bi-alert-close" href="javascript:;"style="font-size:20px">
                                    ×
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td i="footer" class="ui-dialog-footer" style="display: none;">
                            <div i="statusbar" class="ui-dialog-statusbar" style="display: none;">
                            </div>
                            <div i="button" class="ui-dialog-button">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src='/static/index/js/index.js'></script>
<script src='/static/index/js/setinterval.js'></script>



<script type="text/javascript" src="/static/index/banner/js/script.js"></script>

<script src="/static/index/js/requestAnimationFrame.js"></script>
<script src="/static/index/js/jquery.fly.min.js"></script>
<script src="/static/index/js/demo1.js"></script>
<script src="/static/index/js/demo.js"></script>
<script src='/static/index/js/jquery.min.js'></script>

<script>



motai=$('#motai');
function setDivCenter(divName){   
       var top = ($(window).height() - $(divName).height())/2;   
       var left = ($(window).width() - $(divName).width())/2;   
       var scrollTop = $(document).scrollTop();   
       var scrollLeft = $(document).scrollLeft();   
       $(divName).css( { position : 'absolute', 'top' : top+ scrollTop-100+'px' , left : left + scrollLeft } ).show();
   } 
$('.redian').click(function(){
    $('#motai').show();
})
$('.bi-alert-close').click(function(){
    $('#motai').hide();
});
function hidetopbg()
{
 document.getElementById('motai').style.display='none';
}
setTimeout("hidetopbg()",10000);

$('.redian').click(function(){
	
    str=$(this).find('.forms').serialize();
    
    $.post("<?php echo url('ajax_carts'); ?>",{str:str},function(data){
    	
        if(data==1){
           
           $.post("<?php echo url('ajax_cart'); ?>",{str:str},function(data){
               $('#xiaogouwuche').html(" ").append(data);
           });
        }
        
    });
});



	$('.item_int').eq(0).attr({'class':'item_int'});
	$('.item_int').eq(1).attr({'class':'item_hufu'});
	$('.item_int').eq(2).attr({'class':'item_caizhuang'});
	$('.item_int').eq(3).attr({'class':'item_xiangfen'});
	$('.item_int').eq(4).attr({'class':'item_nanshi'});
	$('.item_int').eq(5).attr({'class':'item_hot'});
 window.onload = function(){
          var obtn = document.getElementById('btn_gotop');
          
         //获取页面可视区的高度
         var pageH = document.documentElement.clientHeight;
         var timer = null;
         var need2Top = true;//用于当向上回到顶部的时候 需要向下拖动滚轮了


        window.onscroll=function(){
            var osTop = document.documentElement.scrollTop || document.body.scrollTop;
            //console.log(osTop);
            if (osTop >= pageH){
                  obtn.style.display = "block";//显示按钮
            }else {
               obtn.style.display = "none";//隐藏按钮
            }
        
            
            
      
            // if(osTop>=6700 && osTop<=10500){
            //    $('.nav_today_deals a').css({'background-position': '-176px -124px','color':'#fff'});
            //    $('.nav_cosmetics_floor a').css({'color':'#8f8f8f','background':'url("img/pc_new.jpg") #fff no-repeat 0 -186px'});
            // }
            //向上回到顶部的时候 需要向下拖动滚轮
            //? 如何在向上时 禁止滚轮使用
            if(!need2Top){
               clearInterval(timer);
            }
            need2Top = false;
            
        }//end onscrooll

         //bind 点击按钮事件
        obtn.onclick=function(){
            //设置定时间，给回到顶部做一个缓冲运动，show 2 fast
            timer = setInterval(function(){
               
               //获取当前页面滚轮高度 && 设置速度
               var osTop = document.documentElement.scrollTop || document.body.scrollTop;
                  ispeed = Math.floor(-osTop/6);//不为负数时 5/6 除不尽
               //设置当前滚轮高度
               document.documentElement.scrollTop = document.body.scrollTop = osTop+ispeed;//--
               need2Top = true;
               //到达顶部 清空定时器
               if(osTop==0){
                  clearInterval(timer);
               }
            },30);
        }//end onclick    
      }
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