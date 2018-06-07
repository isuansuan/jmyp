<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\AppServ\www\jmyp\public/../application/admin\view\config\index.html";i:1522380669;s:54:"C:\AppServ\www\jmyp\application\admin\view\layout.html";i:1524573331;}*/ ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台</title>
	<link rel='stylesheet' href='/static/bs/css/bootstrap.min.css'>
	<link rel='stylesheet' href='/static/admin/css/index.css'>
	<script src='/static/bs/js/jquery.min.js'></script>
	<script src='/static/bs/js/bootstrap.js'></script>
	
	<script src="/static/bs/js/holder.min.js"></script>
	
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">聚美优品admin system</a>
				<span class="btn-lg glyphicon glyphicon-list anniu" aria-hidden="true" style="cursor:pointer"></span>
			</div>
			<div class='dark'>
					
				<form action=''>
					<span>
						<input type="text" name="search" value="" class="search rounded id_search" placeholder="Search Menu..." autofocus="">
					</span>
				</form>
			</div>
			<div id='clock'>
		
				<span id='timeid'></span>
				
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo url('Index/clear'); ?>" class='huancun'><span class="glyphicon glyphicon-refresh"></span>清除缓存</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><?php echo \think\Session::get('adminname'); ?></span><span class='tpl-header-list-user-ico'>
							<img src="/static/upload/admin/<?php echo \think\Session::get('adminimg'); ?>"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							
							<li><a href="<?php echo url('login/logout'); ?>" type="button" class="btn  btn-default " aria-label="Left Align">
						    	<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							   退出登录</a>
							</li>
							<li>
							<a href="#" type="button" class="btn  btn-default " aria-label="Left Align">
						    	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							   修改密码</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>	

		</div>
		
		
	</nav>
	<div class='banner-slider'>
		<div class="container-fluid">
			
				
			<div class="row">
				<!-- 左 -->
				<div class="col-md-2" id='group-show'>
					
					<div class="panel">
						<div class="heading" id="User">

							<h2><b></b>用户管理
								<button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h2>
						</div>
						<div class="body">
							<ul class='list-group setting'>
								<li class='list-group-item'><b></b>
									<a href='<?php echo url('User/index'); ?>'>查看用户</a>
									
								</li>
								
								
							</ul>
						</div>
						
					</div>
					<div class="panel">
						<div class="heading" id="Userinfo">

							<h4 class='addr'><b></b>用户信息
								<button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group setting'>
								
								<li class='list-group-item'>
									
									<a href='<?php echo url('Userinfo/index'); ?>' class='fav'><b></b>用户信息</a>
								</li>
								
							</ul>
						</div>
						
					</div>
					
					<div class="panel">
						<div class="heading" id="Colum">

					
							<h4 id="Colum" class='wish'><b></b>分类管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>
									<a href='<?php echo url('Colum/index'); ?>'>查看分类</a>
								</li>
								
							</ul>
						</div>
						
					</div>
					<div class="panel">
						<div class="heading" id="Brand">

					
							<h4 id="Brand" class='list'><b></b>品牌管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>
									<a href='<?php echo url('Brand/index'); ?>'>查看品牌</a>
								</li>
								
							</ul>
						</div>
					</div>
					
					<div class="panel">
						<div class="heading" id="Shop">

							<h4 id="Shop" class='fav'><b></b>商品管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>
									<a href='<?php echo url('Shop/index'); ?>'>查看商品</a>
								</li>
								
							</ul>
						</div>
					</div>
					
					<div class="panel panel-success">
						<div class="heading" id="Comment">

							<h4 id="Comment" class='cards'><b></b>评论管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>
									<a href='<?php echo url('Comment/index'); ?>'>查看评论</a>
								</li>
								
							</ul>
						</div>
					</div>
					
					<div class="panel panel-success">
						<div class="heading" id="Orders">

							<h4 id="Orders" class='addr'><b></b>订单管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group order'>
								<li class='list-group-item'><b></b>
									<a href='<?php echo url('Orders/index'); ?>'>查看订单</a>
								</li>
								
							</ul>
						</div>
						
					</div>
					<div class="panel panel-success">
						<div class="heading" id="Status">

							<h4 id="Status" class='addr'><b></b>状态管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group order'>
								
								<li class='list-group-item'><b></b>
									<a href='<?php echo url('Status/index'); ?>'>订单状态</a>
								</li>
							</ul>
						</div>
						
					</div>
					<div class="panel">
						<div class="heading" id="Favorite">

							<h4 id="Favorite" class='fav'><b></b>收藏管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>
									<a href='<?php echo url('Favorite/index'); ?>'>查看收藏</a>
								</li>
								
							</ul>
						</div>
					</div>
					
					<div class="panel panel-success">
						<div class="heading" id="Advert">

							<h4 id="Advert" class='cards'><b></b>广告管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group advert'>
								<li class='list-group-item '><b></b>
									<a href='<?php echo url('Advert/index'); ?>'>查看广告</a>
								</li>
								
							</ul>
						</div>
						
					</div>
					<div class="panel panel-success">
						<div class="heading" id="Lunbo">

							<h4 id="Lunbo" class='cards'><b></b>轮播管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
						</div>
						<div class="body">
							<ul class='list-group advert'>
								
								<li class='list-group-item'><b></b>
									<a href='<?php echo url('Lunbo/index'); ?>'>查看轮播</a>
								</li>
							</ul>
						</div>
						
					</div>
					<div class="panel panel-success">
						<div class="heading" id="Admin">

							<h4 id="Admin" class='lucky'><b></b>管理员管理
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								</button>
							</h4>
					    </div>
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>

									<a href='<?php echo url('Admin/index'); ?>'>查看管理员</a>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="panel panel-success">
						<div class="heading" id="Config">

							<h4 id="Config" class='lucky'><b></b>系统配置
		                        <button type="button" class="btn jiantou btn-default" aria-label="Left Align">
								    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								</button>
							</h4>
					    </div>
						<div class="body">
							<ul class='list-group'>
								<li class='list-group-item'>

									<a href='<?php echo url('Config/index'); ?>'>查看配置</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				
				<!-- 右 -->
				<div class="col-md-10" id='group-hide'>
					
