<?php
use \Bot\Framework\lib\Logger; 
use \Bot\Framework\lib\PLogger;
use \Bot\Framework\lib\DB;
ignore_user_abort(true);
require WEB_PATH . '/autoload.php';
define("LOG_PATH", "log/");
Logger::setLevel(PLogger::INFO, ['level'=>PLogger::INFO,'path'=>LOG_PATH,'in_line'=>true,'file_prefix'=>'bot']);
date_default_timezone_set('Asia/Shanghai');
if(isset($_SERVER['HTTP_SAIYALOGID'])){
    define('LOG_ID', $_SERVER['HTTP_SAIYALOGID']);
}else{
    define('LOG_ID', ''.time().mt_rand(1000, 10000));
}
DB::init("mysql:host=xx.xx.xx.xx;dbname=db_name;port=端口",'账号','密码');


#
#ES config
#
#Redis config
#
#
