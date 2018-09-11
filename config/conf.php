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
DB::init("mysql:host=10.95.31.38;dbname=dumi_openplat_db;port=5555",'edurd_wr','hsilgne');
