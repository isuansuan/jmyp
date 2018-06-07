<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"C:\AppServ\www\jmyp\public/../application/index\view\cart\index.html";i:1524468789;s:54:"C:\AppServ\www\jmyp\application\index\view\layout.html";i:1524539667;}*/ ?>
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
	<title>购物车</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	
    <link rel="stylesheet" href="/static/index/css/carts.css">
	<script src='/static/index/js/jquery.min.js'></script>
    <script src='/static/index/js/jquerysession.js'></script>
	
</head>
<body style="background:#fff;">
	
	<div class="cart_header_box">
		<div class="cart_header clearfix">
			<div class="logo_box">
				<div class="logo">
					<a href='<?php echo url('Index/index'); ?>'><img src='/static/index/img/cart_logo.jpg'></a>
				</div>
			</div>
			<div class="order_path order_path_1"></div>
		    <div class="clear"></div>
		</div>

	</div>
    
    
    
    <?php if(session('shop')): ?>
        <form action="<?php echo url('Js/index'); ?>" method="post" id="forms">
            <section  class="cartMain container">
                <div class="group_show">
                    <div class="cartMain_hd">
                        <ul class="order_lists cartTop">
                            <!--所有商品全选-->
                            <li class="list_chk cart_group_header">
                                
                                <input type="checkbox"  class="whole_check">
                                <label for="all"></label>
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
                            
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
                         
                            <ul class="order_lists">
                                <li class="cart_item_desc list_chk ">
                                    
                                    <input type="checkbox" id="<?php echo $dat['id']; ?>" value="<?php echo $dat['id']; ?>" name=''class="son_check">
                                    
                                 
                                    <label for="<?php echo $dat['id']; ?>" class='cart_item_selector'></label>
                                    <div class="cart_item_desc_wrapper">
                                         <input type="hidden"  value="<?php echo $dat['id']; ?>" name='' class="shopid">
                                          <input type="hidden" name="" value="" class="sums">
                                        <a href='' class='cart_item_pic' name='simg'>
                                            <img src='/static/upload/shop/<?php echo $dat['simg']; ?>'>
                                        </a>
                                        <a class='cart_item_link' href='' name='contact'><?php echo $dat['contact']; ?></a>
                                        <a class='cart_item_link' name="stock"style="color:red;font-size:14px;"href=''>库存<?php echo $dat['stock']; ?></a>
                                        <p class="sku_info">
                                           容量：<span class="cart_item_capacity">120g+130ml+100ml+50g</span>   
                                        </p>
                                    </div>
                                </li>
                                <li class="cart_item_price list_price ">
                                    <p class="price" name="price">￥<?php echo $dat['price']; ?></p>  
                                    <p class="market_price ">￥265.00</p>
                                </li>
                                <li class="cart_item_num list_amount ">
                                    <div class="amount_box">
                                        <a href="javascript:;" class="reduce reSty">-</a>
                                        <input type="text" value="<?php echo $dat['num']; ?>"  class="sum">
                                       
                                        
                                        <a href="javascript:;" class="plus">+</a>
                                        
                                    </div>
                                    
                                </li>
                                <li class="cart_item_total list_sum ">
                                    
                                    <!-- <div class="cart_item_total">  -->
                                        <p class="sum_price" name='sprice'>￥<?php echo $dat['price']; ?></p>  
                                         
                                    <!-- </div>  -->
                                </li>
                                <li class="cart_item_option list_op ">
                                    <div class="cart_item_option"> 
                                        <a class="icon_small delete_item png shanchu delBtn"  href="javascript:;" title="删除">
                                        
                                    </a>
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
                        <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                        <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                        <div class="calBtn">
                            <a id="jiesuan" href="javascript:;" >结算</a>
                            <!-- <a href="javascript:;">
                                <input type="submit" class="sub" value="去">结算
                            </a> -->
                        </div>
                       <!--  <input type="hidden" name="id" value="<?php echo $dat['id']; ?>"> -->
                        <!-- <input type='submit' class='submit-btn' value='结算'> -->
                    </div>
                    <li class="list_chk cart_group_header">

                            <!--所有商品全选-->
                        <input type="checkbox" id="all" class="whole_check">
                        <!-- <input type="hidden"  value="<?php echo $dat['id']; ?>" name='' class="shopid1"> -->
                        <label for="all"></label>
                        <h2>  全选  </h2>
                        <a class="go_back_shopping" href="<?php echo url('index/index'); ?>">继续购物</a>
                        <span class="seperate_line">|</span>
                        <a class="clear_cart_all" href="<?php echo url('clear'); ?>">清空选中商品</a>
                    </li>
                   
                    
                </div>
            </section>
        </form>
    
    <section class="model_bg">
	    <section class="my_model">
	        <p class="title">友情提示<span class="closeModel">×</span></p>
	        <p>您确认要删除该宝贝吗？</p>
	        <div class="opBtn">
                <a href="javascript:;" class="dialog-sure">
                    <form action="" method="post" id="for">
                        <input type="hidden"  value="<?php echo $dat['id']; ?>" name='id' class="shid">
                        
                    </form>
                    确定</a>
                    <a href="javascript:;" class="dialog-close">取消</a>
            </div>
	    </section>
	</section>
   <?php else: ?>
    <div id="group_show"> 
        <div class="content_header clearfix">  </div>  
        <div class="cart_empty clearfix"> 
            <img class="cart_empty_logo" src="http://s0.jmstatic.com/assets/images/jumei/cart_v2/empty_icon.jpg" alt=""> 
            <div class="cart_empty_right"> 
                <h2>您的购物车中没有商品，请先去挑选心爱的商品吧！</h2> 
                <p class="cart_empty_backtip"> 您可以 <a class="btn" href="<?php echo url('Index/index'); ?>">  返回首页  </a> 挑选喜欢的商品</p> 
                </div> 
             </div>  
             <div class="content_footer clearfix">  </div>   
    </div>
    <?php endif; ?>
    <div style="background:#fff; margin:50px  auto;">
        <div class="recommend_box" >
            <div class="nav_tips">  
                <a href="javascript:;" class="JS_recommend_nav buy active">购买的还买了  <i class="right_border"></i>  
                </a>  
                <a href="javascript:;" class="JS_recommend_nav today">今日备受欢迎  <i class="right_border"></i>  
                </a>  
                <a href="javascript:;" class="JS_recommend_nav see">最近查看过  
                </a>  
            </div>
            <div>
                <ul class="clearfix JS_recommend_cont ul1"> 
                    <?php if(is_array($fdata) || $fdata instanceof \think\Collection || $fdata instanceof \think\Paginator): $i = 0; $__LIST__ = $fdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fdat): $mod = ($i % 2 );++$i;?> 
                        <li class="list"> 
                            <div> 
                                <div>
                                    <a href=""><img src="/static/upload/shop/<?php echo $fdat['simg']; ?>" style="width:160px; height:160px"></a>
                                </div>
                                <div class="tips_info_box"> 
                                    <a href="" class="tips_info"> 
                                        <span class="discount">6.8折/</span>  <?php echo $fdat['contact']; ?> 
                                    </a> 
                                </div> 
                                <div class="price_grey">  
                                    <span class="price">¥<?php echo $fdat['price']; ?></span> 
                                    <span class="grey">¥235.00</span>
                                </div> 
                                <div>
                                    <a href="javascript:;" class="cart_btn JS_add_cart_btn" >加入购物车</a></div> 
                            </div> 
                        </li> 
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    <li class="clear"></li>
                </ul>
                <ul class="clearfix JS_recommend_cont ul2">
                    <?php if(is_array($adata) || $adata instanceof \think\Collection || $adata instanceof \think\Paginator): $i = 0; $__LIST__ = $adata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adat): $mod = ($i % 2 );++$i;?>  
                    <li class="list"> 
                        <div> 
                            <div>
                                <a href=""><img src="/static/upload/shop/<?php echo $adat['simg']; ?>"></a>
                            </div>
                            <div class="tips_info_box"> 
                                <a href="" class="tips_info"> 
                                    <span class="discount">6.8折/</span>  <?php echo $adat['contact']; ?> 
                                </a> 
                            </div> 
                            <div class="price_grey">  
                                <span class="price">¥<?php echo $adat['price']; ?></span> 
                                <span class="grey">¥235.00</span>
                            </div> 
                            <div>
                                <a href="javascript:;" class="cart_btn JS_add_cart_btn" >加入购物车</a></div> 
                        </div> 
                    </li>  
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="clear"></li>
                </ul>
                <ul class="clearfix JS_recommend_cont ul3">  
                    <li class="list"> 
                        <div> 
                            <div>
                                <a href=""><img src="/static/index/img/4120460_160_160.jpg"></a>
                            </div>
                            <div class="tips_info_box"> 
                                <a href="" class="tips_info"> 
                                    <span class="discount">6.8折/</span>  中国•一叶子天才水养透润面膜礼盒（雏菊亮颜天才面膜25ml*10+山茶花补水天才面膜25ml*10+橄榄芽弹滑天才面膜25ml*10） 
                                </a> 
                            </div> 
                            <div class="price_grey">  
                                <span class="price">¥159.0</span> 
                                <span class="grey">¥235.00</span>
                            </div> 
                            <div>
                                <a href="javascript:;" class="cart_btn JS_add_cart_btn" >加入购物车</a></div> 
                        </div> 
                    </li>  
                <li class="clear"></li>
                </ul>
            </div>
        </div>
    </div>
