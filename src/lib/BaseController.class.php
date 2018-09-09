<?php
require_once 'vendor/autoload.php';
class BaseController extends \Baidu\Duer\Botsdk\Bot
{
    protected $result;
    protected $status = 200;
    protected $msg = '';

    
    public function process()
    {
        $mapper = WinRequest::getAttribute("mapper");
        $method = $mapper->getMethod();
        // 通过action判断权限
		
        try{
            $this->result = call_user_func($method);
            return $this->renderJson();

        } catch(Exception $e) {
            $logData = array(
                'uri' => $_SERVER['REQUEST_URI'],
                'get' => $_GET,
                'e' => $e,
            );
            Logger::error('[FATAL] ' . var_export($logData, true));
            throw new SystemException($e);
        }
        
    }
    protected function _GET($name, $default = null)
    {   
        return isset($_GET[$name]) ? trim($_GET[$name]) : $default;
    }
    protected function _POST($name, $default = null)
    {   
        return isset($_POST[$name]) ? trim($_POST[$name]) : $default;
    }
    protected function _REQUEST($name, $default = null)
    {   
        return isset($_REQUEST[$name]) ? trim($_REQUEST[$name]) : $default;
    }

    protected function renderJson(){
        header('content-type:text/json;charset=utf-8');
        $result = array(
            'status' => $this->status,
            'msg'    => $this->msg,
            'data'   => $this->result,
        );
        return  json_encode($result);
    }
    
}
