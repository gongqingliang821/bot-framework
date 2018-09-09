<?php
require '../../../../../vendor/autoload.php';
class BaseBotController extends Baidu\Duer\Botsdk\Bot
{
    public function process()
    {
        $mapper = WinRequest::getAttribute("mapper");
        $method = $mapper->getMethod();
		
        try{
            call_user_func($method);
            return $this->run();
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
    
}
