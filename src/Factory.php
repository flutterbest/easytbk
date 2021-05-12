<?php

namespace NiuGengYun\EasyTBK;

use NiuGengYun\EasyTBK\taobao\Application as TaoBao;
use NiuGengYun\EasyTBK\pinduoduo\Application as PinDuoDuo;
use NiuGengYun\EasyTBK\jingdong\Application as JingDong;
use NiuGengYun\EasyTBK\Vip\Application as Vip;
use NiuGengYun\EasyTBK\suning\Application as SuNing;
use NiuGengYun\EasyTBK\Vip\Osp\Context\InvocationContext;

/**
 * Class Factory.
 *
 * @method TaoBao taobao()
 * @method PinDuoDuo pinduoduo()
 * @method JingDong jingdong()
 * @method Vip vip()
 * @method SuNing suning()
 */
class Factory
{

    /**
     * @var static 单例模式
     */
    private static $instance;


    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $obj = self::getInstance();
        return $obj->make($name, ...$arguments);
    }


    /**
     * 单例获取当前对象
     * @Author: david
     * @Date: 2018/4/26
     * @return static
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * 获取配置文件名字
     * @return string
     */
    public function getConfigName()
    {
        return "easytbk";
    }

    /**
     * @param $name
     * @param array $config
     * @return mixed
     */
    public function make($name, array $config = [])
    {
        if (!in_array($name, ['taobao', 'jingdong', 'pinduoduo', 'vip', 'suning'])) {
            throw  new \InvalidArgumentException('static method is not exists');
        }

        if (count($config) == 0) {
            $config = config("{$this->getConfigName ()}.{$name}", []);
        }
        $config = $this->getConfig($name, $config);

        return $this->getClient($name, $config);
    }


    /**
     * Get the configuration data.
     *
     * @param string[] $config
     *
     * @return string[]
     * @throws \InvalidArgumentException
     *
     */
    protected function getConfig(string $name, array $config)
    {
        if ($name == "taobao") {
            if (!array_key_exists('app_key', $config) || !array_key_exists('app_secret', $config)) {
                throw new \InvalidArgumentException('The top client requires api keys.');
            }
            $config['app_key'] = (string)$config['app_key'];
            return array_only($config, ['app_key', 'app_secret', 'format']);
        }
        if ($name == "pinduoduo") {
            if (!array_key_exists('client_id', $config) || !array_key_exists('client_secret', $config)) {
                throw new \InvalidArgumentException('The pinduoduo client requires client_id and client_secret.');
            }
            return array_only($config, ['client_id', 'client_secret', 'format']);
        }
        if ($name == "jingdong") {
            if (!array_key_exists('app_key', $config) || !array_key_exists('app_secret', $config)) {
                throw new \InvalidArgumentException('The jingdong client requires app_key and app_secret.');
            }
            return array_only($config, ['app_key', 'app_secret', 'format']);
        }
        if ($name == "vip") {
            if (!array_key_exists('app_key', $config) || !array_key_exists('app_secret', $config)) {
                throw new \InvalidArgumentException('The vip client requires app_key and app_secret.');
            }
            return array_only($config, ['app_key', 'app_secret', 'access_token', 'format']);
        }
        if ($name == "suning") {
            if (!array_key_exists('app_key', $config) || !array_key_exists('app_secret', $config)) {
                throw new \InvalidArgumentException('The suning client requires app_key and app_secret.');
            }
            return array_only($config, ['app_key', 'app_secret', 'format']);
        }

    }

    /**
     * Get the topclient client.
     *
     * @param string[] $auth
     *
     * @return CloudsearchClient
     */
    protected function getClient(string $name, array $config)
    {
        if ($name == "taobao") {
            $c = new TaoBao;
            $c->appkey = (string)$config['app_key'];
            $c->secretKey = $config['app_secret'];
            $c->format = isset($config['format']) ? $config['format'] : 'json';
            return $c;
        }
        if ($name == "pinduoduo") {
            $c = new PinDuoDuo();
            $c->clientId = $config['client_id'];
            $c->clientSecret = $config['client_secret'];
            $c->format = isset($config['format']) ? $config['format'] : 'json';
            return $c;
        }
        if ($name == "jingdong") {
            $c = new JingDong();
            $c->appKey = $config['app_key'];
            $c->appSecret = $config['app_secret'];
            $c->format = isset($config['format']) ? $config['format'] : 'json';
            return $c;
        }
        if ($name == "vip") {
            $c = InvocationContext::getInstance();
            $c->setAppKey($config['app_key']);
            $c->setAppSecret($config['app_secret']);
            $c->setAccessToken($config['access_token']);
            $c->setAppURL('https://gw.vipapis.com/');
            return $c;
        }
        if ($name == "suning") {
            $c = new SuNing();
            $c->setAppkey($config['app_key'])  ;
            $c->setAppSecret($config['app_secret'])  ;
            $c->setFormat(isset($config['format']) ? $config['format'] : 'json')  ;
            return $c;
        }
    }


}
