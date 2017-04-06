<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>前端学习</title>
    <link rel="stylesheet" href="/Template/mobile/new/Static/css/public.css">
    <style>
        .main-box{width:600px;height:auto;margin: auto;}
        .test-box{width: 200px;height:200px;margin: 10px auto;padding: 20px;border:10px solid red;}
    </style>
</head>
<body>
<div>第一块 文字与段落</div>
<!--1、字体加粗标签-->
这里是没有使用b标签的正常字体
<br/>
<b>这里使用了b标签加粗的字体</b>
<!--2、斜体标签-->
<i>斜体i标签</i>
<br />
<em>斜体em标签</em>
<br />
<cite>斜体cite标签</cite>
<br />
<!--3、下划线标签和删除线标签-->
<u>下划线标签u</u>
<s>删除线标签s</s>
<!--4、段落标记（P）-->
<p>我是第一个段落标签p</p>
<p>我是第二个段落标签p</p>
<span>使用p标签换行上下文有间距(浏览器会自动地在段落的前后添加空行),而<br>标签换行是软换行,上下文没有间距</span>
<!--5、水平线标记标签(hr)-->
<h1>带属性值的hr标签演示</h1>
<hr width="200px" size="5px" color="bule" align="left" />
<!--6、输入特殊符号-->
<!--基本语法: &nbsp；&quot  &amp-->
<div>第二块 图片(IMG)</div>
<img>标签除了src属性外还包括的属性有:
lowsrc：设定分辩率比较低的图片
alt：设定图像的提示文字属性
width、height：设定图像的宽度和高度
border：设定图片的边框
vspace：设定图像的垂直间距
hspace：设定图像的水平间距
align：设定图像的排列属性
<div>第三部分：HTML多媒体标签Embed</div>
使用embed标签可以在网页中放置MP3音乐,电影,flash动画等<br />
<embed src="" type="" ></embed>
    除了使用embed标签来添加背景音乐的方法外，还有一种更简单的方法是使用bgsound标签
    <bgsound src="音乐文件路径" loop="1"></bgsound>

<hr />
<p>盒子模型</p>
<div class="main-box">
    <div class="test-box">box1</div>
</div>
<div class="float-clear"></div>
<div>JavaScript图片库制作</div>


</body>
</body>
</html>