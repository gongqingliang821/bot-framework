<?php
use \Bot\Framework\lib\Log\MLogger;
use \Bot\Framework\lib\DB;
require WEB_PATH . '/autoload.php';
date_default_timezone_set('Asia/Shanghai');
date_default_timezone_set('Asia/Shanghai');
if(isset($_SERVER['HTTP_SAIYALOGID'])){
    define('LOG_ID', $_SERVER['HTTP_SAIYALOGID']);
}else{
    define('LOG_ID', ''.time().mt_rand(1000, 10000));
}
DB::init("mysql:host=xx.xx.xx.xx;dbname=db_name;port=端口",'账号','密码');

// 日志配置
MLogger::getInstance(['path' => '日志路径', 'online' => true]);

//redis配置信息
define("REDIS_IP", "127.0.0.1");
define("REDIS_PORT", 6379);

define("LOG_PATH", "log/");

#
#ES config

define("ES_HOST", "****");
define("ES_INDEX", "***");
define("ES_TYPE", "***");
#Redis config
#
#
