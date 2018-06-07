<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"C:\AppServ\www\jmyp\public/../application/admin\view\user\index.html";i:1523276601;s:54:"C:\AppServ\www\jmyp\application\admin\view\layout.html";i:1524573331;}*/ ?>

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
					
<script src="/static/public/up/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/static/public/up/uploadify.css">
<div class="breadcrumb">
	
	<li><a href="" class='font'>用户管理</a></li>
	
	<li class="pull-right"><a href="" class='sx'><span class="glyphicon glyphicon-refresh"></span></a></li>
	

</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<button class='btn btn-danger' onclick="delAll()">
			<span class='glyphicon glyphicon-trash'></span>批量删除
		</button>
		<button class="btn btn-primary" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span>添加用户</button>
		<div class="pull-right" style="margin-top:5px;margin-left: 33px;">共有<span id="tot" class='sj'><?php echo $tot; ?></span>条数据</div>
		<form action="" class="form-inline pull-right">
			<input type="text" class="form-control" name="search">
			<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search">搜索</span></button>
		</form> 
	</div>
	<div class="panel-body userIndexMain">
		<table class='table table-hover table-striped userIndexTable'>
			<tr>
				<th><input type="checkbox" name="checkAll" id="checkAll">编号</th>

				<th>用户名</th>
				

				<th>最后一次登录时间</th>
				<th>登录次数</th>
                <th>状态</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i;?>	
			
			<tr id="tr<?php echo $dat['id']; ?>">

				<td><input type="checkbox" name="id" class="check" value="<?php echo $dat['id']; ?>"><?php echo $dat['id']; ?></td>
				<td><?php echo $dat['username']; ?></td>
				

				<td><?php echo $dat['lastlogin']==0?'从未登录':date("Y-m-d H:i:s",$dat['lastlogin']); ?></td>
				<td><?php echo $dat['num']; ?></td>
				<td>
					<?php if($dat['status'] == '0'): ?>
					<a href="javascript:;" class="btn btn-danger" onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)">禁用</a>
					<?php else: ?>
					<a href="javascript:;" class="btn btn-rimary" onclick="status(this,<?php echo $dat['id']; ?>,<?php echo $dat['status']; ?>)">正常</a>
					<?php endif; ?>
				</td>
				
				
				<td><a href='javascript:;' data-toggle="modal" data-target="#edit" class='btn update' onclick='find(<?php echo $dat['id']; ?>)'>修改</a></td>
				
				<!-- <td><a href="javascript:;" class='del btn btn-sm' onclick="del(<?php echo $dat['id']; ?>,this)">删除</a></td> -->
				<td><a href='javascript:;' data-toggle="modal" data-target="#usedel1"  class='del btn btn-sm'onclick='find1(<?php echo $dat['id']; ?>)'>删除</a></td>
				
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		
				
	</div>
    <div class="panel-footer">
    	<?php echo $page; ?>
    </div>
</div>

<!-- 添加 -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="myModalLabel">添加用户</h2>

			</div>
			<div class="modal-body">
				<!-- form禁用 -->
				<form onsubmit="return false" id="addForm">
					<div class="form-group">
						<label for="">用户名称</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="">用户密码</label>
						<input type="password" class="form-control" name="password">
					</div>
					
					
					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="status" id="" value="1" checked>
								正常
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="status" id="" value="0" >
								禁用
							</label>
						</div>
					</div>
					

					<button class='btn btn-info' onclick="add()">提交</button>
	                <button type="reset" class='btn btn-danger' data-dismiss='modal'>重置</button>
				</form>	
			</div>
		</div>
	</div>
</div>
<!-- 修改-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="myModalLabel">修改用户</h2>
			</div>
			<div class="modal-body">
				<form onsubmit="return false" id="editForm">
					
				</form>	
			</div>
		</div>
	</div>
</div>
<!-- 删除 -->
<!-- 删除 -->
<div class="modal fade" id="usedel1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					
					
				</div>
				<div class="modal-body">
					<form onsubmit="return false" id="delForm">
						
						
					</form>
				</div>
				
			</div>
		</div>
</div>
<script>
	// 添加
	function add(){
		// 序列化
		str=$('#addForm').serialize();
        // alert(str);
		$.post('<?php echo url("ajax_add"); ?>',{str:str},function(data){
			if(data.code==0){
                alert(data.info);
			}
			if(data.code==1){
	            $('.table').append(data.info);
				$('.close').click();
				tot=parseInt($('#tot').html());
				$('#tot').html(++tot);
			}
			if(data.code==2){
                  alert(data.info);
			}
		},'json')	
	}
// 删除
	// function del(id,obj){
		
	// 	$.post('<?php echo url("ajax_del"); ?>',{id:id},function(data){
	// 		if(data==1){
	// 			$(obj).parent().parent().hide();
	// 			tot=parseInt($('#tot').html());
	// 			$('#tot').html(--tot);
	// 			$('.close').click();
	// 			// window.location.reload();
	// 		}else{
	// 			alert('删除失败');
	// 		}
	// 	})	
	// }

	  function find1(id){
		$.post('<?php echo url("ajax_find1"); ?>',{id:id},function(data){
			$('#delForm').html(data);
		})

	}
	
 	// 删除
	function del(id){
		str=$('#delForm').serialize();
		$.post('<?php echo url("ajax_del"); ?>',{str:str},function(data){
			if(data==1){
				$('#tr'+id).hide();
				tot=parseInt($('#tot').html());
				$('#tot').html(--tot);			
				$('.close').click();
			}else{
				alert('删除失败');
			}
		});
		
	}


 	// 查找
    function find(id){
    	$.post('<?php echo url("ajax_find"); ?>',{id:id},function(data){
    		$('#editForm').html(data);
    	})
    }
 // 修改
 	function edit(id){
 		// 序列化
		str=$('#editForm').serialize();
 		$.post('<?php echo url("ajax_edit"); ?>',{str:str},function(data){
 			$('#tr'+id).html(data);
 			$('.close').click();
    	})
 	}
 	// 批量选中
 	$('#checkAll').click(function(){
 		$('.check').click();
 	});
 	function delAll(){
 		
        
 		datas=$('.check:checked');
		arr=new Array();
		for(i=0;i<datas.length;i++){
			arr[i]=datas.eq(i).val();
		}
		
		// 转字符串
		str=arr.join(',',arr);
		$.post('<?php echo url("ajax_delAll"); ?>',{str:str},function(data){
			if(arr.length==data){
				for(i=0;i<datas.length;i++){
					$('#tr'+arr[i]).remove();
					tot=parseInt($('#tot').html());
				    $('#tot').html(--tot);
				}
			}
		})
 	}
 	// 状态
 	function status(obj,id,val){
        if(val){
           $.post("<?php echo url('ajax_status'); ?>",{id:id,status:0},function(data){
	           	if(data){
					$(obj).html('禁用');
					$(obj).attr({'class':'btn btn-danger'});
					$(obj).attr({'onclick':'status(this,'+id+',0)'});
				}
           })
        }else{
        	$.post("<?php echo url('ajax_status'); ?>",{id:id,status:1},function(data){
				if(data){
					$(obj).html('正常');
					$(obj).attr({'class':'btn btn-rimary'});
					$(obj).attr({'onclick':'status(this,'+id+',1)'});
				}
		  })
        }
 	}

 	

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

