<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
	<link href="__PUBLIC__/css/test.css" type="text/css" rel="Stylesheet" >
    <script type="text/javascript" src="__PUBLIC__/js/test.js" ></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/index.js"></script>
    <script type="text/javascript">
    function cc () {
    	document.getElementById('se').style.background='rgb(0,161,241)';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0010.png)';
		document.getElementById('a1').innerHTML='DOG DAYS 04';
		document.getElementById('fi').style.background='white';
	}
    function dd () {
     	document.getElementById('se').style.background='white';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0008.png)';
		document.getElementById('a1').innerHTML='和之美05豆腐';
		document.getElementById('fi').style.background='rgb(0,161,241)';
	}
    function ee () {
    	document.getElementById('thi').style.background='rgb(0,161,241)';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0011.png)';
		document.getElementById('a1').innerHTML='周末放映室';
		document.getElementById('fi').style.background='white';
	}
     function ff () {
     	document.getElementById('thi').style.background='white';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0008.png)';
		document.getElementById('a1').innerHTML='和之美05豆腐';
		document.getElementById('fi').style.background='rgb(0,161,241)';
	}
    function gg () {
    	document.getElementById('fo').style.background='rgb(0,161,241)';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0012.png)';
		document.getElementById('a1').innerHTML='喔(^o^)/~';
		document.getElementById('fi').style.background='white';
	}
     function hh () {
     	document.getElementById('fo').style.background='white';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0008.png)';
		document.getElementById('a1').innerHTML='和之美05豆腐';
		document.getElementById('fi').style.background='rgb(0,161,241)';
	}
    function ii	() {
    	document.getElementById('five').style.background='rgb(0,161,241)';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0013.png)';
		document.getElementById('a1').innerHTML='绝对触手养成计划';
		document.getElementById('fi').style.background='white';
	}
     function jj () {
     	document.getElementById('five').style.background='white';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0008.png)';
		document.getElementById('a1').innerHTML='和之美05豆腐';
		document.getElementById('fi').style.background='rgb(0,161,241)';
	}
    function kk () {
    	document.getElementById('six').style.background='rgb(0,161,241)';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0014.png)';
		document.getElementById('a1').innerHTML='星际旅行指南';
		document.getElementById('fi').style.background='white';
	}
    function ll () {
     	document.getElementById('six').style.background='white';
		document.getElementById('js').style.background='url(__PUBLIC__/img/0008.png)';
		document.getElementById('a1').innerHTML='和之美05豆腐';
		document.getElementById('fi').style.background='rgb(0,161,241)';
	}
 	function mm () {
 		document.getElementById('p1').src='__PUBLIC__/img/0059.png';
 	}
    function nn() {
    	document.getElementById('p1').src='__PUBLIC__/img/0015.png';
    }
     function oo () {
     	document.getElementById('p2').src='__PUBLIC__/img/0059.png';
    }
    function pp () {
    	document.getElementById('p2').src='__PUBLIC__/img/0015.png';
    }
     function qq () {
     	document.getElementById('p3').src='__PUBLIC__/img/0059.png';
    }
    function rr () {
    	document.getElementById('p3').src='__PUBLIC__/img/0015.png';
    }
     function ss () {
     	document.getElementById('p4').src='__PUBLIC__/img/0059.png';;
    }
    function tt () {
    	document.getElementById('p4').src='__PUBLIC__/img/0015.png';
    }
     function nb () {
     	document.getElementById('p5').src='__PUBLIC__/img/0059.png';
    }
    function sp () {
    	document.getElementById('p5').src='__PUBLIC__/img/0015.png';
    }
     function ww () {
     	document.getElementById('p6').src='__PUBLIC__/img/0059.png';
    }
    function xx () {
    	document.getElementById('p6').src='__PUBLIC__/img/0015.png';
	}
</script>
</head>
<body>

