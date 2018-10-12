<?php
namespace Bot\Framework;
use Bot\Framework\lib\UrlMapper;
use Bot\Framework\lib\WinRequest;
use Bot\Framework\lib\SystemException;
class Application{
    private $appPath;
    public function __construct($configFile = '' , $appPath = ''){
        $configFile = $configFile ? $configFile : WEB_PATH . '/config/conf.php';
        $this->appPath = $appPath ? $appPath : WEB_PATH . '/app';
        require($configFile);
    }

    public function run(){
        try
        {
            $mapper = new UrlMapper($this->appPath, $_SERVER['SCRIPT_NAME']);
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
    }
}


