<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"C:\AppServ\www\jmyp\public/../application/index\view\js\index.html";i:1524571796;s:54:"C:\AppServ\www\jmyp\application\index\view\layout.html";i:1524539667;}*/ ?>
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
	<title>结算</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	
    <link rel="stylesheet" href="/static/index/css/carts.css">
	<script src='/static/index/js/jquery.min.js'></script>
	
</head>
<body style="background:#fff;">
	
	<div class="cart_header_box">
		<div class="cart_header clearfix">
			<div class="logo_box">
				<div class="logo">
					<a href='<?php echo url('Index/index'); ?>'><img src='/static/index/img/cart_logo.jpg'></a>
				</div>
			</div>
			<div class="order_path order_path_2"></div>
		    <div class="clear"></div>
		</div>

	</div>

	<form action="<?php echo url('Js/order'); ?>"   method="post" >
	    <div class="cart-main cart-thead" style="width:960px;margin:0 auto;">
	                      
	            <div class="floorsBottom cartfloorbottom">
	                <h2 class="title">地址选择</h2>
	                 
	                <div class="address" >
 
                    <?php if(is_array($hdata) || $hdata instanceof \think\Collection || $hdata instanceof \think\Paginator): $i = 0; $__LIST__ = $hdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fdat): $mod = ($i % 2 );++$i;?>
	                    
                       

	                    
	                    <div class="address_list" style="display:inline-block;float:left;margin-right:10px;">
	                    	
	                        <input type="radio"  name='id' class="check" value="<?php echo $fdat['id']; ?>" style="display:none;">
	                       <!--  <input type="hidden"  name='aid' class="check" value="<?php echo $fdat['id']; ?>"> -->
	                        <div class="address_box JS_address_list">
	                            <div class="name" style="width:140px;" name="name"><?php echo $fdat['name']; ?></div>
	                            <div class="detaile" name="addr"><?php echo $fdat['addr']; ?></div>
	                            <div class="number_phone" name="tel"><?php echo $fdat['tel']; ?></div>
	                        </div>
	                        <div class="clear"></div>
	                    </div>
	                    <?php endforeach; endif; else: echo "" ;endif; ?>
	                    <div class="address-operation">
	                        <div class="address_express">
	                            <!-- <div class="fl"><a href="javascript:" class="add"><i class="icon">+</i><span>使用新地址</span></a>
	                            </div> -->
	                            <li class="order-address-checkbox ">
									<div class="order-add-icon btnt">
									  	
									</div>
									<div class="order-address-add-text btnt">添加新地址</div>
	
	                                
								</li>
								  <div class="clear"></div>
	                        </div>
	                        <div class="clear"></div>
	                    </div> 

	                    <div class="clear"></div> 
	                 
	                </div>
	                <div class="clear"></div>
	                <h2 class="title">商品清单</h2>
	            </div>
	            
	    </div>
	   
	    
	   

	    <section  class="cartMain container">
	        <div class="group_show">
	            <div class="cartMain_hd">
	                <ul class="order_lists cartTop">
	                    <!--所有商品全选-->
	                    <li class="list_chk cart_group_header">
	                        
	                        
	                        
	                        <h2>  聚美优品发货  </h2>
	                    </li>
	                    
	                    <li class="list_price">聚美价（元）</li>
	                    <li class="list_amount">数量</li>
	                    <li class="list_sum">小计</li>
	                    <li class="list_op">操作</li>
	                </ul>
	            </div>

	            <div class="cartBox">

	                <div class="order_content">
	                    <?php if(is_array($aar) || $aar instanceof \think\Collection || $aar instanceof \think\Paginator): $i = 0; $__LIST__ = $aar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
	                    <ul class="order_lists">
	                        <li class="cart_item_desc list_chk ">
	                            
	                            <div class="cart_item_desc_wrapper">
	                                <a href='' class='cart_item_pic' name='simg'>
	                                    <img src='/static/upload/shop/<?php echo $dat['simg']; ?>'>
	                                </a>
	                                <input type="hidden"  name='sid[]' class="check" value="<?php echo $dat['id']; ?>">
	                                <a class='cart_item_link' href='' name='contact'><?php echo $dat['contact']; ?></a>
	                                <a class='cart_item_link' name="stock"style="color:red;font-size:14px;"href=''>库存<?php echo $dat['stock']; ?></a>
	                                <!-- <p class="sku_info">
	                                   容量：<span class="cart_item_capacity">120g+130ml+100ml+50g</span>   
	                                </p> -->
	                            </div>
	                        </li>
	                        
	                        
	                        <li class="cart_item_price list_price ">
	                            <p class="price" name="price">￥<?php echo $dat['price']; ?></p>  
	                            <p class="market_price ">￥265.00</p>
	                        </li>
	                        <li class="cart_item_num list_amount ">
	                            <div class="amount_box">
	                                
	                                
	                              <em>  <?php echo $dat['num']; ?></em>
	                            </div>
	                            <input type="hidden"  name='num[]' class="check" value="<?php echo $dat['num']; ?>">
	                        </li>
	                        <li class="cart_item_total list_sum ">
	                            
	                            <!-- <div class="cart_item_total">  -->
	                                <p class="sum_price" name='sprice'>￥<?php echo $dat['price']*$dat['num']; ?></p>  
	                                 
	                            <!-- </div>  -->
	                        </li>
	                        <li class="cart_item_option list_op ">
	                            <div class="cart_item_option"> 
	                                <a class="icon_small delete_item png delBtn"  href="javascript:;" title="删除"></a>
	                                 <!-- <?php echo url('del',array('id'=>$dat['id'])); ?> -->
	                            </div> 
	                        </li>
	                    </ul>
	                   
	                   
	                     <?php endforeach; endif; else: echo "" ;endif; ?>
	                </div>
	            </div>
	            
	            

	        </div>
	        <!--底部-->
		        <div class="bar-wrapper"style="width:960px;margin:0 auto;">
		            <div class="bar-right">
		                <div class="piece">已选商品<strong class="piece_num tot"><em></em></strong>件</div>
		                <div class="totalMoney">共计: <strong class="total_text">￥<?php echo $dat['sum']; ?></strong></div>
		                <div class="calBtn">
		                	<input type="hidden"  name='aid' class="checkIn" value="">
		                	<button id="xiadan"class="btn btn-default" type="submit" style="    display: block;width: 120px;height: 50px;color: #fff;cursor:pointer;font-size: 22px;letter-spacing: 5px;text-decoration: none;line-height: 50px;text-align: center;border-radius: 2px;border:none">下单</button>

		                </div>
		                
		            </div>
		            <li class="list_chk cart_group_header">
		                    <!--所有商品全选-->
		               
		               
		                <a class="go_back_shopping" href="<?php echo url('Cart/index'); ?>" style="font-size:18px;color:#000;font-weight:700">返回购物车</a>
		                
		            </li>

		            
	            </div>
	           
	    </section>
    </form>
     <section class="model_bg zengjia" style="display:none;">
		<div class='my_models'>
    		<h2 style="display:inline-block;">使用新地址</h2>
            <a class="closeModel" style="float:right;font-size:21px;cursor:pointer;">×</a>
			<form class='shipping_address' action='javascript:;' method='post' id="zengjia">
				<div class="input_container">
					<a for="recipient_name" style="padding-right:8px;">
						<span class="spark">*</span>收件人姓名：
					</a>
					<input type="text"  class="t_input recipient_name auth" id="recipient_name" name="name" value="">
					<div class="focus_text"style="display:none;padding-left:105px;">
	    				<p class="default" >请输入姓名</p>
	    			</div>
	    			<div class="invalid"style="display:none;padding-left:105px;">
                        <i></i>
                        <div class="msg">姓名不能为空</div>
                    </div>
                </div>
                <div class="input_container">
                	<a for="select_province"style="padding-right:20px;">
                		<span class="spark">*</span>收货地址：
                	</a>
                	<p style="display:inline-block;">
						
						<select class='select_text_ui' name="pid" id="province">
							<option value=""><a href=''>省/直辖市</a></option>
							
							 
							 
							 <?php if(is_array($sdata) || $sdata instanceof \think\Collection || $sdata instanceof \think\Paginator): $i = 0; $__LIST__ = $sdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
							 
							 <option value="<?php echo $dat['ProvinceID']; ?>" ><?php echo $dat['ProvinceName']; ?></option>
							 <?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						
						<select class='select_text_ui' name="cid" id="city">
							<option   value=""><a href=''>市</a></option>
							
						</select>
						
						<select class='select_text_ui' name="qid" id="district">
							<option value="">区/县</option>
						</select>
					</p>
                </div>
                <div class="input_container">
					<a for="recipient_street"style="padding-right:20px;">
						<span class="spark">*</span>详细地址：
					</a>
					<textarea rows="3" cols="60" class="t_input recipient_street auth"  id="recipient_street" name="addx"style="display:inline-block;width:376px;"></textarea>
					<div class="focus_text"style="display:none;padding-left:105px;">请填写详细的地址</div>
	    			<div class="invalid"style="display:none;padding-left:105px;">
                        <i></i>
                        <div class="msg">详细地址不能为空</div>
                    </div>
				</div>
				<div class="input_container">
					<a for="recipient_hp"style="padding-right:20px;">
						<span class="spark">*</span>手机号码：
					</a>
					<input type="tel"  class="t_input recipient_hp auth" id="recipient_hp" name="tel" value="" maxlength="11">
					<div class="focus_text"style="display:none;padding-left:105px;">请输入11位手机号</div>
	    			<div class="invalid"style="display:none;padding-left:105px;">
                        <i></i>
                        <div class="msg">手机号格式有误</div>
                    </div>
				</div>
                

				<div class="act">
					<input type="button" value="保存收货地址"  id="shipping_address_submit" class="formbutton">
				</div>

			</form>
    	</div>
    </section>   
    
   
	
   
    
