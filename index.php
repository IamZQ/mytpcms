<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: nzq <nzq@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))   die('require PHP > 5.3.0！');
//检测是否安装了tpcms
if(file_exists('./Install/') && !file_exists("./Install/install.lock")){
	//$_SERVER['PHP_SELF']//正在执行脚本的文件名 
	if($_SERVER['PHP_SELF'] !='/index.php'){
		header("Content-type: text/html;charset=utf-8");
		exit("请在域名根目录下安装,如:<br/> www.xxx.com/index.php 正确 <br/>  www.xxx.com/www/index.php 错误,域名后面不能圈套目录, 但项目没有根目录存放限制,可以放在任意目录,apache虚拟主机配置一下即可");
	}
	header('Location:/Install/index.php');
	exit();
}
error_reporting(E_ALL ^ E_NOTICE);//显示除去 E_NOTICE 之外的所有错误信息
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Application/');

//定义插件目录
define('PLUGIN_PATH','plugins/');
//编辑图片上传路径
define('UPLOAD_PATH','Public/upload/');
//默认缓存时间
define('TPSHOP_CACHE_TIME','31104000');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
