<?php 
/**
**日历处理类
*/
class Log{
	const EMERG     = 'EMERG';//致命错误
	const ALERT 	= 'ALERT';// 警戒线错误
	const CRIT 		= 'CRIT';//临界值错误
	const ERR 		= 'ERR';//一般错误
	const WARN 		= 'WARN';//警告性错误
	const NOTICE 	= 'NOTICE';//通知
	const INFO 		= 'INFO';//信息：程序输出信息
	const DEBUG 	= 'DEBUG';//调式
	const SQL 		= 'SQL';//SQL语句
	//日志信息
	static protected $Log 	  = array();
	//日志存贮
	static protected $storage = null;

	//日志初始化
	static public function inti($config=array()){
		$type 	= isset($config['type']) ? $config['type'] : 'File';
		$class  = strpos($type,"\\") ? $type : 'Think\\Log\\Driver\\'.ucwords(strtolower($type));
		unset($config['type']);
		self::$storage  =  new  $class($config);
	}
	/**
	*记录日志 并且会过滤未经设置的级别
	*@static 
	*@access public 
	*@param string $message 日志信息
	*@param string $level 日志级别
	*@param boolean $record 是否强制记录
	*@return void
	*/
	static function recode($message,$level=self::ERR,$record=false){
		if($record || false !== strpos(C('LOG_LEVEL'), $level)) {
			self::$log[] = "{$level}:{$message}\r\n";
		}
	}
	/**
	*日历保存
	*@static 
	*@access public
	*@param integer $type 日历记录方式
	*@param string $destination 写入目标
	*@return void
	**/
	static function save($type='',$destination=''){
		if(empty(self::$log)) return '';
		if(empty($destination)){
			$destination = C('LOG_PATH').date('y_m_d').".log";
		}
		if(!self::$storage){
			$type 	= $type ? $type :C('LOG_TYPE');
			$class 	= "Think\\Log\\Driver\\".ucwords($type);
		}
		$message 	= implode('',self::$log);
		self::$storage->write($message,$destination);
		//保存后清空日志缓存
		self::$log = array();
	}
	  /**
     * 日志直接写入
     * @static
     * @access public
     * @param string $message 日志信息
     * @param string $level  日志级别
     * @param integer $type 日志记录方式
     * @param string $destination  写入目标
     * @return void
     */
	  static function write($message,$level=self::ERR,$type='',$destination=''){
	  	if(!self::$storage){
	  		$type 	= $type ? $type : C('LOG_TYPE');
	  		$class 	= 'Think\\Log\\Driver\\'.ucwords($type);
	  		$config['log_path'] = C('LOG_PATH');
	  		self::$storage = new $class($config);
	  	}
	  	if(empty($destination)){
	  		$destination = C('LOG_PATH').date("y_m_d").'log';
	  	}
	  	self::$storage ->write("{$level}: {$message}",$destination);
	  }
}
class File
{
	protected $config = array(
		'log_time_format' => ' c ',
		'log_file_size' => 2097152,
		'log_path' => '',
	);

	//实例化并且传入参数
	public function __construct($config = array())
	{
		$this->config = array_merge($this->config, $config);
	}

	/**
	 * 日志写入接口
	 * @access public
	 * @param string $log 日志信息
	 * @param string $destination 写入目标
	 * @return void
	 */
	public function write($log, $destination = '')
	{
		$now = date($this->config['log_time_format']);
		if (empty($destination)) {
			$destination = $this->config['log_path'] . date("y_m_d") . ".log";
		}
		//自动创建日志目录
		$log_dir = dirname($destination);//返回路径中的路径部分
		if (!is_dir($log_dir)) {
			mkdir($log_dir, 0755, true);//创建路径
		}
		if (is_file($destination) && floor($this->config['log_file_size']) <= filesize($destination)) {
			rename($destination, dirname($destination) . '/' . time() . '-' . basename($destination));
		}
		error_log("[{$now}]".$_SERVER['REMOTE_ADDR'].' '.$_SERVER['REQUEST_URI']."\r\n{$log}\r\n",3,$destination);//把错误信息发送到web服务器的错误日志 或者到文件中

	}
}