</body>

<!-- <script src="/static/index/js/carts.js"></script> -->
<script src='/static/index/js/index.js'></script>

<script src='/static/index/js/setinterval.js'></script>
<script>

$('.btnt').click(function(){
	$('.zengjia').show();

});
// 默认选中


$(".address_list").click(function(){
    $('.address_box').removeClass('active');
    $(this).find('.address_box').addClass('active');
    s=$(this).find('input').val();
    // 判断选中的地址
    $('.check').prop('checked',false);
    $(this).find('.check').prop('checked',true);
    // 未选择地址
     add=$(this).find('.check').val();
    ad=$('.checkIn').val(add);
    // $("#a").val(s);
    
});
$(".address_list").eq(0).click();
 $("#xiadan").click(function(){
    $('#formm').submit();
 });


 tot=0;
   $('.amount_box').each(function(){
   	tot+= parseInt( $(this).find('em').html());
   })
   $('.tot em').html(tot);

   
$('.closeModel').click(function(){
	$('.zengjia').hide();
});
	

 // 市
 	$(document).on('change','#province',function(){
 		pid=$(this).val();
 		$.post('<?php echo url("ajax_getCity"); ?>',{pid:pid},function(data){
 			// $('#city').html(" ").append(data);
 			$('#city').html(data);
 		});
 	});

 	
 	// 区
 	$(document).on('change','#city',function(){
 		cid=$(this).val();
 		// function 返回来得值
 		$.post('<?php echo url("ajax_getDistrict"); ?>',{cid:cid},function(data){
 			// $('#district').html(" ").append(data);
 			$('#district').html(data);
 		});
 	});
