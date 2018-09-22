<?php
spl_autoload_register(function ($classname){
    $file = str_replace('\\', '/', $classname);
    $file .= '.class.php';
    if (file_exists(WEB_PATH."/app/$file")) {
        include_once WEB_PATH."/app/$file";
    }
    if (file_exists(WEB_PATH."/lib/$file")) {
        include_once WEB_PATH."/lib/$file";
    }
});
