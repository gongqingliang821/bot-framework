<?php
namespace Bot\Framework\lib;

use \Bot\Framework\lib\Log\MLogger;

class BaseBotController {


    public function process()
    {
        register_shutdown_function(function() {
            MLogger::getInstance()->notice();
        });

        $mapper = WinRequest::getAttribute("mapper");
        $method = $mapper->getMethod();

        try{
            return call_user_func($method);
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