$('input[name=tel]').focus(function(){
	tel=$(this).val();
	
    
    $(this).next().show();
    $(this).next().next().hide();
	
	$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});
});

$('input[name=tel]').blur(function(){
	tel=$(this).val();

	if(!tel.match(/^1[34578]\d{9}$/i)){
		// $('this i').show();
        $(this).next().hide();

		$(this).next().next().show();
		$(this).data({'s':0});
		$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
	}else{
		$(this).next().hide();
		$(this).data({'s':1});

		$(this).css({'box-shadow':'none','border-color':'#CFCFCF'});

	}
	
});
$('#recipient_street').focus(function(){
	
	addx=$(this).val();
	addxobj=$(this);
    
    $(this).next().show();
     $(this).next().next().hide();
	
	$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});
});

$('#recipient_street').blur(function(){
	addx=$(this).val();
	addxobj=$(this);
    if(addx.length<1){
		// $('this i').show();
        $(this).next().hide();

		$(this).next().next().show();
		$(this).data({'s':0});
		$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
	}else{

		$(this).next().hide();
		$(this).data({'s':1});
		$(this).css({'box-shadow':'none','border-color':'#CFCFCF'});

	}
});
$('input[name=name]').focus(function(){
	username=$(this).val();
	userobj=$(this);
    
    $(this).next().show();
     $(this).next().next().hide();
	
	$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});
});

$('input[name=name]').blur(function(){
	username=$(this).val();
	userobj=$(this);
    if(username.length<1){
		// $('this i').show();
        $(this).next().hide();

		$(this).next().next().show();
		$(this).data({'s':0});
		$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
	}else{
		$(this).next().hide();
		$(this).data({'s':1});
		$(this).css({'box-shadow':'none','border-color':'#CFCFCF'});

	}
});
$('.formbutton').click(function(){

	$('.auth').blur();
	tot=0;
	$('.auth').each(function(){
		tot+=$(this).data('s');
		
	});
	if(tot>=3){
		str=$('#zengjia').serialize();
			
		$.post('<?php echo url("ajax_add"); ?>',{str:str},function(a){
			if(a.code==1){
				
						window.location.reload();
					}
					// 如果传过来的code值等于2，则打印出控制器中设置的错误值
					if(a.code==2){
						alert(a.info);
					}
				},'json')
		
	}
});
 </script>
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