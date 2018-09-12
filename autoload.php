<?php
if(!defined('ROOT_PATH')){
    define("ROOT_PATH", dirname(__FILE__) . '/src');
}

spl_autoload_register(function ($classname){
    $file = str_replace('\\', '/', $classname);
    $file .= '.class.php';
    if (file_exists(ROOT_PATH."/webroot/$file")) {
        include_once ROOT_PATH."/webroot/$file";
    } 
    if (file_exists(ROOT_PATH."/app/$file")) {
        include_once ROOT_PATH."/app/$file";
    } 
    if (file_exists(WEB_PATH."/app/$file")) {
        include_once WEB_PATH."/app/$file";
    }
    if (file_exists(ROOT_PATH."/lib/$file")) {
        include_once ROOT_PATH."/lib/$file";
    }
    if (file_exists(WEB_PATH."/lib/$file")) {
        include_once WEB_PATH."/lib/$file";
    }
});
