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
<!--搜索框-->
		<div class="fake-search">
			<div class="index_search_mid">
				<span><img src="/Template/mobile/new/Static/images/xin/icosousuo.png" alt=""></span>
				<input type="text" id="search_text" class="search_text" value="请输入您所搜索的商品" />
			</div>
		</div>
<!--搜索框结束-->
		<!--导航按钮-->
		<div class="entry-list">
			<nav>
				<ul>
					<li><a href=""><img src="/Template/mobile/new/Static/images/1440437165699930301.png" alt="">全部分类</a></li>
					<li><a href=""><img src="/Template/mobile/new/Static/images/1440439318451279676.png" alt="">团购</a></li>
					<li><a href=""><img src="/Template/mobile/new/Static/images/1440439353048484531.png" alt="">购物车</a></li>
					<li><a href=""><img src="/Template/mobile/new/Static/images/1440439367001464442.png" alt="">个人中心</a></li>
				</ul>
			</nav>
		</div>
		<!--导航按钮结束-->
		<!--品牌特卖-->
		<div class="floor_images">
			<dl>
				<dt><a href=""><img src="/Public/upload/ad/577925b630271.jpg" alt=""></a></dt>
				<dd>
					<span class="Edge"><a href=""><img src="/Public/upload/ad/img2.jpg" alt=""></a></span>
					<span><a href=""><img src="/Public/upload/ad/img3.jpg" alt=""></a></span>
				</dd>
			</dl>
			<ul>
				<li class="brom"><a href=""><img src="/Public/upload/ad/img5.jpg" alt=""></a></li>
				<li><a href=""><img src="/Public/upload/ad/img4.jpg" alt=""></a></li>
			</ul>
		</div>

		<!--品牌特卖结束-->
		<!--促销商品-->

		<section class="index_floor_lou">
			<div class="floor_body">
				<h2><em></em>限时抢购</h2>
				<div class="scroll_promotion">
					<ul>
						<li>
							<a href=""></a>
							<div class="index_pro">
								<a href="">
									<div class="products_kuang">
										<div class="timerBox">活动还未开始</div>
										<img src="/Public/upload/xsqg/img3.jpeg" alt=""  />
									</div>
									<div class="good_name">金鸡送福</div>
								</a>
								<div class="price">
									<a href="">
										<img src="/Template/mobile/new/Static/images/index_flow.png" alt="">
									</a>
									<span class="price_pro">￥600元</span>
								</div>
							</div>
						</li>
						<li>
							<a href=""></a>
							<div class="index_pro">
								<a href="">
									<div class="products_kuang">
										<div class="timerBox">活动已经结束</div>
										<img src="/Public/upload/xsqg/img1.jpeg" alt=""  />
									</div>
									<div class="good_name">小米旗舰店正品手机平板通用迷你充电宝 移动电源10000毫安大容量</div>
								</a>
								<div class="price">
									<a href="">
										<img src="/Template/mobile/new/Static/images/index_flow.png" alt="">
									</a>
									<span class="price_pro">￥600元</span>
								</div>
							</div>
						</li>
						<li>
							<a href=""></a>
							<div class="index_pro">
								<a href="">
									<div class="products_kuang">
										<div class="timerBox">活动已经结束</div>
										<img src="/Public/upload/xsqg/img2.jpeg" alt=""  />
									</div>
									<div class="good_name">三星 Galaxy A9高配版 (A9100) 精灵黑 全网通4G手机 双卡双待</div>
								</a>
								<div class="price">
									<a href="">
										<img src="/Template/mobile/new/Static/images/index_flow.png" alt="">
									</a>
									<span class="price_pro" >￥600元</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<!--促销商品结束-->

		<div class="floor_images">
			<dl>
				<dt><a href=""><img src="/Public/upload/ad/577925b630271.jpg" alt=""></a></dt>
				<dd>
					<span class="Edge"><a href=""><img src="/Public/upload/ad/img2.jpg" alt=""></a></span>
					<span><a href=""><img src="/Public/upload/ad/img3.jpg" alt=""></a></span>
				</dd>
			</dl>
		</div>
		<!--精品推荐-->
		<section class="index_floor">
			<div class="floor_body1">
				<h2></h2>
				<div class="scroll_best">
					<div class="bd">
						<ul>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
						</ul>
						<ul>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
						</ul>
						<ul>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
							<li>
								<div class="index_pro"><a href=""></a></div>
							</li>
						</ul>
						<div class="hd"></div>
					</div>
				</div>
			</div>
		</section>
		<!--精品推荐结束-->


	</div>

</div>



<style>
.ul_test{padding: 0; margin: 0; list-style-type: none;}
.ul_test li{display: inline-block; border: 1px solid #000;}
</style>

</body>
</html>