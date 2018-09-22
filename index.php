<?php
require 'vendor/autoload.php';
define('WEB_PATH', dirname(__FILE__));
define('CONFIG_FILE', dirname(__FILE__) . '/config/conf.php');
define('APP_PATH', dirname(__FILE__) . '/app');
date_default_timezone_set('Asia/Shanghai');
use \Bot\Framework\webroot\Application;
$application = new Application(CONFIG_FILE, APP_PATH);
$application->run();

