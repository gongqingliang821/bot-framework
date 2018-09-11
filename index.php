<?php
define('WEB_PATH', dirname(__FILE__));
require 'vendor/bot/bot-framework/src/webroot/index.php';
/*$app = new Application([
        'configpath' = '',
       'apppath'=>'', 
] $const);*/
$configPath = __DIR__ . '/config/conf.php';
$appPath = __DIR__ .'/app';
$application = new Application($configPath, $appPath);
$application->run();

