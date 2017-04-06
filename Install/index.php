<?php
if(file_exists('./install.locak')){
	echo '<!DOCTYPE html><html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8></head><body>你已经安装过该系统，如果想重新安装，请先删除站点Install目录下的 install.lock 文件，然后再安装。</body></html>>';
	exit;
}
@set_time_limit(1000);
if(phpversion() <='5.3.0'){
	set_magic_quotes_runtime(0);
}
if(phpversion() <'5.3.0'){
	header("Content-type:text/html;charset=utf-8");
	exit("您的php版本过低，不能安装本系统，请升级到5.3.0以上在安装，谢谢");
}
date_default_timezone_set('PRC');
error_reporting(E_ALL & ~E_NOTICE);
header('Content-type: text/html;charset=utf-8');
//D:\WWW\MyCMS\Install\index.php
define('SITEDIR',_dir_path(substr(dirname(__FILE__), 0,-8)));//获取网站根目录
define('BASE_ROOT_PATH',str_replace('\\','/',dirname(__FILE__)));
define("TP_SHOP_VERSION", '20160501');

//数据库
$sqlFile = 'tpshop.sql';
$configFile = 'config.php';
if(!file_exists(SITEDIR.'Install/'.$sqlFile) || !file_exists(SITEDIR.'Install/'.$configFile) ){
	echo "缺少必要的安装文件!";
}
$Title = "MyCMS安装向导";
$Powered = "Powerd by Thinkphp";
$steps = array(
	'1'=>'安装许可协议',
	'2'=>'允许坏境检测',
	'3'=>'安装参数设置',
	'4'=>'安装详细过程',
	'5'=>'安装完成'
);
$step = isset($_GET['step']) ? $_GET['step'] : 1;//默认为第一步
$scriptName = !empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $_SERVER['PHP_SELF'];
//网站域名
$rootpath = @preg_replace("/\/(I|i)nstall\/index\.php(.*)$/","",$scriptName);
//当前请求的host 域名
$domain = !empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
if((int) $_SERVER['SERVER_PORT'] != 80){
	$domain.=":".$_SERVER['SERVER_PORT'];
}
$domain = $domain.$rootpath;

function _dir_path($path){
	$path = str_replace("\\", '/', $path);
	if(substr($path,-1) !='/')
		$path = $path.'/';
	return $path;
}

switch ($step) {
	case '1':
		include("./templates/step1.php");
		break;
	case '2':
		if(phpversion() < 5){
			die("本系统需要PHP+MySQL >5.0坏境,当前环境php版本为：". phpversion());
		}
		$phpv = @phpversion();
		$os = PHP_OS;
		$tmp = function_exists('gd_info') ? gd_info() : array();// 获取php gd库的方法
		$server = $_SERVER['SERVER_SOFTWARE'];//服务器标识的字串 
		$host = (empty($_SERVER['SERVER_ADDR'])) ? $_SERVER['SERVER_HOST'] : $_SERVER['SERVER_ADDR'];//获取当前服务器的IP
		$name = $_SERVER['SERVER_NAME'];
		$max_execution_time = ini_get('max_execution_time');//设置超时时间
		$allow_reference = ini_get('allow_call_time_pass_reference') ? '<font color=green>[√]On</font>' : '<font color=red>[×]Off</font>';//是否启用在函数调用时强制参数被按照引用传递
		$allow_url_fopen = ini_get('allow_url_fopen') ? '<font color=green>[]On<font/>' : '<font color=red>[]Off</font>';
		$safe_mode = (ini_get('safe_mode') ? '<font color=red>[]Off</font>' : '<font color=green>[]On</font>');
		$err = 0;
		if(empty($tmp['GD Version'])){
			$gd = '<font color=red>[]Off</font>';
			$err++;
		}else{
			$gd = '<font color=green>[]On</font>' . $tmp['GD Version'];
		}
		if(function_exists('mysqli_connect')){
			$mysql = '<span clss="correct_span">&radic;</span> 已安装';
		}else{
			$mysql = '<span class="correct_span error_spqn">&radic;</span> 请安装mysqli扩展';
			$err++;
		}
		if(ini_get('file_uploads')){
			$uploadSize = '<span class="correct_span"></span>'.ini_get('upload_max_filesize');
		}else{
			$uploadSize = '<span></span>禁止上传';
		}
		if(function_exists('session_start')){
			$session = '<span class="correct_span"></span> 支持';
		}else{
			$session = '<span class="correct_span error_span"</span> 不支持';
			$err ++;
		}
		if(function_exists('curl_init')){
			$curl ='<font color=green>[]支持</font> ';
		}else{
			$curl = '<font color=red>[]不支持</font>';
			$err++;
		}
		if(function_exists('file_put_contents')){
			$file_put_contents = '<font color=green>[]支持</font> ';
		}else{
			$file_put_contents = '<font color=red>[]不支持</font>';
			$err++;
		}
		$folder = array(
			'Install',
			'Public/upload',
			'Application/Common/Conf',
            'Application/Runtime',
        	'Application/Runtime/Cache',
        	//'Application/Runtime/Data',
        	//'Application/Runtime/Logs',
        	'Application/Runtime/Temp'
		);
		include_once("./template/step2.php");
		break;
		case '3':
			$dbName = strtolower(trim($_POST['dbName']));
			$_POST['dbport'] = $_POST['dbport'] ? $_POST['dbport'] : 3306;
			if($_GET['testdbpwd']){
				$dbHost = $_POST['dbHost'];
				$conn = @mysqli_connect($dbHost,$_post['dbuser'],$_POST['dbPwd'],NULL,$_POST['dbport']);
				if(mysqli_connect_errno($conn)){
					die(json_encode(0));
				}else{
					$result = mysqli_query($conn,"SELECT @@global.sql_mode");
					$result = $result->fetch_array();
				}
			}
			break;
	default:
		# code...
		break;
}