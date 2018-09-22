<?php 
namespace Bot\Framework\lib;
class PLogger {
    //log级别 1:error 2:info 3:debug 4:print out
    private $_level;
    private $_fp;
    private $_path;
    private $_filename;
    private $options;

    const ERROR=1;
    const WARN=2;
    const INFO=3;
    const DEBUG=4;
    const PRINT_OUT=5;

    private function __construct($options=[]){
        $options=array_merge([
            'level'=>self::ERROR,
            'path'=>'/tmp/',
            'file_prefix'=>'',
            'in_line'=>true,///每条日志仅打一行
            'time_split'=>true,
            ],$options);
        $this->_file_prefix=$options['file_prefix'];
        $this->_level=$options['level'];
        $this->_path=$options['path'];
        $this->_in_line=$options['in_line'];
        $this->options=$options;
        if(empty($this->_file_prefix) && !empty($this->_path)){
            $file_prefix = basename($this->_path);
            $file_prefix = str_replace(array("_","log",), "", $file_prefix);
            $this->_file_prefix = $file_prefix;
        }
        $this->open(); 

    }
    private static $loggers=[];
    public static function get($name='root',$options=[]){
        if(!isset(self::$loggers[$name])){
            self::$loggers[$name]=new self($options);
        }
        return self::$loggers[$name];
    }

    public function open() {
        if ($this->_path && !file_exists($this->_path)) {
            @mkdir($this->_path, 0777, true);
        }
    }
    
    
    private function put($str, $level = self::INFO) {
        $this->_filename = $this->getFileName($level);
        $now = date('[Y-m-d H:i:s:');
        $t = gettimeofday();
        if($this->_in_line){
            $str=str_replace(["\r","\n"],'',$str);
        }
        file_put_contents($this->_path.$this->_filename, $now.$t["usec"]."] ".LOG_ID." ".$str."\n",FILE_APPEND|LOCK_EX);
        if ($this->_level == self::PRINT_OUT) {
            echo "<div style='color:red'>".$now.$t["usec"]."] ".$str."</div>\n";
        }
    }
    
    
    /**
     * 输出error日志
     * @param string $str
     * @param string $logType ui/trace
     */
    public function error($str, $logType = "") {
        if ($this->_level >= self::ERROR) {
            switch($logType) {
                case 'trace':// uitraceLog 需要 json 保持某些字段信息必须为 string
                    $str = $this->parseTraceLog($str);
                    $this->tracePut("[ERROR] $str");
                    break;
                case 'ui':// PVLOG为统计标志    PVLOST为请求失败标志
                    $this->uiPut("[ERROR] PVLOG[1] PVLOST[1] $str".$this->backtrace());
                    break;
                default:
                    $this->put("[ERROR] $str".$this->backtrace());
                    break;
            }
        }
    }
    
    /**
     * 输入info日志
     * @param string $str
     * @param string $logType ui/trace
     */
    public function info($str, $logType = "") {
        if ($this->_level >= self::INFO) {
            $this->put("[INFO] $str", self::INFO);
        }
    }
    
    /**
     * 输出warn日志
     * @param string $str
     * @param string $logType ui/trace
     */
    public function warn($str, $logType = "") {
        if ($this->_level >= self::WARN) {
            $this->put("[WARN] $str".$this->caller(), self::WARN);
        }
    }
    
    public function debug($str) {
        if ($this->_level >= self::DEBUG) {
            $this->put("[DEBUG] $str".$this->caller(), self::DEBUG);
        }
    }
    
    private function getFileName($level) {
        $part = $level >= self::INFO ? "" : ".wf";
        $prefix = $this->_file_prefix ? $this->_file_prefix.".log$part" : "log$part";
        if($this->_file_prefix && !$this->options['time_split']){
            return $prefix;
        }
        return "$prefix.".date('YmdH');;
    }
    
    private function caller() {
        $bt = debug_backtrace();
        array_shift($bt);
        array_shift($bt);
        $data = '';
        $point = array_shift($bt);
        $func = isset($point['function']) ? $point['function'] : '';
        $file = isset($point['file']) ? substr($point['file'], strlen($basePath)) : '';
        $line = isset($point['line']) ? $point['line'] : '';
        $args = isset($point['args']) ? $point['args'] : '';
        $class = isset($point['class']) ? $point['class'] : '';
        if ($class) {
            $data .= "# ${class}->${func} at [$file:$line]";
        } else {
            $data .= "# $func at [$file:$line]";
        }
        return $data;
    }
    
    private function backtrace($basePath = "") {
        $bt = debug_backtrace();
        array_shift($bt);
        $data = '';
        foreach ($bt as $i=>$point) {
            $func = isset($point['function']) ? $point['function'] : '';
            $file = isset($point['file']) ? substr($point['file'], strlen($basePath)) : '';
            $line = isset($point['line']) ? $point['line'] : '';
            $args = isset($point['args']) ? $point['args'] : '';
            $class = isset($point['class']) ? $point['class'] : '';
            if ($class) {
                $data .= "#$i ${class}->${func} at [$file:$line]\t";
            } else {
                $data .= "#$i $func at [$file:$line]\t";
            }
        }
        
        return $data;
    }
    
}