</body>

<!-- <script src="/static/index/js/carts.js"></script> -->
<script src='/static/index/js/index.js'></script>

<script src='/static/index/js/setinterval.js'></script>
<script>

    $('.shanchu').click(function(){
        id=$(this).find('.shid').val();

        // str=$(this).find('#for').serialize();
        
        $.post("<?php echo url('ajax_del'); ?>",{id:id},function(data){
            
        })
       
        

    })



$('.whole_check').click(function(){
    $('.cart_item_selector').click();
});
$('.cart_item_selector').click(function(){

    $(this).parent('.cart_item_desc').find('.shopid').attr('name','id[]');

    
    $(this).parent('.cart_item_desc').find('.sums').attr('name','num[]');
    a=$(this).parent('.cart_item_desc').next().next('.list_amount').find('.sum').val();
    
    $(this).parent('.cart_item_desc').find('.sums').attr('value',a);
    // $(this).parent().parent().parent().parent().parent().next('.bar-wrapper').find('.shopid1').attr('name','id[]');
    
    
});

 $('#jiesuan').click(function(){
    
    $('#forms').submit();
 }); 
	


/**
 * Created by Administrator on 2017/5/24.
 */

$(function () {

    //全局的checkbox选中和未选中的样式
    var $allCheckbox = $('input[type="checkbox"]'),     //全局的全部checkbox
        $wholeChexbox = $('.whole_check'),
        $cartBox = $('.cartBox'),                       //每个商铺盒子
        $shopCheckbox = $('.shopChoice'),               //每个商铺的checkbox
        $sonCheckBox = $('.son_check');                 //每个商铺下的商品的checkbox
    $allCheckbox.click(function () {
        if ($(this).is(':checked')) {
            $(this).next('label').addClass('mark');
        } else {
            $(this).next('label').removeClass('mark')
        }
    });

    //===============================================全局全选与单个商品的关系================================
    $wholeChexbox.click(function () {
        var $checkboxs = $cartBox.find('input[type="checkbox"]');
        if ($(this).is(':checked')) {
            $checkboxs.prop("checked", true);
            $checkboxs.next('label').addClass('mark');
        } else {
            $checkboxs.prop("checked", false);
            $checkboxs.next('label').removeClass('mark');
        }
        totalMoney();
    });


    $sonCheckBox.each(function () {
        $(this).click(function () {
            if ($(this).is(':checked')) {
                //判断：所有单个商品是否勾选
                var len = $sonCheckBox.length;
                var num = 0;
                $sonCheckBox.each(function () {
                    if ($(this).is(':checked')) {
                        num++;
                    }
                });
                if (num == len) {
                    $wholeChexbox.prop("checked", true);
                    $wholeChexbox.next('label').addClass('mark');
                }
            } else {
                //单个商品取消勾选，全局全选取消勾选
                $wholeChexbox.prop("checked", false);
                $wholeChexbox.next('label').removeClass('mark');
            }
        })
    })

    //=======================================每个店铺checkbox与全选checkbox的关系/每个店铺与其下商品样式的变化===================================================

    //店铺有一个未选中，全局全选按钮取消对勾，若店铺全选中，则全局全选按钮打对勾。
    $shopCheckbox.each(function () {
        $(this).click(function () {
            if ($(this).is(':checked')) {
                //判断：店铺全选中，则全局全选按钮打对勾。
                var len = $shopCheckbox.length;
                var num = 0;
                $shopCheckbox.each(function () {
                    if ($(this).is(':checked')) {
                        num++;
                    }
                });
                if (num == len) {
                    $wholeChexbox.prop("checked", true);
                    $wholeChexbox.next('label').addClass('mark');
                }

                //店铺下的checkbox选中状态
                $(this).parents('.cartBox').find('.son_check').prop("checked", true);
                $(this).parents('.cartBox').find('.son_check').next('label').addClass('mark');
            } else {
                //否则，全局全选按钮取消对勾
                $wholeChexbox.prop("checked", false);
                $wholeChexbox.next('label').removeClass('mark');

                //店铺下的checkbox选中状态
                $(this).parents('.cartBox').find('.son_check').prop("checked", false);
                $(this).parents('.cartBox').find('.son_check').next('label').removeClass('mark');
            }
            totalMoney();
        });
    });


    //========================================每个店铺checkbox与其下商品的checkbox的关系======================================================

    //店铺$sonChecks有一个未选中，店铺全选按钮取消选中，若全都选中，则全选打对勾
    $cartBox.each(function () {
        var $this = $(this);
        var $sonChecks = $this.find('.son_check');
        $sonChecks.each(function () {
            $(this).click(function () {
                if ($(this).is(':checked')) {
                    //判断：如果所有的$sonChecks都选中则店铺全选打对勾！
                    var len = $sonChecks.length;
                    var num = 0;
                    $sonChecks.each(function () {
                        if ($(this).is(':checked')) {
                            num++;
                        }
                    });
                    if (num == len) {
                        $(this).parents('.cartBox').find('.shopChoice').prop("checked", true);
                        $(this).parents('.cartBox').find('.shopChoice').next('label').addClass('mark');
                    }

                } else {
                    //否则，店铺全选取消
                    $(this).parents('.cartBox').find('.shopChoice').prop("checked", false);
                    $(this).parents('.cartBox').find('.shopChoice').next('label').removeClass('mark');
                }
                totalMoney();
            });
        });
    });


    // //=================================================商品数量==============================================
    

    var $plus = $('.plus'),
        $reduce = $('.reduce'),
        $all_sum = $('.sum');
    $plus.click(function () {
        var $inputVal = $(this).prev('input'),
            $count = parseInt($inputVal.val())+1,
            $obj = $(this).parents('.amount_box').find('.reduce'),
            $priceTotalObj = $(this).parents('.order_lists').find('.sum_price'),
            $price = $(this).parents('.order_lists').find('.price').html(),  //单价
            $priceTotal = $count*parseInt($price.substring(1));
            <?php if(session('shop')): ?>
                if($count>=<?php echo $dat['stock']; ?>){
                        $count=<?php echo $dat['stock']; ?>;
                }
            <?php endif; ?>
        $inputVal.val($count);
        $priceTotalObj.html('￥'+$priceTotal);
        if($inputVal.val()>1 && $obj.hasClass('reSty')){
            $obj.removeClass('reSty');
        }
        totalMoney();
    });
    $reduce.click(function () {
        var $inputVal = $(this).next('input'),
            $count = parseInt($inputVal.val())-1,
            $priceTotalObj = $(this).parents('.order_lists').find('.sum_price'),
            $price = $(this).parents('.order_lists').find('.price').html(),  //单价
            $priceTotal = $count*parseInt($price.substring(1));
        if($inputVal.val()>1){
            $inputVal.val($count);
            $priceTotalObj.html('￥'+$priceTotal);
        }
        if($inputVal.val()==1 && !$(this).hasClass('reSty')){
            $(this).addClass('reSty');
        }
        totalMoney();
    });

    $all_sum.keyup(function () {
        var $count = 0,
            $priceTotalObj = $(this).parents('.order_lists').find('.sum_price'),
            $price = $(this).parents('.order_lists').find('.price').html(),  //单价
            $priceTotal = 0;
        if($(this).val()==''){
            $(this).val('1');
        }
        $(this).val($(this).val().replace(/\D|^0/g,''));
        $count = $(this).val();
        $priceTotal = $count*parseInt($price.substring(1));
        $(this).attr('value',$count);
        $priceTotalObj.html('￥'+$priceTotal);
        totalMoney();
    })

    //======================================移除商品========================================

    var $order_lists = null;
    var $order_content = '';
    $('.delBtn').click(function () {
        $order_lists = $(this).parents('.order_lists');
        $order_content = $order_lists.parents('.order_content');
        $('.model_bg').fadeIn(300);
        $('.my_model').fadeIn(300);
    });

    //关闭模态框
    $('.closeModel').click(function () {
        closeM();
    });
    $('.dialog-close').click(function () {
        closeM();
    });
    function closeM() {
        $('.model_bg').fadeOut(300);
        $('.my_model').fadeOut(300);
    }
    //确定按钮，移除商品
    $('.dialog-sure').click(function () {
        $order_lists.remove();
        if($order_content.html().trim() == null || $order_content.html().trim().length == 0){
            $order_content.parents('.cartBox').remove();
        }
        closeM();
        $sonCheckBox = $('.son_check');
        totalMoney();
    })

    //======================================总计==========================================

    function totalMoney() {
        var total_money = 0;
        var total_count = 0;
        var calBtn = $('.calBtn a');
        $sonCheckBox.each(function () {
            if ($(this).is(':checked')) {
                var goods = parseInt($(this).parents('.order_lists').find('.sum_price').html().substring(1));
                var num =  parseInt($(this).parents('.order_lists').find('.sum').val());
                total_money += goods;
                total_count += num;
            }
        });
        $('.total_text').html('￥'+total_money);
        $('.piece_num').html(total_count);

        // console.log(total_money,total_count);

        if(total_money!=0 && total_count!=0){
            if(!calBtn.hasClass('btn_sty')){
                calBtn.addClass('btn_sty');
            }
        }else{
            if(calBtn.hasClass('btn_sty')){
                calBtn.removeClass('btn_sty');
            }
        }
    }
    

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