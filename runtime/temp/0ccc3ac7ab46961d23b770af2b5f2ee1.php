<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\AppServ\www\jmyp\public/../application/index\view\classs\index.html";i:1524615578;s:54:"C:\AppServ\www\jmyp\application\index\view\layout.html";i:1524539667;}*/ ?>
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
	<title>商品分类</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	
	<script src='/static/index/js/jquery.min.js'></script>
    

    <script src='/static/bs/js/bootstrap.js'></script>
	
</head>
<body>
	
<!-- logo 搜索 cart -->
	<div class='header'>
		<div class='header_center'>
			<h1 class='logo'>
				<a href='<?php echo url('Index/index'); ?>' id='home'></a>
			</h1>
			<div class='header_searchbox header_out_searchbox'>
				<form action='http://search.jumei.com' method='post'>
					<input type='text' name='search' class='header_search_input' id='header_search_input'>
					<button type='submit' class='header_search_btn'>搜索</button>
				</form>
                

				<div class='search_result_pop_a' id='top_out_search_pop_div'></div>
			    <ul class='hot_word'>
			    	
			    	<?php if(is_array($datad) || $datad instanceof \think\Collection || $datad instanceof \think\Paginator): $i = 0; $__LIST__ = $datad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
			    	<li><a href='<?php echo url('classs/index'); ?>'><?php echo $dat['cname']; ?></a><s class='line'></s></li>

			    	
                    <?php endforeach; endif; else: echo "" ;endif; ?>

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
    <div class="container">
    	<div class="bread_container">
    		<a class="bread_prev" href="javascript:void(0);"></a>
    		<div class="bread_container_con">
    			<div class="search_crumb clearfix">
    				<ul class='clearfix fl bread_ul'>
    					<li class='bread_first_item'>
    						<a href=''>化妆品首页</a>
    					</li>
    					<div class="clear"></div>
    				</ul>
    				<div class="right_search" id='J_bread_search' style="width:158px;height:14px;overflow:hidden;">
    					<form action='' method='post' target='_self'>
    						<span class='search_gt_1'>></span>
    						
    						<?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shp): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; ?>
    						<input type="hidden" name="id" value="<?php echo $shp['id']; ?>">


    						<input type='text' class='bread_search_input' name='search1' id='J_bread_search_input' placeholder='<?php echo $shp['sname']; ?>'>
    						<input type='submit'value class='bread_search_img'>
                            
    					</form>
    				</div>
    				<div class="clear"></div>
    			</div> 	
    		</div>
    		<a class="bread_next" href="javascript:void(0);"></a>
    		<div class="clear"></div>
    	</div>
    	<!-- 内容条件-->
    	<div class="body">
    		<div class="search_result_wrap">
    			<div class="search_info" id="J_search_info"> </div>
    			<div class="search_filter_title">
    				<div class="search_filter_top">
    					<?php if(is_array($colum) || $colum instanceof \think\Collection || $colum instanceof \think\Paginator): $i = 0; $__LIST__ = $colum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$columl): $mod = ($i % 2 );++$i;?>

    					<strong>在<span><?php echo $columl['cname']; ?></span>中筛选</strong>
    					<?php endforeach; endif; else: echo "" ;endif; ?>

    				</div>
    			</div>
    			<div class="search_filter">
    				<div class="filter_con">
    					<div class="filter_tit">品牌:</div>
    					<div class="filter_attrs" id='filter_brand'>
    						<ul>
    							<!-- <?php if(is_array($brandc) || $brandc instanceof \think\Collection || $brandc instanceof \think\Paginator): $i = 0; $__LIST__ = $brandc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
    							<li><a href=''><?php echo $brand['cname']; ?></a></li>
    							<?php endforeach; endif; else: echo "" ;endif; ?> -->
    							<li><a href=''>AHC</a></li>
    							<li><a href=''>Beauty Buff</a></li>

    							<li><a href=''>ROSETTE</a></li>
    							<li><a href=''>悦诗风吟</a></li>
    							<li><a href=''>菲诗小铺</a></li>
    							<li><a href=''>美国EITA MD</a></li>
    							<li><a href=''>伊思</a></li>
    							<li><a href=''>芙丽芳丝</a></li>
    							<li><a href=''>雅诗兰黛</a></li>
    							<li><a href=''>雪花秀</a></li>
    							<li><a href=''>御泥坊</a></li>
    							<li><a href=''>妮维维</a></li>
    							<li><a href=''>倩碧</a></li>
    							<li><a href=''>资生堂</a></li>
    							<li><a href=''>韩束</a></li>
    							<li><a href=''>珀莱雅</a></li>
    							<li><a href=''>姬芮</a></li>
    							<li><a href=''>温碧泉</a></li>
    							<li><a href=''>相宜本草</a></li>
    							<li><a href=''>花印</a></li>
    						</ul>
    						<div class="placeholder_line"></div>

    					</div>
    					<a href="javascript:;" class="btn_fliter_expan" title="展开" style="display: inline;">展开</a>
    					<a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
    				</div>
    				<div class="filter_con">
    					<div class="filter_tit"><span>分类:</span></div>
    					<div class="filter_attrs" id='filter_cat'>
    						<ul>
    							<li class='title'><a href=''>母婴健康</a></li>
    							<li class='title'><a href=''>3C</a></li>
    							<li class='title'><a href=''>化妆品</a></li>
    						</ul>
    						<div class="placeholder_line"></div>
    					</div>
    				</div>
    				<div class="filter_con">
    					<div class="filter_tit">功效:</div>
    					<div class="filter_attrs" id='filter_fun'>
    						<ul>
    							<li><a href=''>保湿</a></li>
    							<li><a href=''>补水</a></li>
    							<li><a href=''>滋润</a></li>
    							<li><a href=''>清洁</a></li>
    							<li><a href=''>修护肌肤</a></li>
    							<li><a href=''>紧致</a></li>
    							<li><a href=''>舒缓</a></li>
    							<li><a href=''>控油</a></li>
    							<li><a href=''>均匀肤色</a></li>
    							<li><a href=''>温和</a></li>
    							<li><a href=''>清爽</a></li>
    							<li><a href=''>修护</a></li>
    							<li><a href=''>净肤</a></li>
    							<li><a href=''>柔肤</a></li>
    							<li><a href=''>嫩肤</a></li>
    							<li><a href=''>美白</a></li>
    							<li><a href=''>持久</a></li>
    							<li><a href=''>收敛毛孔</a></li>
    							<li><a href=''>改善肤质</a></li>
    							<li><a href=''>遮瑕</a></li>
    						</ul>
    						<div class="placeholder_line"></div>

    					</div>
    					<a href="javascript:;" class="btn_fliter_expan" title="展开" style="display: inline;">展开</a>
    					<a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
    				</div>
    				<div class="filter_con">
    					<div class="filter_tit">价格:</div>
    					<div class="filter_attrs" id='filter_price'>
    						<ul>
    							<li><a href=''>0-189元</a></li>
    							<li><a href=''>190-339元</a></li>
    							<li><a href=''>340-679元</a></li>
    							<li><a href=''>680-1199元</a></li>
    							<li><a href=''>1200元以上</a></li>
    							
    						</ul>
    						<div class="placeholder_line"></div>

    					</div>
    					
    					<a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
    				</div>
    			</div>
    			<div class="search_list_wrap">
    				<div class="search_list_head_fiex">
    					<div class="search_list_head sear">
    						<div class="slh_label">排序 ：</div>
    						<ul>
    							<li class='selected'><a class='down'href='javascript:;'>默认</a></li>
    							<li class='pric'><a class='price_sort up' href='javascript:;'>价格</a></li>
    							<li class='sales'><a class='down' href='javascript:;'>销量</a></li>
    							<li><a class='down' href=''>人气</a></li>
    							<li><a class='add_time' href=''>上架时间</a></li>
    							<li><a class='show_check' href=''>只看特卖</a></li>
    							
    						</ul>
    						
    						<div class="head_pagebtn">
    							<a class='dis prev' href=''>上一页</a>
    							<a class='enable next' href=''>下一页</a>
    						</div>
    						<div class="head_pageInfo">
    							<span>1</span>/68页
    						</div>
    						<div class="head_pagecount">
    							共<span>2415</span>个商品
    						</div>
    					</div>
    					<div id="search_list_head1" class='search_list_head'>
    						<div class="slh_label">排序 ：</div>
    						<ul>
    							<li class='selected'><a class='down' href='javascript:;'>默认</a></li>
    							<li class='pric'><a class='price_sort up' href='javascript:;'>价格</a></li>
    							<li class='sales'><a class='down' href='javascript:;'>销量</a></li>
    							<li><a class='down' href=''>人气</a></li>
    							<li><a class='add_time' href=''>上架时间</a></li>
    							<li><a class='show_check' href=''>只看特卖</a></li>
    							
    						</ul>
    						
    						<div class="head_pagebtn">
    							<a class='dis prev' href=''>上一页</a>
    							<a class='enable next' href=''>下一页</a>
    						</div>
    						<div class="head_pageInfo">
    							<span>1</span>/68页
    						</div>
    						<div class="head_pagecount">
    							共<span>2415</span>个商品
    						</div>
    					</div>
    				</div>
    				<div class="products_wrap">
    					<ul class='moren'>
    						<?php if(is_array($shop) || $shop instanceof \think\Collection || $shop instanceof \think\Paginator): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shp): $mod = ($i % 2 );++$i;?>
    						<li class='formall item'>
    							<div class='item_wrap wrap clearfix'>
    								<div class='item_wrap_right deal_item_wrap'>
    									<div class="s_l_pic">
    										<a href='<?php echo url('shop/index',array('id'=>$shp['id'])); ?>'><img src='/static/upload/shop/<?php echo $shp['simg']; ?>'></a>
    									</div>
    									<div class="s_l_name">
    										<a href=''><?php echo mb_substr($shp['contact'],0,20,'utf-8'); ?><em  class='pink'>护肤</em>二重<em  class='pink'>套装</em>平衡水</a>
    									</div>
    									<div class="s_l_view_bg">
    										
    										<div class="search_list_price">
				                                <label>¥</label>
				                                <span><?php echo $shp['price']; ?></span>
				                                <del>¥265</del>
				                                <div class="saleinfos">
				                                	<span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
				                                	<span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
				                                	<span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
				                                </div>
    									    </div>
    									<div class="search_deal_buttom_bg clearfix">
    										<div class="search_pl">月销<?php echo $shp['sales']; ?></div>
    										<div class="rating">
    											<div class="value"></div>
    										</div>
    									</div>
    									<div class="search_list_button">
    										<a href='' class='track_click btn_addcart' title="加入购物车"></a>
    										<a href="javascript:;" class="btn_fav shoucang" pid="1648697" title="收藏商品">
                  <form  action="" method="post" class='forms'>
                   <input type="hidden" name="id"  value="<?php echo $shp['id']; ?>">
                </form>                              
                                            </a>
    									</div>
    									<p class="search_list_tags tags1">
    										<span>保湿</span>
    										<span>补水</span>
    										<span>清洁</span>
    										<span>均匀肤色</span>
    									</p>
    								</div>	
    							</div>
    						</li>
    						<?php endforeach; endif; else: echo "" ;endif; ?>
    					</ul>
    					<ul class='paixu'>
    						<?php if(is_array($dec) || $dec instanceof \think\Collection || $dec instanceof \think\Paginator): $i = 0; $__LIST__ = $dec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$deac): $mod = ($i % 2 );++$i;?>
    						<li class='formall item'>
    							<div class='item_wrap wrap clearfix'>
    								<div class='item_wrap_right deal_item_wrap'>
    									<div class="s_l_pic">
    										<a href="<?php echo url('shop/index',array('id'=>$deac['id'])); ?>"><img src='/static/upload/shop/<?php echo $deac['simg']; ?>'></a>
    									</div>
    									<div class="s_l_name">
    										<a href=''><?php echo mb_substr($deac['contact'],0,20,'utf-8'); ?><em  class='pink'>护肤</em>二重<em  class='pink'>套装</em>平衡水</a>
    									</div>
    									<div class="s_l_view_bg">
    										
    										<div class="search_list_price">
				                                <label>¥</label>
				                                <span><?php echo $deac['price']; ?></span>
				                                <del>¥265</del>
				                                <div class="saleinfos">
				                                	<span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
				                                	<span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
				                                	<span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
				                                </div>
    									    </div>
    									<div class="search_deal_buttom_bg clearfix">
    										<div class="search_pl">月销<?php echo $shp['sales']; ?></div>
    										<div class="rating">
    											<div class="value"></div>
    										</div>
    									</div>
    									<div class="search_list_button">
    										<a href='' class='track_click btn_addcart' title="加入购物车"></a>
    										<a href="javascript:;" class="btn_fav" pid="1648697" title="收藏商品"></a>
    									</div>
    									<p class="search_list_tags tags1">
    										<span>保湿</span>
    										<span>补水</span>
    										<span>清洁</span>
    										<span>均匀肤色</span>
    									</p>
    								</div>	
    							</div>
    						</li>
    						<?php endforeach; endif; else: echo "" ;endif; ?>
    					</ul>
                        <ul class='jiangxu'>
                            <?php if(is_array($asc) || $asc instanceof \think\Collection || $asc instanceof \think\Paginator): $i = 0; $__LIST__ = $asc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$deac): $mod = ($i % 2 );++$i;?>
                            <li class='formall item'>
                                <div class='item_wrap wrap clearfix'>
                                    <div class='item_wrap_right deal_item_wrap'>
                                        <div class="s_l_pic">
                                            <a href="<?php echo url('shop/index',array('id'=>$deac['id'])); ?>"><img src='/static/upload/shop/<?php echo $deac['simg']; ?>'></a>
                                        </div>
                                        <div class="s_l_name">
                                            <a href=''><?php echo mb_substr($deac['contact'],0,20,'utf-8'); ?><em  class='pink'>护肤</em>二重<em  class='pink'>套装</em>平衡水</a>
                                        </div>
                                        <div class="s_l_view_bg">
                                            
                                            <div class="search_list_price">
                                                <label>¥</label>
                                                <span><?php echo $deac['price']; ?></span>
                                                <del>¥265</del>
                                                <div class="saleinfos">
                                                    <span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
                                                    <span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
                                                    <span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
                                                </div>
                                            </div>
                                        <div class="search_deal_buttom_bg clearfix">
                                            <div class="search_pl">月销<?php echo $shp['sales']; ?></div>
                                            <div class="rating">
                                                <div class="value"></div>
                                            </div>
                                        </div>
                                        <div class="search_list_button">
                                            <a href='' class='track_click btn_addcart' title="加入购物车"></a>
                                            <a href="javascript:;" class="btn_fav" pid="1648697" title="收藏商品"></a>
                                        </div>
                                        <p class="search_list_tags tags1">
                                            <span>保湿</span>
                                            <span>补水</span>
                                            <span>清洁</span>
                                            <span>均匀肤色</span>
                                        </p>
                                    </div>  
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class='xiaoliang' style="display:none">
                            <?php if(is_array($sales) || $sales instanceof \think\Collection || $sales instanceof \think\Paginator): $i = 0; $__LIST__ = $sales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shp): $mod = ($i % 2 );++$i;?>
                            <li class='formall item'>
                                <div class='item_wrap wrap clearfix'>
                                    <div class='item_wrap_right deal_item_wrap'>
                                        <div class="s_l_pic">
                                            <a href='<?php echo url('shop/index',array('id'=>$shp['id'])); ?>'><img src='/static/upload/shop/<?php echo $shp['simg']; ?>'></a>
                                        </div>
                                        <div class="s_l_name">
                                            <a href=''><?php echo mb_substr($shp['contact'],0,20,'utf-8'); ?><em  class='pink'>护肤</em>二重<em  class='pink'>套装</em>平衡水</a>
                                        </div>
                                        <div class="s_l_view_bg">
                                            
                                            <div class="search_list_price">
                                                <label>¥</label>
                                                <span><?php echo $shp['price']; ?></span>
                                                <del>¥265</del>
                                                <div class="saleinfos">
                                                    <span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
                                                    <span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
                                                    <span title="悦诗风吟满500元送发酵豆弹润温暖6件套">赠</span>
                                                </div>
                                            </div>
                                        <div class="search_deal_buttom_bg clearfix">
                                            <div class="search_pl">月销<?php echo $shp['sales']; ?></div>
                                            <div class="rating">
                                                <div class="value"></div>
                                            </div>
                                        </div>
                                        <div class="search_list_button">
                                            <a href='' class='track_click btn_addcart' title="加入购物车"></a>
                                            <a href="javascript:;" class="btn_fav" pid="1648697" title="收藏商品"></a>
                                        </div>
                                        <p class="search_list_tags tags1">
                                            <span>保湿</span>
                                            <span>补水</span>
                                            <span>清洁</span>
                                            <span>均匀肤色</span>
                                        </p>
                                    </div>  
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
    					<div class="clear"></div>
    				</div>
    				<div class="page-nav-wrapper"></div>
    			</div>
    		</div>
    		
    	</div>
    	<div class="clear"></div>
    </div>
