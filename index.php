<?php
define('WEB_PATH', dirname(__FILE__));
define('CONFIG_FILE', dirname(__FILE__) . '/config/conf.php');
define('APP_PATH', dirname(__FILE__) . '/app');
date_default_timezone_set('Asia/Shanghai');
require 'vendor/bot/bot-framework/src/config/classpath.php';
$application = new Application(CONFIG_FILE, APP_PATH);
$application->run();

