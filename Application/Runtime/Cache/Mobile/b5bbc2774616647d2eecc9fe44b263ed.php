<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="nzqCMS" content="ThinkPHP CMS">
	<meta name="Viewport" content="whdth=device-width">
	<title>首页 | B2C商城 |ThinkPHP</title>
	<meta http-equiv="keywords" content="关键词">
	<meta name="description" content="描述">
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<link rel="stylesheet" type="text/css" href="/Template/mobile/new/Static/css/public.css" >
	<link rel="stylesheet" type="text/css" href="/Template/mobile/new/Static/css/index.css">
	<!-- 引入js-->
	<script type="text/javascript" src="/Template/mobile/new/Static/js/layer.js" ></script>
	<script type="text/javascript" src="/Template/mobile/new/Static/js/TouchSlide.1.1.source.js"></script>
</head>
<body>
<div class="showpage" id="page">
	<div>
		<!--头部标题-->
		<header id="header" class="header">
			<a href="" class="top_bt"></a>
			<a href="" class="user_btn"></a>
			<span class="logo">购物商城</span>
		</header>
		<!--头部标题结束-->

		<div id="scrollimg" class="scrollimg">
			<div class="bd">
				<ul>
					<li>
						<a href=""  >
							<img src="/Template/mobile/new/Static/images/banner/img1.jpg" title="" width="100%" style=""/>
						</a>
					</li>
					<li>
						<a href=""  >
							<img src="/Template/mobile/new/Static/images/banner/img2.jpg" title="" width="100%" style=""/>
						</a>
					</li>
					<li>
						<a href="">
							<img src="/Template/mobile/new/Static/images/banner/img3.jpg" alt="" width="100%" style="">
						</a>
					</li>
					<li>
						<a href="">
							<img src="/Template/mobile/new/Static/images/banner/img4.jpg" alt="" width="100%" style="">
						</a>
					</li>
				</ul>
			</div>
			<div class="hd">
				<ul></ul>
			</div>
		</div>
		<script type="text/javascript">
			TouchSlide({
				slideCell:"#scrollimg",
				titCell:".hd ul", //导航对象，当自动分页设为true时为“导航对象包裹层” 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
				mainCell:".bd ul",//切换对象包裹层
				effect:"left",
				autoPage:true,//自动分页
				autoPlay:true //自动播放
			});
		</script>



	</div>

</div>
<style>
.ul_test{padding: 0; margin: 0; list-style-type: none;}
.ul_test li{display: inline-block; border: 1px solid #000;}
</style>

</body>
</html>