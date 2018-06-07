<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"C:\AppServ\www\jmyp\thinkphp\tpl\dispatch_jump.tpl";i:1523441238;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>跳转提示</title>
    <style type="text/css">
        
        * {margin:0px;padding:0px;list-style:none;text-decoration:none;}
            body {background:url(/static/admin/img/b1.jpg)}
            .mian {width:1000px;height:600px;background:url(/static/admin/img/back.jpg);margin:3% auto}
            .error_div {width:210px;float:right;margin-right:28%;margin-top:38%;font-family:"微软雅黑"}
            .error_div a {float:left;color:#FFFBF0;width:80px;background:#8A532A;text-align:center;line-height:20px;font-size:15px;border-bottom:3px solid #683F20}
            .error_div a:hover {background:#7B4A26;}
            .info {float:right;line-height:20px;color:#000}
    </style>
</head>
<body>
    <div class="mian "style="position:relative">
        <div style="width:370px;height:200px;position:absolute;top:137px;right:133px;border-radius:50px;background:#FDF8D9">
             <div class="system-message">
             <?php switch ($code) {case 1:?>
                   
                    <p class="success"style="padding:28px 0 10px 51px;font-size:39px;color:#FC0;border-bottom:4px dashed #ccc"><?php echo(strip_tags($msg));?></p>
                    <?php break;case 0:?>
                   
                    <p class="error" style="padding:28px 0 10px 51px;font-size:39px;color:#FC0;border-bottom:4px dashed #ccc"><?php echo(strip_tags($msg));?></p>
                    <?php break;} ?>
            
            <p class="detail"></p>
            <p class="jump" style="padding-top:35px;padding-left:51px;font-size:17px">
                页面自动 <a id="href" href="<?php echo($url);?>" style="color:#0f0">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
            </p>
            </div>    
        </div>
                    
        
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
    

</body>

<script type="text/javascript">
        var InterValObj; //timer变量，控制时间
        var count=5;
        var curCount;
    
        function SetRemainTime() {
           if (curCount == 0) {
               window.clearInterval(InterValObj);//停止计时器
               window.setTimeout("window.location='http://www.smallseashell.com/'",0); 
           }
           else {
               curCount--;
               document.getElementById("redirect_info").innerHTML=(curCount+"秒后返回首页");
           }
        }
    </script>
</html>
