# 介绍

淘宝联盟、京东联盟、多多进宝SDK封装。

# 使用方法
1、安装扩展包
`composer require niugengyun/easytbk`


2、执行下面的命令，然后修改config/easytbk.php
`php artisan vendor:publish --provider "NiuGengYun\EasyTBK\ServiceProvider"`

3、淘宝SDK初始化
`
<?php
use NiuGengYun\EasyTBK\Factory;
use NiuGengYun\EasyTBK\TaoBao\Request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest;
$req->setNumIids ($numIids);
return $lient->execute ($req);
`

4、京东、拼多多SDK初始化基本一样，自己摸索
