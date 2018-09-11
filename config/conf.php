<?php
ignore_user_abort(true);
define("LOG_PATH", "log/");
Logger::setLevel(PLogger::INFO, ['level'=>PLogger::INFO,'path'=>LOG_PATH,'in_line'=>true,'file_prefix'=>'bot']);
date_default_timezone_set('Asia/Shanghai');
if(isset($_SERVER['HTTP_SAIYALOGID'])){
    define('LOG_ID', $_SERVER['HTTP_SAIYALOGID']);
}else{
    define('LOG_ID', ''.time().mt_rand(1000, 10000));
}
DB::init("mysql:host=xx.xx.xx.xx;dbname=db_name;port=xxxx",'账号','密码');
