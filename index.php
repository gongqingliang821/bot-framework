<?php
define('WEB_PATH', dirname(__FILE__));
require(__DIR__ . '/vendor/bot/bot-framework/src/config/classpath.php');
require(__DIR__ . '/vendor/bot/bot-framework/src/webroot/Application.php');
$configPath = __DIR__ . '/config/conf.php';
$application = new Application($configPath);
$appPath = __DIR__ .'/app';
$application->run($appPath);

