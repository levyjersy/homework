<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
	<link href="__PUBLIC__/css/player.css" type="text/css" rel="Stylesheet" >
 	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.2.min.js" ></script>
    <script type="text/javascript"src="__PUBLIC__/js/player.js" ></script>
    <script type="text/javascript" src="__PUBLIC__/js/index.js"></script>
    <script type="text/javascript">
    	var handleUrl = '<?php echo U("Index/Player/handle",'','');?>';
    	var barrageUrl = '<?php echo U("Index/Player/barrage",'','');?>';
    </script>
</head>
<body>
<div class="biggest">
	<div id="first">
		<div class="zhu">
			<img src="__PUBLIC__/img/0001.png" style="margin-top:12px;float:left">
			<div class="aa">
				<a href="<?php echo U('Index/Index/index');?>">主站</a>
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
		<div class="bd">
			<?php if(!isset($_SESSION['username'])){ ?>
			   <div class="deng">
			   	  <div class="QQ">
			   	  	<a href="###">
			   	  		<img src="__PUBLIC__/img/0002.png" style="margin-top:5px">
			   	  	</a>
			   	  </div>
			   	  <div class="wb">
			   	  	<a href="###">
			   	  		<img src="__PUBLIC__/img/0003.png" style="margin-top:3px">
			   	  	</a>
			   	  </div>    
			   	  <div class="dl">
			   	  	<a href="<?php echo U('Index/Login');?>">
			   	  		<img src="__PUBLIC__/img/0004.png" style="margin-top:5px">
			   	  	</a>
			   	  </div>    

	           </div>
			   <div class="ce">
			    	<a href="<?php echo U('Index/Register');?>">注册</a>
			   </div>
			<?php }else{ ?>
				<div class="user">
					<div>
						<a href="<?php echo U('Index/User/index');?>"><img class="headimg" src="__PUBLIC__/Uploads/<?php echo ($list3); ?>"></a>
						<div id="block">
							<div class="uname">
								<b><?php echo $_SESSION['username'] ;?></b>
								<ul class="member-menu"></ul>
								<div class="member-bottom">
									<a href="<?php echo U('Index/User');?>">进入会员中心</a>
									<a class="logout" href="<?php echo U('Index/Index/logout');?>">退出登录</a>
								</div>
							</div>
						</div>
					</div>
					<a class="upload" href="">投稿</a>
				</div>
			<?php } ?>
		</div>
    </div>
    <div id="second"></div>
	<div id="third">
		<div class="bei">
			<img src="__PUBLIC__/img/0005.png">
		</div>
		<ul class="dh">
		   <li class="ye">
		   	  <a href="test.html">首页</a>	   	  
		   </li>
		   <li class="dong">
		   	  <a href="###">动画</a>
		   	  <ul id="flash" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="fan">
		   	  <a href="###">番剧</a>
		   	  <ul id="every" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="yin">
		   	  <a href="###">音乐</a>
		   	  <ul id="music" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="wu">
		   	  <a href="###">舞蹈</a>
		   	  <ul id="dance" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="xi">
		   	  <a href="###">游戏</a>
		   	  <ul id="game" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="ke">
		   	  <a href="###">科技</a>
		   	  <ul id="science" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="yu">
		   	  <a href="###">娱乐</a>
		   	  <ul id="fun" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="gui">
		   	  <a href="###">鬼畜</a>
		   	  <ul id="chill" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="ying">
		   	  <a href="###">电影</a>
		   	  <ul id="movie" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
		   <li class="shi">
		   	  <a href="###">电视剧</a>
		   	  <ul id="long" class="hidden">
		   	      <li class="f1">
		   	  	       <a href="">
		   	  	 	     <strong>>MAD-AMV</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f2">
		   	  	       <a href="">
		   	  	         <strong>>MMD.3D</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f3">
		   	  	       <a href="">
		   	  	 	     <strong>>原创.配音</strong>
		   	  	       </a>
		   	      </li>
		   	      <li class="f4">
		   	  	       <a href="">
		   	  	 	     <strong>>综合</strong>
		   	  	       </a>
		   	      </li>

		      </ul>
		   </li>
            <button type="button" onclick="" style="position: relative;
left:242px;top:-235px;"><?php echo ($count1); ?></button>
            <button type="button" onclick="" style="position: relative;
left:267px;top:-235px;"><?php echo ($count2); ?></button>
            <button type="button" onclick="" style="position: relative;
left:290px;top:-235px;"><?php echo ($count3); ?></button>
            <button type="button" onclick="" style="position: relative;
left:313px;top:-235px;"><?php echo ($count4); ?></button>
            <button type="button" onclick="" style="position: relative;
