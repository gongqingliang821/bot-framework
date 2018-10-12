# bot-framework
php封装的bot开发框架，主要功能如下：
* 基于php5.4以上版本开发
* 基于php的namespace机制实现的autoload
* 简易的orm框架，可支持mysql和sqlite（基于pdo_mysql和pdo_sqlite）
* 简易的mvc

## 安装 
```shell
composer require bot/bot-framework dev-master
```

## 生成数据库orm
执行php vendor/bot/bot-framework/init.php 会生成config目录及index.php、install.php文件,在config/conf.php中,修改数据库配置
```shell
DB::init("mysql:host=xx.xx.xx.xx;dbname=xx;port=xx",'xx','xx');
```
然后执行php install.php生成数据表对应的文件

## 编写controller
在app下新建个controller目录,指定bot路由的controller,例如凯叔bot的control路由是KaishuController.php

## 配置nginx
nginx配置index.php

## 使用redis
```shell
$redis = BotRedis::getInstance();
$redis->set('foo', 'bar');
$value = $redis->get('foo');

$redis->hset('hash1', 'key1', 'v1'); //将key为'key1' value为'v1'的元素存入hash1表
$value = $redis->hget('hash1', 'key1'); //取出表'hash1'中的key 'key1'的值,返回'v1'

$redis->rpush('fooList', 'bar1') ;  //列表填加一个元素
$value = $redis->lindex ('fooList', 1) ;  //返回指定元素'bar1'

$redis->sadd('set1', 'ab'); //sadd 增加元素,返回true
$value = $redis->spop('set1'); //弹出首元素
```

## demo 
```shell
http://127.0.0.0:8704/kaishu
```


