<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<body>
	<link href="__PUBLIC__/css/login.css" type="text/css" rel="Stylesheet" >
 	<script type="text/javascript"src="__PUBLIC__/js/login.js" ></script>
 	<script type="text/javascript">
 		var verifyURL = '<?php echo U("Index/Login/verify",'','');?>';
 	</script>
	<div class="biggest">
		<div id="first">
		  <div class="zhu">
			 <img src="__PUBLIC__/img/0001.png" style="margin-top:12px;float:left">
			  <div class="aa">
				  <a href="test.html">主站</a>
			  </div>
		  </div>
		   <div class="hua">
			  <a href="###">画友</a>
		   </div>
		   <div class="you">
			   <a href="###">游戏中心</a>
		   </div>
		   <div class="zhi">
			  <a href="###">直播</a>
		   </div>
		   <div class="shou">
			 <a href="###">手机端</a>
		   </div>
		</div>
		<div id="second">
			<img src="__PUBLIC__/img/0017.png">
		</div>
		<div id="third">
			<img src="__PUBLIC__/img/0018.png" style="margin-left:183px">
		</div>
		<div id="forth">
		  <div class="ce">
		  	 <img src="__PUBLIC__/img/0019.png">
		  	 <div class="ji">
		  	     <a href="<?php echo U('Index/Register');?>">
		  	     	 <img src="__PUBLIC__/img/0020.png">
		  	     </a>
		  	 </div>
		  </div>
		  <form class="bd" action="<?php echo U('Index/Login/login');?>" method="post" onsubmit="return check()">
		  	   <div class="bz">
		  	   	   <p id="checkphone"></p>
		  	   	   <input type="text" style="margin-bottom: 0" id="zh" placeholder="你的手机号" name="phone" onblur="checkphone()">
		  	   </div>
		  	   <div class="by">
		  	   	   <p id="checkpass"></p>
		  	   	   <input type="password" id="mi" placeholder="密码" name="password" onblur="checkpass()">  
		  	   </div>
		  	   <div class="bx">
		  	   	 <p id="checkcode"></p>
		  	   	 <input type="text" id="yan" placeholder="验证码" name="code" onfocus="display();"> 
		  	   	 <img src="<?php echo U('Index/Login/verify');?>" id="code"/>
		  	   	 <a href="#" onclick="reImg();" class="change">换一张</a>
		  	   </div>
		  	   <div class="bv">
		  	   	  <input type="submit" value="登录" id="deng"/>
		  	   </div>
		  	   <div class="bu">
		  	   <div class="weibo">
		  	   	  <a href="###">
		  	   	  	 <img src="__PUBLIC__/img/0021.png">
		  	   	  </a>
		  	   </div>
		  	   <div class="qq">
		  	   	  <a href="###">
		  	   	  	 <img src="__PUBLIC__/img/0022.png">
		  	   	  </a>
		  	   </div>
		  	   <div class="zc">
		  	   	  <a href="<?php echo U('Index/Register');?>">
		  	   	  	 <img src="__PUBLIC__/img/0023.png">
		  	   	  </a>
		  	   </div>
		  	   </div>
		  </form>
		</div>
		<div id="fifth">
			<img src="__PUBLIC__/img/0024.png">
		</div>
	</div>
</body>
</html>