<div class="biggest">
	<div id="first">
		<div class="zhu">
			<img src="__PUBLIC__/img/0001.png" style="margin-top:12px;float:left">
			<div class="aa">
				<a href="<?php echo U('Index');?>">主站</a>
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
					<a class="upload" href="<?php echo U('Index/User');?>">投稿</a>
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
		   	  <a href="<?php echo U('Index/Index');?>">首页</a>	   	  
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
	<div id="forth">
		<div id="js">
			<div class="le">
				<span id="a1">和之美05豆腐</span>
				<div id="fi" onmouseover="aa(this)" onmouseout="bb(this)"></div>
				<div id="se" onmouseover="cc(this)" onmouseout="dd(this)"></div>
				<div id="thi" onmouseover="ee(this)" onmouseout="ff(this)"></div>
				<div id="fo" onmouseover="gg(this)" onmouseout="hh(this)"></div>
				<div id="five" onmouseover="ii(this)" onmouseout="jj(this)"></div>
				<div id="six" onmouseover="kk(this)" onmouseout="ll(this)"></div>

			</div>		
		</div>

		<div class="duo">
			<div class="uu">
				<a href="">
				     <img src="__PUBLIC__/img/0015.png" id="p1" onmouseover="mm(this)" onmouseout="nn(this)">
			    </a>
			</div>
			<div class="vv">
				<a href="">
				     <img src="__PUBLIC__/img/0015.png" id="p2" onmouseover="oo(this)" onmouseout="pp(this)">
			    </a>
			</div>
			<div class="ww">
				<a href="">
				     <img src="__PUBLIC__/img/0015.png" id="p3" onmouseover="qq(this)" onmouseout="rr(this)">
			    </a>
			</div>
			<div class="xx">
				<a href="">
				     <img src="__PUBLIC__/img/0015.png" id="p4" onmouseover="ss(this)" onmouseout="tt(this)">
			    </a>
			</div>
			<div class="yy">
				<a href="">
				     <img src="__PUBLIC__/img/0015.png" id="p5" onmouseover="nb(this)" onmouseout="sp(this)">
			    </a>
			</div>
			<div class="zz">
				<a href="">
				     <img src="__PUBLIC__/img/0015.png" id="p6" onmouseover="ww(this)" onmouseout="xx(this)">
			    </a>
			</div>

		</div>
		<div class="ll"></div>
        <div class="more1">
			<img src="__PUBLIC__/img/0060.png">
		</div>
		<div class="more2">
			<b>推广</b>
		</div>
		<div class="main">
			<?php if(is_array($id)): foreach($id as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div id="hid1" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid2" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid3" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid4" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0067.png">
		</div>
		<div class="more2">
			<b>动画</b>
		</div>
		<div class="load">
		    <?php if(is_array($animation)): foreach($animation as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/2">查看更多></a>
		</div>
		<div id="hid5" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid6" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid7" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid8" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0068.png">
		</div>
		<div class="more2">
			<b>番剧</b>
		</div>
		<div class="all">
		     <?php if(is_array($series)): foreach($series as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			 <a href="/bilibili/index.php/Index/More/index/id/3">查看更多></a>
		</div>
		<div id="hid9" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid10" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid11" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid12" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0069.png">
		</div>
		<div class="more2">
			<b>音乐</b>
		</div>
		<div class="MUSIC">
		    <?php if(is_array($music)): foreach($music as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/4">查看更多></a>
		</div>
		<div id="hid13" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid14" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid15" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid16" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="more1">
			<img src="__PUBLIC__/img/0070.png">
		</div>
		<div class="more2">
			<b>舞蹈</b>
		</div>
		<div class="DANCE">
		    <?php if(is_array($dance)): foreach($dance as $key=>$vo): ?><div id="main1">
				    <a href=
				   "/bilibili/index.php/Index/Player/index/id/<?php echo ($vo["id"]); ?>">
				    <img src="__PUBLIC__/cover/m_<?php echo ($vo["image"]); ?>">
				    		<?php echo ($vo["title"]); ?>
				   	</a>
			    </div><?php endforeach; endif; ?>
		</div>
		<div class="new-m1">
			<a href="" id="new1">有新动态</a>
		</div>
		<div class="new-p1">
			<a href="" id="news1">最新投稿</a>
		</div>
		<div class="look">
			<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
		</div>
		<div id="hid17" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid18" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid19" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div id="hid20" style="display:none;">
			<img src="__PUBLIC__/img/0062.png">
		</div>
		<div class="b-r">
		    <div class="b-head">
		    	<div>在线：40000   正在观看：40000</div>
		    	<div class="news">
		    		<a href="">
		    			<img src="__PUBLIC__/img/0079.png">
		    		</a>
		    	</div>
		    	<div class="bad">
		    		<a href="">
		    			<img src="__PUBLIC__/img/0080.png">
		    		</a>
		    	</div>
		    </div>
		    <div class="b-i">
		    	<a href="">
		    		<img src="__PUBLIC__/img/0081.png">
		    	</a>
		    </div>
		</div>
		<div class="b-r">
			<b>动画排行</b>
			<div id="whole">全部</div>
			<div id="creative">原创</div>
			<form class="when">
				<select>
                    <option value="volvo">三日</option>
                    <option value="saab">三日</option>
                    <option value="fiat">一周</option>
                </select>
			</form>
			<div class="one">
				<a href="">
				<div class="sign">1</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank21d); ?>"><?php echo ($rank21); ?></a>
				</div>
				</a>
			</div>
			<div class="two">
				<div class="sign">2</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank22d); ?>"><?php echo ($rank22); ?></a>
				</div>
			</div>
			<div class="two" id="three">
				<div class="sign">3</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank23d); ?>"><?php echo ($rank23); ?></a>
				</div>
			</div>
			<div class="more-link">
				<a href="/bilibili/index.php/Index/More/index/id/2">查看更多></a>
			</div>
			<div class="more-i">
				<a href="">
					<img src="__PUBLIC__/img/0083.png">
				</a>
			</div>
		</div>
		<div class="b-r">
			<b>番剧排行</b>
			<div id="whole">全部</div>
			<div id="creative">原创</div>
			<form class="when">
				<select>
                    <option value="volvo">三日</option>
                    <option value="saab">三日</option>
                    <option value="fiat">一周</option>
                </select>
			</form>
			<div class="one">
				<a href="">
				<div class="sign">1</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank31d); ?>"><?php echo ($rank31); ?></a>
				</div>
				</a>
			</div>
			<div class="two">
				<div class="sign">2</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank32d); ?>"><?php echo ($rank32); ?></a>
				</div>
			</div>
			<div class="two" id="three">
				<div class="sign">3</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank33d); ?>"><?php echo ($rank33); ?></a>
				</div>
			</div>
			<div class="more-link">
				<a href="/bilibili/index.php/Index/More/index/id/3">查看更多></a>
			</div>
			<div class="more-i">
				<a href="">
					<img src="__PUBLIC__/img/0083.png">
				</a>
			</div>
		</div>
		<div class="b-r">
			<b>音乐排行</b>
			<div id="whole">全部</div>
			<div id="creative">原创</div>
			<form class="when">
				<select>
                    <option value="volvo">三日</option>
                    <option value="saab">三日</option>
                    <option value="fiat">一周</option>
                </select>
			</form>
			<div class="one">
				<a href="">
				<div class="sign">1</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank41d); ?>"><?php echo ($rank41); ?></a>
				</div>
				</a>
			</div>
			<div class="two">
				<div class="sign">2</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank42d); ?>"><?php echo ($rank42); ?></a>
				</div>
			</div>
			<div class="two" id="three">
				<div class="sign">3</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank43d); ?>"><?php echo ($rank43); ?></a>
				</div>
			</div>
			<div class="more-link">
				<a href="/bilibili/index.php/Index/More/index/id/4">查看更多></a>
			</div>
			<div class="more-i">
				<a href="">
					<img src="__PUBLIC__/img/0083.png">
				</a>
			</div>
		</div>
		<div class="b-r">
			<b>舞蹈排行</b>
			<div id="whole">全部</div>
			<div id="creative">原创</div>
			<form class="when">
				<select>
                    <option value="volvo">三日</option>
                    <option value="saab">三日</option>
                    <option value="fiat">一周</option>
                </select>
			</form>
			<div class="one">
				<a href="">
				<div class="sign">1</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank51d); ?>"><?php echo ($rank51); ?></a>
				</div>
				</a>
			</div>
			<div class="two">
				<div class="sign">2</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank52d); ?>"><?php echo ($rank52); ?></a>
				</div>
			</div>
			<div class="two" id="three">
				<div class="sign">3</div>
				<div class="include">
					<a href="/bilibili/index.php/Index/Player/index/id/<?php echo ($rank53d); ?>"><?php echo ($rank53); ?></a>
				</div>
			</div>
			<div class="more-link">
				<a href="/bilibili/index.php/Index/More/index/id/5">查看更多></a>
			</div>
			<div class="more-i">
				<a href="">
					<img src="__PUBLIC__/img/0083.png">
				</a>
			</div>
		</div>
		
		
	</div>
	<div id="import">
		<div id="div1" onmouseover="z1(this)" onmouseout="z2(this)">
			<a href="">动画</a>
		</div>
		<div id="div2" onmouseover="z3(this)" onmouseout="z4(this)">
			<a href="">番剧</a>
		</div>
		<div id="div3" onmouseover="z5(this)" onmouseout="z6(this)">
			<a href="">音乐</a>
		</div>
		<div id="div4" onmouseover="z7(this)" onmouseout="z8(this)">
			<a href="">舞蹈</a>
		</div>
		<div id="div5" onmouseover="z9(this)" onmouseout="z10(this)">
			<a href="">游戏</a>
		</div>
		<div id="div6" onmouseover="z11(this)" onmouseout="z12(this)">
			<a href="">科技</a>
		</div>
		<div id="div7" onmouseover="z13(this)" onmouseout="z14(this)">
			<a href="">娱乐</a>
		</div>
		<div id="div8" onmouseover="cz15(this)" onmouseout="z16(this)">
			<a href="">鬼畜</a>
		</div>
		<div id="div9" onmouseover="z17(this)" onmouseout="z18(this)">
			<a href="">电影</a>
		</div>
		<div id="div10" onmouseover="z19(this)" onmouseout="z20(this)">
			<a href="">TV剧</a>
		</div>
	</div>
	<div id="fifth">
		<img src="__PUBLIC__/img/0024.png">
	</div>
</div>
</body>
</html>