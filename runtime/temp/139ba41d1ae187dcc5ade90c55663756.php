<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\AppServ\www\jmyp\public/../application/index\view\index\ajax_cart.html";i:1524229614;}*/ ?>

 <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>
	<li class="ibar_cart_item  clearfix">
		<div class="ibar_cart_item_pic">
			<a href=''>
				<img src="/static/upload/shop/<?php echo $dat['simg']; ?>">
			</a>
		</div>
		<div class="ibar_cart_item_desc">
			<span class="ibar_cart_item_name_wrapper">
				<a class="ibar_cart_item_name" target="_blank" title="中国•一叶子酪梨沁透水润套组（酪梨水漾保湿洁面乳80g+酪梨水漾保湿爽肤水120ml+酪梨水漾保湿乳100ml+嫩刺梨倍润补水面膜25ml*5+保湿洁面乳15g+保湿爽肤水15ml+保湿乳15ml）" href=""><?php echo $dat['contact']; ?></a>
			</span>
			<div class="ibar_cart_item_price ibar_pink">
				<span class="unit_price">￥<em><?php echo $dat['price']; ?></em></span>
				<span class="unit_plus"> x </span>
				<span class="ibar_cart_item_count"><em><?php echo $dat['num']; ?></em></span>
			</div>
		</div>

		<div class="clear"></div>
	</li>


 <?php endforeach; endif; else: echo "" ;endif; ?>
<li class="clear"></li>
<script>
   tot=0;
   $('.ibar_cart_item_count').each(function(){
   	tot+= parseInt( $(this).find('em').html());
   })
   $('.tot em').html(tot);
   
	sum=0;
	$('.unit_price').each(function(){
		sum+= parseInt( $(this).find('em').html());
		
	})
	
	$('.sum em').html(sum);
</script>