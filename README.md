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
cd vendor/bot/bot-framework/src && php webroot/install.php生成数据库相关的orm
```

## 配置 
nginx配置vendor/bot/bot-framework/src/webroot/route.php

## demo 
参考vendor/bot/bot-framework/src/app/controller目录下KaishuController.class.php
