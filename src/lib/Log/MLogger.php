<?php

namespace Bot\Framework\lib\Log;

use Bot\Framework\lib\Log\NoticeFormatter;
use Bot\Framework\lib\Log\WarningFormatter;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\IntrospectionProcessor;

class MLogger { 

    // 保存类实例的静态成员变量
    private static $instance;
    // monolog实例
    private $monolog;
    // 保存noticeLogs
    private $noticeLogs = [];
    // 统计时间
    private $times = [];
    // bot收到请求的logId
    public static $logId;

    /**
     * 构造方法
     * @param arry $configs log配置
     * @param string $path 日志路径
     */
    private function __construct($configs = []) {
        $this->monolog = new Logger('log');

        // notice日志配置
        $noticeFormatter = new NoticeFormatter();
        $noticePath = $configs['path'] . '/log.' . date('YmdH');
        $noticeStreamHandler = new StreamHandler($noticePath, (isset($configs['online']) && $configs['online'] === true) ? Logger::NOTICE : Logger::DEBUG);
        $noticeStreamHandler->setFormatter($noticeFormatter);
        $this->monolog->pushHandler($noticeStreamHandler);

        // warning日志配置
        $warningFormatter = new WarningFormatter();
        $warningPath = $configs['path'] . '/log.wf.' . date('YmdH');
        // $bubble 参数设置为 false，保证warning以上的log不打印到notice里面
        $warningStreamHandler = new StreamHandler($warningPath, Logger::WARNING, false);
        $warningStreamHandler->setFormatter($warningFormatter);
        $this->monolog->pushHandler($warningStreamHandler);

        // WARNING以上日志，需要打印debug_backtrace
        $this->monolog->pushProcessor(new IntrospectionProcessor(Logger::WARNING));

    }

    /**
     * 单例模式
     * @param arry $configs log配置
     * @return MLogger
     */
    public static function getInstance($configs = []) {
        if (empty(self::$instance)) {
            self::$instance = new self($configs);
        }
        return self::$instance;
    }

    /**
     * 设置logId
     * @param param $logId
     */
    public static function setLogId($logId) {
        self::$logId = $logId;
    }

    /**
     * 添加notice日志，所有的notice日志打印一条
     * @param string $key
     * @param string $value
     * @return null
     */
    public function point($key, $value) {
        $this->noticeLogs[$key] = $value;
    }

    /**
     * 添加notice日志logId
     * @param string $logId
     * @return null
     */
    public function pointLogId($logId) {
        $this->point('logid', $logId);
    }

    /**
     * 在一条中打印notice日志
     * @return null
     */
    public function notice() {
        // 除了noticeLogs里面的日志，需要把时间统计相关的加上
        $sumTime = 0;
        if (is_array($this->times)) {
            foreach ($this->times as $k => $v) {
                $this->noticeLogs[$k] = $v;
                $sumTime += $v;
            }
        }

        $allTime = 0;
        // 如果存在all_t才统计self_t
        if (isset($this->times['all_t'])) {
            $allTime = $this->times['all_t'];
            $selfTime = $allTime + $allTime - $sumTime;
            $this->noticeLogs['self_t'] = $selfTime;
        }

        // TODO 可以结合使用bot-sdk把常见的一些logId、cuid打印出来
        $this->monolog->notice('notice', $this->noticeLogs);
    }

    /**
     * 打印warning日志
     * @param string $message
     * @return null
     */
    public function warning($message) {
        $this->monolog->warn($message);
    }

    /**
     * 打印debug日志
     * @param string $message
     * @return null
     */
    public function debug($message) {
        $this->monolog->debug($message);
    }

    /**
     * 打印error日志
     * @param string $message
     * @return null
     */
    public function error($message) {
        $this->monolog->error($message);
    }

    /**
     * 记录开始时间
     * @param string $key
     * @return null
     */
    public function time($key) {
        if (!$key) {
            return;
        }
        $this->times[$key] = microtime(true);
    }

    /**
     * 记录结束时间
     * @param string $key
     * @return null
     */
    public function timeEnd($key) {
        if (!$key) {
            return;
        }
        if (!isset($this->times[$key])) {
            return;
        }
        $start = $this->times[$key];
        unset($this->times[$key]);
        $this->times[$key] = intval(1000 * (microtime(true) - $start));
    }

    /**
     * 记录all_t开始时间
     * @return null
     */
    public function timeAll() {
        $this->time('all_t');
    }

    /**
     * 记录all_t开始时间
     * @return null
     */
    public function timeEndAll() {
        $this->timeEnd('all_t');
    }

}
