<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\AppServ\www\jmyp\public/../application/index\view\login\index.html";i:1524551376;}*/ ?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	
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
				<div class='loginBoardWrap'>
					<div class='loginImage'></div>
					<div class="loginBord">
						<div class="loginTit">
							<div class="tosignup">
								还没有聚美账号？<a href="<?php echo url('Resig/index'); ?>">30秒注册</a>
							</div>
							<h1><strong>登录聚美</strong></h1>
						</div>
						<div class="radio_wrapper">
							<span>
								<input name='method' type='radio' id='radio_dynamic' value='dynamic'>
								<label>手机动态密码登录</label>
							</span>
							<span>
								<input name='method' type='radio' id='radio_normal' value='normal' checked>
								<label checked>普通登录</label>
							</span>
						</div>
						<form class='login-user-form' method='post' action=''>
							<div class="textbox_ui user">
								<input type='text' name='username' placeholder='手机/邮箱/用户名' class='username auth'>
								<div class="focus_text">请输入登录名，登录名可能是手机号、邮箱或用户名</div>
								<div class="invalid">
		                            <i></i>
		                            <div class="msg">用户不存在</div>
	                            </div>
							</div>
							<div class="textbox_ui pass">
		                        <input type="password" name='password' placeholder="密码" class="login_password auth" >
		                        <div class="focus_text">请输入密码，密码可能为字母、数字或符号的组合</div>
		                        <div class="invalid">
		                            <i></i>
		                            <div class="msg">密码错误</div>
		                        </div>
		                    </div>
		                    <p>
		                    	<a href=''class='fr'>忘记密码</a>
		                    	<lable>
		                    		<input type='checkbox' class='auto_login' checked>自动登录
		                    	</label>
		                    </p>
		                    <input class="loginbtn submit" type="submit" value="登 录">
						</form>
						<div class="iconAccout">
							<div>你也可以使用以下账号登录</div>
							<p>
								<a href='' class='a1' title='QQ'>QQ</a>
								<a href='' class='a2' title='QQ'>支付宝</a>
								<a href='' class='a3' title='QQ'>微博</a>
								<a href='' class='a4' title='QQ'>360</a>
								<a href='' class='a5' title='QQ'>百度</a>
								<a href='' class='a6' title='QQ'>微信</a>
							</p>
						</div>
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
		if(username.length<1){
			$(this).next().hide();
			// $(this).next().show().html('用户名长度至少8位!');
			$(this).next().next().show();

			$(this).data({'s':0});
			$(this).css({'box-shadow':'0 0 4px 1px rgba(228,36,36,0.6)','border-color':'#E24A4A'});

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

		if(password.length<3){
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
</script>
</html>