left:336px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:359px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:382px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:405px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:430px;top:-235px;">0</button>
            <button type="button" onclick="" style="position: relative;
left:456px;top:-235px;">0</button>
            <div class="pai">
		   	  <a href="###">
		   	  	 <img src="__PUBLIC__/img/0006.png">
		   	  	 <div class="hang">
		   	  	     <span>排行</span>
		   	  	</div>
		   	  </a>
		   </div>
		   <div class="so">
		   	  <form action="http://www.bilibili.com/search">
		   	      <input type="text" name="user" >
                  <input type="submit" value="GO!" >
              </form>       
		   </div>
		</ul>
	</div>
</div>	
<div class="back">
	<div class="title">
	   <div id="forth">
	   	    <div class="heading">
	   	    	<img src="__PUBLIC__/img/0026.png">
	   	    	<div class="mini">
	   	    		<b><?php echo ($data1); ?></b>
	   	    	</div>
	   	    </div>
	    	<div class="intro">
	    		<a href="test.html">主页</a>>
	    		<a href="###">音乐</a>>
	    		<a href="###">翻唱</a>
	    		<div class="time">
	    			<span>2015-02-11 18:50</span>&nbsp;&nbsp;&nbsp;
	    			<img src="__PUBLIC__/img/0028.png">
	    			<span>20.4万</span>&nbsp;&nbsp;
	    			<img src="__PUBLIC__/img/0029.png">
	    			<span>7673</span>&nbsp;&nbsp;
	    			<img src="__PUBLIC__/img/0030.png">
	    			<span>8520</span>&nbsp;&nbsp;
	    			<img src="__PUBLIC__/img/0031.png">
	    			<span>3524</span>
	    		</div>
	    	</div>
	   	    <div id="fav">
	   	    	<a href="###">
	   	    		<img src="__PUBLIC__/img/0032.png">
	   	    	</a>
	   	    </div>
	   </div>
	   <div id="fifth">
	   	 <div class="picture"></div>
	   	 <div class="user">
	   	 	 <a id="name" href="###">天气米雪</a>
	   	 	 <br>
	   	 	 <span>哦哟哟</span>
	   	 </div>
	   	 <div class="care">
	   	 	 <a href="###">
	   	 		 <img src="__PUBLIC__/img/0027.png">
	   	 	 </a>
	   	 </div>
	   </div>
	</div>
	<div class="box">
	   <div id="b1">
	   	 <b><</b>
	   </div>
	   <div id="b2">下载手机客户端</div>
	   <div id="b3">
	   	 <b>></b>
	   </div>
	</div>
	<div class="player">
		<iframe src="<?php echo ($data3); ?>" allowtransparency="true" allowfullscreen="true" scrolling="no" border="0" frameborder="0" style="width:683px;height:440px;"></iframe>
	</div>
	<div class="remark">
		<div class="fi">
		    <div class="bf">
		    	<img src="__PUBLIC__/img/0034.png">
		    </div>
		    <div class="sc">
		    	<img src="__PUBLIC__/img/0035.png">
		    </div>
		    <div class="dm">
		    	<img src="__PUBLIC__/img/0036.png">
		    </div>
		    <div class="sd">
		    	<img src="__PUBLIC__/img/0037.png">
		    </div>
		    <div class="math">
		    	188<br>
		    	0<br>
		    	0<br>
		    </div>
		</div>
		<div class="se">
			<div class="wei">
				<img src="__PUBLIC__/img/0038.png">
			</div>
			<div class="bi">
				<img src="__PUBLIC__/img/0039.png">
			</div>
			<div class="gao">
				<img src="__PUBLIC__/img/0040.png">
			</div>
		</div>
		<div class="thi">
			<div class="audi">
				<img src="__PUBLIC__/img/0044.png">
				&nbsp;&nbsp;&nbsp;1501
			</div>
			<div class="coin">
				<div class="tou">
					<a href="">
						<img src="__PUBLIC__/img/0041.png">
					</a>
				</div>
				<div class="set">
					<a href="">
						<img src="__PUBLIC__/img/0042.png">
					</a>
				</div>
			</div>
			<div class="lishi">
				<img src="__PUBLIC__/img/0043.png">
			</div>
		</div>
		<div class="fo">
		    <div id="jian" onmouseover="a1(this)" onmouseout="b1(this)">时间</div>
		    <div id="lun" onmouseover="a2(this)" onmouseout="b2(this)">评论</div>
		    <div id="qi" onmouseover="a3(this)" onmouseout="b3(this)">发送日期</div> 
		</div>
		<div id="main2">
			<?php if(is_array($barrage)): foreach($barrage as $key=>$vo): ?><div id="barrage">
					<span class="content"><?php echo ($vo["content"]); ?></span>
					<span class="sendtime"><?php echo ($vo["sendtime"]); ?></span>
				</div><?php endforeach; endif; ?>
		</div>
	</div>
	<div class="control">
		<div class="yangshi">
			<img src="__PUBLIC__/img/0045.png">
		</div>
		<div class="yanse">
			<img src="__PUBLIC__/img/0046.png">
		</div>
		<div class="send">
			<input type="text" id="users">
			<input type="submit" value="发送>" id="sending">
		</div>
	</div>
	<div class="share">
		<div class="sharing">
		    <div class="s1">
		    		<img src="__PUBLIC__/img/0047.png">
		    </div>
		    <div class="s2">
		    	<a href="">
		    		<img src="__PUBLIC__/img/0048.png">
		    	</a>
		    </div>
		    <div class="s3">
		    	<a href="">
		    		<img src="__PUBLIC__/img/0049.png">
		    	</a>
		    </div>
		    <div class="s4">
		    	<a href="">
		    		<img src="__PUBLIC__/img/0050.png">
		    	</a>
		    </div>
		    <div class="s5">
		    	<a href="">
		    		<img src="__PUBLIC__/img/0051.png">
		    	</a>
		    </div>
		</div>
		<div class="collect">
			<a href="">
		    	<img src="__PUBLIC__/img/0052.png">
		    </a>
		</div>
		<div class="bp">
			<a href="">
		    	<img src="__PUBLIC__/img/0053.png">
		    	<div class="more">
		    		<span>用手机看</span>
		    	</div>	
		    </a>
		</div>
		<div class="mark">
			<img src="__PUBLIC__/img/0054.png">
			<div class="B">
			    <img src="__PUBLIC__/img/0056.png">
			</div>
			<div class="zan">
			    <img src="__PUBLIC__/img/0055.png">
			</div>
		</div>
	</div>
	<div class="tag">
	    <div class="t1">
	    	<a href=""><?php echo ($data2); ?></a>
	    </div>
	</div>
	<div class="t-intro">
		 <?php echo ($data4); ?>
	</div>
	<div class="conf">
		<div id="strong">
		    <strong id="strong">评论</strong>
		</div>
		<div id="check">
		    <input type="checkbox" id="confirm">
		    <img src="__PUBLIC__/img/0057.png">
		</div>	
	</div>
	<div id="resu">
		<a onclick="onc(this)">
			<img src="__PUBLIC__/img/0058.png">
		</a>
	</div>
	<div id="hid">
		<?php if(isset($_SESSION['username'])){ ?>
		<img class="circle" src="__PUBLIC__/Uploads/<?php echo ($list2); ?>">
		<div class="remark1">
			<input type="text" id="words1" placeholder="
			在这里输入评论">
			<input type="hidden" id="pid" value="<?php echo $_GET['id']; ?>">
			<input type="submit" value="发表评论" id="remarkable1">
			<div id="hide1">
				X&nbsp;&nbsp;<b>评论字数必须在4到1000个之间</b>
			</div>	
		</div>
		<?php }else{ ?>
		<img src="__PUBLIC__/img/0063.png">
		<div class="remark1">
			<input type="text" id="words2" placeholder="请先登录">
			<input type="submit" value="发表评论" id="remarkable2">
			<div id="hide2">
				！&nbsp;&nbsp;<b>请先登录</b>
			</div>	
		</div>
		<?php } ?>
		<div class="emotion">
			<a href="">
			   <img src="__PUBLIC__/img/0064.png">
		    </a>
		</div>
		<div class="edit">
			<div id="e1">默认排序</div>
			<div id="e2">按赞同数</div>
			<div id="e3">按回复数</div>
			<div class="page">
				<?php echo ($page); ?>
			</div>
		</div>
		<div id="main">
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="rv">
					<div class="pic1">
						<img src="<?php echo ($v["image"]); ?>">
					</div>
					<div class="floor">#<?php echo ($v["id"]); ?></div>
					<div class="username">
						<a href="" id="usersname"><?php echo ($v["username"]); ?></a>
					</div>
					<div class="say"><?php echo ($v["content"]); ?></div>
					<div class="bt">
						<?php echo ($v["creat_time"]); ?>
						<div class="move">
							<span id="click">回复</span>
					    </div>
					</div>
				</div><?php endforeach; endif; ?>
		</div>
	</div>
	<div class="last">
		<img src="__PUBLIC__/img/0024.png">
	</div>
</div>
</body>	
</html>