<?php 
class Logger {
    public static function setLevel($level = PLogger::ERROR, $options = []) {
        PLogger::get("single",$options);
    }
    
    public static function error($str) {
        PLogger::get("single")->error($str);
    }
    public static function warn($str) {
        PLogger::get("single")->warn($str);
    }
    
    public static function info($str) {
        PLogger::get("single")->info($str);
    }
    
    public static function debug($str) {
        PLogger::get("single")->debug($str);
    }
}
