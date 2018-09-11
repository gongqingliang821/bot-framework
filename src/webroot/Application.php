<?php
class Application{
    public function __construct($configPath){
        require($configPath);
    }

    public function run($appPath){
        try
        {
            $mapper = new UrlMapper($appPath, $_SERVER['SCRIPT_NAME']);
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


