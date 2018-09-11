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

## 生成数据库orp
```shell
php vendor/bot/bot-framework/src/webroot/Install.php 生成数据库相关的orm,在app下新建个controller目录,指定bot路由的controller,例如凯叔bot的control路由是KaishuController.php
```

## 数据库配置 
config/conf.php中,修改数据库配置
```shell
DB::init("mysql:host=xx.xx.xx.xx;dbname=xx;port=xx",'xx','xx');
```

## 配置nginx
nginx配置index.php

## demo 
```shell
http://127.0.0.0:8704/kaishu
```


