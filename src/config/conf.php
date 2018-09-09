<?php
require (ROOT_PATH."/config/classpath.php");
ignore_user_abort(true);
define("LOG_PATH", ROOT_PATH."/log/");
global $IS_DEBUG;
if (file_exists(ROOT_PATH.'/DEBUG')){
    $IS_DEBUG = true;
    ini_set('track_errors', true);
    ini_set("display_errors", "On");
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    Logger::setLevel(PLogger::DEBUG, ['level'=>PLogger::INFO,'path'=>LOG_PATH."/uilog/",'in_line'=>true,'file_prefix'=>'ui']);
} else {
    $IS_DEBUG = false;
    Logger::setLevel(PLogger::INFO, ['level'=>PLogger::INFO,'path'=>LOG_PATH."/uilog/",'in_line'=>true,'file_prefix'=>'ui']);
}


date_default_timezone_set('Asia/Shanghai');
if(isset($_SERVER['HTTP_SAIYALOGID'])){
    define('LOG_ID', $_SERVER['HTTP_SAIYALOGID']);
}else{
    define('LOG_ID', ''.time().mt_rand(1000, 10000));
}
//设置日志级别

DB::init("mysql:host=10.95.31.38;dbname=dumi_openplat_db;port=5555",'edurd_wr','hsilgne');

Logger::info('hahhahha');
