<?php
require 'vendor/autoload.php';
define('WEB_PATH', dirname(__FILE__));
use \Bot\Framework\Application;
$application = new Application();
//$application = new Application(CONFIG_FILE, APP_PATH);
$application->run();

