<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\AppServ\www\jmyp\public/../application/index\view\resig\index.html";i:1524551488;}*/ ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>resig</title>
	<link rel='stylesheet' href='/static/index/css/index.css'>
	<script src='/static/index/js/jquery.min.js'></script>
</head>
<body style="background:#fff;">
	<div class='lbody'>
		<div class='header_container'>
			<div class='loginlogo'>
				<a href='' class='home'></a>
				<div class='header_logo_box'>
					<a href='' class='top_link lightning'></a>
					<a href='' class='top_link gild'></a>
					<a href='' class='top_link credit'></a>
				</div>
			</div>
		</div>
		<div class='sign'>
			<div class='loginWrap loginWrapVerify'>
				<div class='loginPic'>
					<a href='' class='signup_link'></a>
				    <div class="loginBord l">
				    	<div class="loginTit">
				    		<div class="tosignup">已有账号<a href='<?php echo url('Login/index'); ?>'>在此登录</a></div>
				    	    <h1><strong>用户注册</strong></h1>
				    	</div>
				    	
				    	<form action='javascript:;' class='phone' method='post' id="reg">
				    		<div class='line'>
				    			<div class="textbox_ui error_ui">
				    				<input type='text' class='mobile auth' name='username' id="username" placeholder='用户名'>
					    			<div class="focus_text">
					    				<p class="default">请输入用户名</p>
					    			</div>
					    			<div class="invalid">
		                                <i></i>
		                                <div class="msg">用户名至少5位</div>
		                            </div>
		                            <i class="loading"></i>
				    			</div>
				    			
				    		</div>
				    		<div class='line'>
				    			<div class="textbox_ui error_ui">
				    				<input type='text' class='mobile auth' name='tel' placeholder='手机号'>
					    			<div class="focus_text">请输入11位手机号</div>
					    			<div class="invalid">
		                                <i></i>
		                                <div class="msg">手机号格式有误</div>
		                            </div>
		                            <i class="loading"></i>
				    			</div>
				    			
				    		</div>
				    		<div class="line verityWrap imgVerifyWrap">
				    			<div class="textbox_ui error_ui">
				    				<input type='text' name='code' class='form-control auth' placeholder='验证码'>
					    		    <div class="focus_text">
					    		    	按右图填写，不区分大小写
					    		    </div>
					    		    <div class="invalid">
		                                <i></i>
		                                <div class="msg">验证码有误</div>
		                            </div>
		                            <i class="loading"></i>
				    			</div>

				    			<!-- <span class='change_verify_code'>
				    				<img src="/static/index/verify.php" onclick="this.src='/static/index/verify.php?rand='+Math.random()"><a href='' onclick="this.src='/static/index/verify.php?rand='+Math.random()">换一张</a>
				    			</span> -->
				    			
				    		</div>

                            <div class='line'>
                            	<img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?rand='+Math.random()" alt="captcha" style="width:257px;height:53px"/>

                            	<a href='' onclick="this.src="<?php echo captcha_src(); ?>?rand="+Math.random()">换一张</a>
                            </div>				    		
				    	    <div class="line verityWrap">
				    	    	<div class="textbox_ui sms_verify_wrapper error_ui">
				    	    		<input type='text' class='mobile_verify  auth' placeholder='短信验证码' name='check'>
				    	    		<div class="focus_text">请输入6位短信校验码</div>
				    	    		<div class="invalid">
		                                <i></i>
		                                <div class="msg">请输入有效的短信校验码</div>
		                            </div>
				    	    	</div>
				    	    	<a href="javascript:;" id="getPhoneCode" class="phonecode"><strong>获取短信校验码</strong>
				    	    	</a>
				    	    </div>
				    	    <div class='line'>
				    	    	<div class="textbox_ui error_ui">
				    	    		<input type='password' class='password auth' name="password" placeholder='密码'>
				    	    		<div class="focus_text">
				    	    			<p class="default">6-16个字符，建议使用字母加数字或符号组合</p>
				    	    		</div>
				    	    		<div class="invalid" >
		                                <i></i>
		                                <div class="msg">为了您的账号安全，密码长度只能在 6-16 个字符之间</div>
		                            </div>
				    	    	</div>
				    	    </div>
				    	    <div class='line'>
				    	    	<div class="textbox_ui error_ui">
				    	    		<input type='password' class='password2  auth' name="repassword" placeholder='重复密码'>
				    	    		<div class="focus_text">请再次输入密码</div>
				    	    		<div class="invalid">
		                                <i></i>
		                                <div class="msg">两次密码输入不一致，请重新输入</div>
		                            </div>
				    	    	</div>
				    	    </div>
				    	    <div class="act">
				    	    	<p>
		                           <input type="button" class="submit_btn" value="同意协议并注册"  name="mobileCommit" style="width: 100%;">
		                        </p>
				    	    </div>
				    	</form>
				    	<div class="shadow_l"></div>
				    	<div class="shadow_r"></div>
				    </div>	
				</div>
			</div>
		</div>
	
	   
    </div>