<!-- 分页-->	
     
<!-- 右侧固定-->
    <div class='ibar'>
    	<div class='ibar_main_panel'>
    		<ul class='ibar_mp_center'>
    			<li class='mpbtn_login'>
    				<a href=''><s></s>登录</a>

    			</li>
    			<li class='mpbtn_cart'>
    				<a href='javascript:;'>
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
    					<img src='img/qrcode.png'>
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
    		<div class='avatar_box'style="    margin: 10px auto 10px;overflow: hidden;">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; if($data): if($dat['img']): ?>
                <p class='avatar_imgbox'style="    margin: 10px auto 10px;overflow: hidden;">
                    <img src='/static/upload/user/<?php echo $dat['img']; ?>'style="width:70px;height:70px;">
                </p>
                <?php else: ?> 
                 <p class='avatar_imgbox'style="    margin: 10px auto 10px;overflow: hidden;"> 
                <a href='' class='img'style="    margin: 10px auto 10px;border-radius: 50%;overflow: hidden;"><img src='/static/index/img/284241596-64-15173983821.jpg'></a>  
                </p>
                <?php endif; else: ?> 
             <p class='avatar_imgbox'style="    margin: 10px auto 10px;overflow: hidden;"> 
                     <a href='' class='img'style="    margin: 10px auto 10px;border-radius: 50%;overflow: hidden;"><img src='/static/index/img/284241596-64-15173983821.jpg'></a> 
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
    			<a href='' class='login_order'>我的订单</a>
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
    					<span class="ibar_cart_timer" style="display: inline;">已超时，请尽快结算</span>
    			   </span>
    			</div>
    			<div class="ibar_plugin_content">
    				<div class="ibar_cart_group_container">
    					<div class="ibar_cart_group ibar_cart_product">
    						<div class="ibar_cart_group_header clearfix">
	    						<span class="ibar_cart_group_title">聚美优品</span>
	    					</div>
	    					<ul class="ibar_cart_group_items">
	    						<li class="ibar_cart_item  clearfix">
	    							<div class="ibar_cart_item_pic">
	    								<a href=''>
	    									<img src="/static/index/img/4101270_100_100.jpg">
	    								</a>
	    							</div>
	    							<div class="ibar_cart_item_desc">
	    								<span class="ibar_cart_item_name_wrapper">
	    									<a class="ibar_cart_item_name" target="_blank" title="中国•一叶子酪梨沁透水润套组（酪梨水漾保湿洁面乳80g+酪梨水漾保湿爽肤水120ml+酪梨水漾保湿乳100ml+嫩刺梨倍润补水面膜25ml*5+保湿洁面乳15g+保湿爽肤水15ml+保湿乳15ml）" href="">中国•一叶子酪梨沁透水润套组（酪…</a>
	    								</span>
	    								<div class="ibar_cart_item_price ibar_pink">
	    									<span class="unit_price">￥195</span>
	    									<span class="unit_plus"> x </span>
	    									<span class="ibar_cart_item_count">1</span>
	    								</div>
	    							</div>
	    							<div class="clear"></div>
	    						</li>	
	    						<li class="ibar_cart_item  clearfix">
	    							<div class="ibar_cart_item_pic">
	    								<a href=''>
	    									<img src="/static/index/img/4101270_100_100.jpg">
	    								</a>
	    							</div>
	    							<div class="ibar_cart_item_desc">
	    								<span class="ibar_cart_item_name_wrapper">
	    									<a class="ibar_cart_item_name" target="_blank" title="中国•一叶子酪梨沁透水润套组（酪梨水漾保湿洁面乳80g+酪梨水漾保湿爽肤水120ml+酪梨水漾保湿乳100ml+嫩刺梨倍润补水面膜25ml*5+保湿洁面乳15g+保湿爽肤水15ml+保湿乳15ml）" href="">中国•一叶子酪梨沁透水润套组（酪…</a>
	    								</span>
	    								<div class="ibar_cart_item_price ibar_pink">
	    									<span class="unit_price">￥195</span>
	    									<span class="unit_plus"> x </span>
	    									<span class="ibar_cart_item_count">1</span>
	    								</div>
	    							</div>
	    							<div class="clear"></div>
	    						</li>
	    						

	    						<li class="clear"></li>
	    					</ul>
    					</div>
    					
    				</div>
    				<div class="ibar_cart_handler  ibar_cart_handler_fixed" style="display:block;top:auto">
    					<div class="ibar_cart_handler_header clearfix">
    						<span class="ibar_cart_handler_header_left">共 <span class="ibar_cart_total_quantity ibar_pink">1</span> 件商品</span><span class="ibar_cart_total_price ibar_pink">￥195</span>
    					</div>
    					<a class="ibar_cart_go_btn" href="<?php echo url('Cart/index'); ?>" target="_blank">去购物车结算</a>
    				</div>
    			</div>
    		</div> 	
    	</div>
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
                                        <p class="mod-message" style="background: #00c3f5;">
                                            <h2  id="centa" >收藏成功</h2>
                                        </p>
                                        
                                        <a class="mod-link" target="_blank" href="https://login.flyme.cn/vCodeLogin?useruri=http%3A%2F%2Fstore.meizu.com%2Fmember%2Flogin.htm%3Fuseruri%3Dhttps%3A%2F%2Fdetail.meizu.com%2Fitem%2Fmeilan_6.html%3Fclick%3Dstore_index_rp_1_2&amp;service=store&amp;sid=unionlogin&amp;autodirct=true">去收藏 &gt;</a>
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
<script>

$('.shoucang').click(function(){
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

$('.shoucang').click(function(){
    str=$(this).find('.forms').serialize();
    
    $.post("<?php echo url('ajax_cart'); ?>",{str:str},function(r){
        if(r==1){
            $('#centa').html('已收藏成功');
        }else{
            $('#centa').html('已收藏,请勿重复添加');

        }
        
        
    });
});
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