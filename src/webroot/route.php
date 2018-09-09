<?php
//初始文件
define('ROOT_PATH', dirname(dirname(__FILE__)));
require (ROOT_PATH."/config/conf.php");
define('LOG_ID', ''.time().mt_rand(1000, 10000));
if(php_sapi_name()=='cli'){
    require(ROOT_PATH.'/script/'.$argv[1]);
    exit();
}
try
{
    $mapper = new UrlMapper($_SERVER['SCRIPT_NAME']);
    WinRequest::setAttribute("mapper", $mapper);
    $controller = $mapper->getController();
    $output = $controller->process();
}
catch(SystemException $e)
{
    $status = !$e->getCode() ? '1001' : $e->getCode();
    $msg = !$e->getMessage() ? '服务器异常' : $e->getMessage();
    $result = array(
        'status' => $status,
        'msg'    => $msg,
    );
    $output = json_encode($result);
}
header('content-type:text/json;charset=utf-8');
echo $output;


