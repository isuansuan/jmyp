<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\AppServ\www\jmyp\public/../application/index\view\js\ajax_getcity.html";i:1524194656;}*/ ?>
<option value="" selected="selected">请选择市</option>
<?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dc): $mod = ($i % 2 );++$i;?>
<option value="<?php echo $dc['CityID']; ?>"><?php echo $dc['CityName']; ?></option>
<?php endforeach; endif; else: echo "" ;endif; ?>