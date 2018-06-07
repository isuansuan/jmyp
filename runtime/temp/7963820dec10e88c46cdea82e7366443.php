<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"C:\AppServ\www\jmyp\public/../application/index\view\js\ajax_getdistrict.html";i:1524193366;}*/ ?>
<option value="" selected="selected">请选择区</option>
<?php if(is_array($dacqu) || $dacqu instanceof \think\Collection || $dacqu instanceof \think\Paginator): $i = 0; $__LIST__ = $dacqu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qu): $mod = ($i % 2 );++$i;?>
<option value="<?php echo $qu['DistrictID']; ?>"><?php echo $qu['DistrictName']; ?></option>
<?php endforeach; endif; else: echo "" ;endif; ?>