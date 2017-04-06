<?php
return array(
	//'配置项'=>'配置值'

    'LOAD_EXT_CONFIG' => 'html',	// 加载其他自定义配置文件 html.php
	'URL_HTML_SUFFIX'   =>  'html',
	'HTML_CACHE_ON'     =>   true, // 开启静态缓存
	'HTML_CACHE_TIME'   =>   60,   // 全局静态缓存默认有效期（秒）
	'HTML_FILE_SUFFIX'  =>   '.html', //设置静态缓存文件后缀
    'HTML_CACHE_RULES'  =>   array(  //定义静态缓存的规则
        //定义格式1   数组方式
        //'静态地址' =>  array('静态规则', '有效期', '附加规则'),
//        'Goods:ajaxComment'=>array('{:module}_{:controller}_{:action}_{goods_id}_{commentType}_{p}',TPSHOP_CACHE_TIME),  // 商品评论页静态缓存 3秒钟
    ),

);