<?php

/**
 * redis操作类
 */
namespace Bot\Framework\lib;
use \Bot\Framework\lib\SystemException;
use Predis;
class BotRedis {
    private static $redis;
         
    private static function getRedisClient(){
        return new Predis\Client([
            'host' => REDIS_IP,
            'port' => REDIS_PORT,
        ]);
    }
     
    public static function getInstance(){
        if (!self::$redis) {
            self::$redis = self::getRedisClient();
        }
        return self::$redis;
    }
}