</body>

<script>
	$('input[name=username]').focus(function(){
		username=$(this).val();
		userobj=$(this);
	    
	    $(this).next().show();
	     $(this).next().next().hide();
		
		$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});
	});


	$('input[name=username]').blur(function(){
		username=$(this).val();
		userobj=$(this);

		if(username.length<5){
			$(this).next().hide();
			// $(this).next().show().html('用户名长度至少8位!');
			$(this).next().next().show();

			$(this).data({'s':0});
			$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
		}else{
			str=$('#reg').serialize();
			$.post('<?php echo url("ajax_check"); ?>',{str:str},function(r){

					if(r==0){
						// $(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});

						userobj.next().show().html('用户名已存在');
						// userobj.next().next().show();
						userobj.data({'s':0});
						userobj.css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
					}else{
						userobj.next().hide();
						userobj.data({'s':1});
						// // $(this).css({'box-shadow':'none','border-color':'#A5D4ED'});
						userobj.css({'box-shadow':'none','border-color':'#CFCFCF'});
					}
			});


			// $.ajax({
			// 	'type':'post',
			// 	'url':'ajax_check',
			// 	'data':{username:username},
			// 	'async':false,
			// 	'success':function(r){
			// 		if(r=='0'){
			// 			// $(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});

			// 			userobj.next().show().html('用户名已存在');
			// 			// userobj.next().next().show();
			// 			userobj.data({'s':0});
			// 			userobj.css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
			// 		}else{
			// 			userobj.next().hide();
			// 			userobj.data({'s':1});
			// 			// // $(this).css({'box-shadow':'none','border-color':'#A5D4ED'});
			// 			userobj.css({'box-shadow':'none','border-color':'#CFCFCF'});
			// 		}
			// 	}
			// });
		}
		
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

	$('input[name=code]').focus(function(){
		code=$(this).val();
		codeobj=$(this);
		$(this).next().show();
		$(this).next().next().hide();

		$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});

	});
	$('input[name=code]').blur(function(){
		code=$(this).val();
		// alert(code);
		codeobj=$(this);
		if(code.length!=5){
	        $(this).next().hide();
			
			$(this).next().next().show();

			$(this).data({'s':0});
			$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
		}else{
			code=$(this).val();
		   

			// str=$('#reg').serialize();
			$.post('<?php echo url("ajax_chkcode"); ?>',{code:code},function(r){

					if(r==1){

	                    codeobj.next().hide();

						// codeobj.next().next().show();
						
						codeobj.data({'s':0});
						// codeobj.css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
						codeobj.css({'box-shadow':'none','border-color':'#CFCFCF'});

					}else{
						codeobj.next().hide();
						codeobj.data({'s':1});
						// // $(this).css({'box-shadow':'none','border-color':'#A5D4ED'});
						codeobj.css({'box-shadow':'none','border-color':'#CFCFCF'});
					}
			});
		
		

		}

		   
	});
	// 验证码
	$('input[name=check]').focus(function(){
		check=$(this).val();
		checkobj=$(this);
		$(this).next().show();
		$(this).next().next().hide();

		$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});

	});
	$('input[name=check]').blur(function(){
		check=$(this).val();
		checkobj=$(this);
		if(check.length!=6){
	        $(this).next().hide();
			// $(this).next().show().html('用户名长度至少8位!');
			$(this).next().next().show();

			$(this).data({'s':0});
			$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});
		}else{
			$(this).next().hide();
			$(this).data({'s':1});
			$(this).css({'box-shadow':'none','border-color':'#CFCFCF'});

		}
		   
	});
	// 密码
	$('input[name=repassword]').focus(function(){
		passsword=$('input[name=password]').val();
		repassword=$(this).val();
	    
	    $(this).next().show();
	    $(this).next().next().hide();
		
		$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});
	});



	$('input[name=repassword]').blur(function(){
		passsword=$('input[name=password]').val();
		repassword=$(this).val();

		if(password!=repassword){
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

	$('input[name=password]').focus(function(){
		passsword=$(this).val();
		
	    
	    $(this).next().show();
	    $(this).next().next().hide();
		
		$(this).css({'box-shadow':'0 0 4px 1px #A5D4ED','border-color':'#A5D4ED'});
	});



	$('input[name=password]').blur(function(){
		password=$(this).val();

		if(password.length<6){
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

	$('.submit_btn').click(function(){

		$('.auth').blur();
		tot=0;
		$('.auth').each(function(){
			tot+=$(this).data('s');
		});
		if(tot==6){
			$('form').attr({'action':"<?php echo url("ajax_add"); ?>"}).submit();
		}
	});

</script>
</html>