<?php
class Application{
    private $appPath;
    public function __construct($configPath, $appPath){
        require($configPath);
        $this->appPath = $appPath;
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


