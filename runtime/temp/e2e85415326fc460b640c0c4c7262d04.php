<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"C:\AppServ\www\jmyp\public/../application/admin\view\login\index.html";i:1522580688;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录</title>
	<link rel="stylesheet" href="/static/admin/css/login.css">
	
    <link rel='stylesheet' href='/static/bs/css/bootstrap.min.css'>
    <script src='/static/bs/js/bootstrap.js'></script>
    <script src="/static/bs/js/jquery.min.js" type="text/javascript"></script>

</head>

<body>
	<img class='donghua' src='/static/admin/img/20111130130133515.gif'>
 	<div class="login">
 		
 	
    
	
		<h2 class="title">登录聚美后台：</h2>
		<form action="" method='post'>
			<table>
				<tr>
					<td class='user'>用户名：</td>
					<td>
						<input type="text" class='userpass' name="adminname" placeholder='请输入用户名：'>
					</td>
				</tr>
				<tr>
					<td class='pass'>密码：</td>
					<td>
						<input type="password" class='userpass' name="password" placeholder='请输入密码：'>
					</td>
				</tr>
				<tr>
					<td class='pass'>验证码：</td>
					<td>
						<input type="text" class='yzmt' name="code" id="">
						<!-- <img src="verify.php" class='yzm'  onclick="this.src='verify.php?rand='+Math.random()"> -->
						
			            
					</td>
					
					
		
				</tr>
				<tr>
					<td class='pass'></td>
					<td>
						<img class='yzm' src="<?php echo captcha_src(); ?>" alt="captcha"  onclick="this.src='<?php echo captcha_src(); ?>?rand='+Math.random()+''" />
					</td>
				</tr>

				<tr class='bottomtr'>
					<td></td>
					<td>
						<input type='submit' class='loginbtn' value='登录'></input>
						<input type='reset' class='cancelbtn' value='取消'></input>
					</td>
				</tr>
			</table>
		</form>
		<div class="shadow_l"></div>
		<div class="shadow_r"></div>
	</div>
	
</body>
<script>
	$('input').click(function(){

		$(this).css({'box-shadow':'none','border-color':'#b6afd1','border-radius':'26px'});
	});
</script>
</html>