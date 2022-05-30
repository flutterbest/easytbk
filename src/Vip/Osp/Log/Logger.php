<?php

namespace NiuGengYun\EasyTBK\Vip\Osp\Log;

/**
 * 日志处理类
 * @author jamin.li
 *
 */
class Logger {

	private static $LOG_PATH = null;

	private static $IS_INIT = false;
	private static $IS_LOG = false;

	private static $LOG_FILE_NAME = "osp-php-";

	private static $LOG_LEVEL = 3;//默认是error级别

	private static $LOG_LEVEL_DEBUG = 1;
	private static $LOG_LEVEL_INFO = 2;
	private static $LOG_LEVEL_ERROR = 3;

	private static function init(){
		Logger::$LOG_PATH =  \NiuGengYun\EasyTBK\Vip\Osp\Util\PathUtil::getRootPath()."/osp-log/";

		if(!file_exists(Logger::$LOG_PATH)){
			mkdir(Logger::$LOG_PATH);
		}

		//是否需要记录日志
		$envLog = getenv ( "VIP_OSP_PHP_STUB_LOG");
		if($envLog){
			Logger::$IS_LOG = true;
			Logger::$LOG_FILE_NAME = $envLog;
		}

		//日志级别
		$envLogLevel = getenv ( "VIP_OSP_PHP_STUB_LOG_LEVEL");
		if($envLogLevel){
			if($envLogLevel == "debug"){
				Logger::$LOG_LEVEL = Logger::$LOG_LEVEL_DEBUG;
			} else if ($envLogLevel == "info"){
				Logger::$LOG_LEVEL = Logger::$LOG_LEVEL_INFO;
			} else if ($envLogLevel == "error"){
				Logger::$LOG_LEVEL = Logger::$LOG_LEVEL_ERROR;
			} else {
				Logger::$LOG_LEVEL = Logger::$LOG_LEVEL_ERROR;
			}
		}

		Logger::$IS_INIT = true;
	}

	public static function info($msg) {
		if(!Logger::$IS_INIT){
			Logger::init();
		}

		if(Logger::$LOG_LEVEL <= Logger::$LOG_LEVEL_INFO){
			Logger::log("[INFO]".$msg);
		}
	}

	public static function debug($msg) {
		if(!Logger::$IS_INIT){
			Logger::init();
		}

		if(Logger::$LOG_LEVEL <= Logger::$LOG_LEVEL_DEBUG){
			Logger::log("[DEBUG]".$msg);
		}
	}

	public static function error($msg, $e) {
		if(!Logger::$IS_INIT){
			Logger::init();
		}

		$msg = "[ERROR]".$msg;

		if(Logger::$LOG_LEVEL <= Logger::$LOG_LEVEL_ERROR){
			if ($e instanceof \NiuGengYun\EasyTBK\Vip\Osp\Exception\OspException){
				Logger::log($msg.$e->getReturnCode());
				Logger::log($msg.$e->getReturnMessage());
				Logger::log($msg.serialize($e));
				Logger::log($msg.Logger::getBacktrace());
			}
			else if($e instanceof \Exception)
			{
				Logger::log($msg.$e->getMessage());
				Logger::log($msg.serialize($e));
				Logger::log($msg.Logger::getBacktrace());
			}
			else
			{
				Logger::log($msg.serialize($e));
			}
		}
	}

	private static function log($msg) {
		try{
			if(Logger::$IS_LOG){
				//打开文件
				$fd = fopen(Logger::$LOG_PATH.Logger::$LOG_FILE_NAME.date("Y-m-d").".log","a");
				//增加文件
				$str = "[".date("Y/m/d h:i:s",time())."]".$msg;
				//写入字符串
				fwrite($fd, $str."\n");
				//关闭文件
				fclose($fd);
			}
		}
		catch (\Exception $e){
			echo 'Logger error, message :'.$e->getMessage();
		}
	}

	private static function getBacktrace() {
		ob_start();
		debug_print_backtrace();
		return ob_get_clean();
	}
}

?>