<link rel="stylesheet" href="/static/public/up/uploadify.css">
<script src='/static/public/up/jquery.uploadify.min.js'></script>
<style>

</style>
	<ol class="breadcrumb">
	  <li><a href="#"class='font'><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
	  <li><a href="#"class='font'>系统管理</a></li>
	  <li class="active"><a href="#"class='font'>配置管理</a></li>
	  <a href="" style="float:right;height:25px;" class="btn font"><span class="glyphicon glyphicon-refresh"></span></a>
	  <span style="clear:both"></span>
	</ol>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<button class="btn btn-success">配置页面</button>
		</div>
		<div class="panel-body">
			<form action="<?php echo url('setConfig'); ?>" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">TITLE</label>
					<div class="col-md-10">
						<input type="text" name="title" value="<?php echo config('sys.title'); ?>" class="form-control" id="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">KEYWORDS</label>

					<div class="col-md-10">
						<input type="text" name="keywords" value="<?php echo config('sys.keywords'); ?>" class="form-control" id="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">DESCRIPTION</label>

					<div class="col-md-10">
						<input type="text" name="descripttion" value="<?php echo config('sys.descripttion'); ?>" class="form-control" id="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">BANQUAN</label>
					<div class="col-md-10">
						<input type="text" name="banquan" value="<?php echo config('sys.banquan'); ?>" class="form-control" id="">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">BEIAN</label>

					<div class="col-md-10">
						<input type="text" name="beian" value="<?php echo config('sys.beian'); ?>" class="form-control" id="">
					</div>
				</div>
				<div class="form-group">
					 <div id="queue" style="border:1px solid #ccc;width:200px;height:100px"></div>
					<label for="" class="col-sm-2 control-label">LOGO</label>
					<div class="col-md-10">
						<input id="file_upload" name="file_upload" type="file" multiple="true" value="" />
						<div id="imgs"><img width="200px" src="" alt=""></div>
       					<input type="hidden" name="logo" value="" id="logo">
       					<input type="hidden" name="oldlogo" value="<?php echo config('sys.logo'); ?>" id="oldlogo">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
					</div>
					<div class="col-md-10">
						<input type="submit" class="btn btn-success" value="提交">
						<input type="reset" class="btn btn-danger" value="重置">
					</div>
				</div>
			</form>
		</div>
	</div>
