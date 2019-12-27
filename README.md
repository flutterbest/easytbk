# 介绍

淘宝联盟、京东联盟、多多进宝、唯品客、苏宁推客、蘑菇街SDK封装，该项目长期维护，欢迎提交PR。

# 联系方式
微信：bugfixed

# 接口文档
这是基于该扩展写的一个demo
https://www.yuque.com/books/share/9b90cef4-4774-4f1b-bbf1-38bdcf317f5c?#（密码：hz4a）

# TODO
唯品会、蘑菇街、苏宁

# 使用方法
1、安装扩展包，该扩展包只支持laravel

```bash
composer require niugengyun/easytbk
```


2、执行下面的命令，然后修改config/easytbk.php

```bash
php artisan vendor:publish --provider "NiuGengYun\EasyTBK\ServiceProvider"
```

3、淘宝SDK初始化

```php
<?php
use NiuGengYun\EasyTBK\Factory;
use NiuGengYun\EasyTBK\TaoBao\Request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest;
$req->setNumIids ($numIids);
return $client->execute ($req);
```

4、京东SDK初始化
```php
<?php
use NiuGengYun\EasyTBK\Factory;
use NiuGengYun\EasyTBK\JingDong\Request\JdUnionGoodsPromotiongoodsinfoQueryRequest;

$jd = Factory::jingdong();
$req = new JdUnionGoodsPromotiongoodsinfoQueryRequest();
$req->setSkuIds("$itemid");
return $jd->execute($req);
```


5、拼多多SDK初始化
```php
<?php
use NiuGengYun\EasyTBK\Factory;
use NiuGengYun\EasyTBK\PinDuoDuo\Request\DdkGoodsDetailRequest;

$pdd = Factory::pinduoduo();
$req = new DdkGoodsDetailRequest();
$req->setGoodsIdList("[$itemid]");
return  $pdd->execute($req);
```
