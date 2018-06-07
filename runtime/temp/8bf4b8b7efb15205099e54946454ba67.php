<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\AppServ\www\jmyp\public/../application/index\view\js\ajax_add.html";i:1524293095;}*/ ?>
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