<script>
	    $(function() {
        $('#file_upload').uploadify({
            'swf'      : '/static/public/up/uploadify.swf',
            'uploader' : "<?php echo url('ajax_upload'); ?>",
            'buttonText':'上传轮播图片',
            'fileObjName':'file',
            onUploadSuccess:function(file,data,response){
              img="<img src='/static/upload/sys/"+data+"' alt='' width='120px' height='80px'>"
              $('#queue').html(img);
              $('#logo').val(data);
            }
        });
    });
</script>




					
				</div>
			</div>

		</div>
	</div>
</body>


<script>
    // $('.anniu').click(function(){
    //      var r;
    // 	if(r=0){
    // 		$('#group-hide').attr({'class':'col-md-10'});
    //         $('#group-show').attr({'class':'col-md-2'});
    // 		$('#group-show').slideToggle('slow');


    	 
    // 	}else{
    // 		$('#group-show').slideToggle('slow');
    // 		$('#group-hide').attr({'class':'col-md-12'});
    		
    // 	}
    	
    // });
    
    $(document).ready(function(){
    	$('.anniu').bind("click",function(){
    		$('#group-show').slideToggle('slow');
    		$('#group-hide').attr({'class':'col-md-12'});
            $('.anniu').bind("click",function(){
	    		$('#group-hide').attr({'class':'col-md-10'});
	    		$('#group-show').attr({'class':'col-md-2'});
	    		$('.anniu').bind("click",function(){
		    		// $('#group-show').slideToggle('slow');
		    		$('#group-hide').attr({'class':'col-md-12'});
		    		$('.anniu').bind("click",function(){
			    		$('#group-hide').attr({'class':'col-md-10'});
			    		$('#group-show').attr({'class':'col-md-2'});
			    	});
		    	});
	    	});
    	});
    });	
   

s=0;
	$('.heading').click(function(){
        if(s%2==0){
	        $('.heading').next().hide();
		     // $(this).next().show();
	        
		    $(this).next().slideDown('slow');
		    $('.heading span').css({'transform':'rotate(90deg)'});

		    $('.heading span').next().css({'transform':'rotate(10deg)'});
        }else{
        	$(this).next().slideUp('slow');

        }
	    s++;

	});

	$('#<?php echo \think\Request::instance()->controller(); ?>').click();
    

	


    $('#<?php echo \think\Request::instance()->controller(); ?>').click();
	function setTime(){
        obj=new Date();
        hour=obj.getHours();
        minute=obj.getMinutes();
        second=obj.getSeconds();
        if(second<10){
            second='0'+second;
        }
        if(minute<10){
            minute='0'+minute;
        }
        if(hour<10){
            hour='0'+hour;
        }
        timestr=hour+':'+minute+':'+second;
        timeidobj=document.getElementById('timeid');
        timeidobj.innerHTML=timestr;

    }
    setTime();
    sobj=setInterval(function(){
    	setTime();
    },1000);



    clockobj=document.getElementById('clock');
    clockobj.onclick=function(){
      	clearInterval(sobj);
    }
</script>
</html>

