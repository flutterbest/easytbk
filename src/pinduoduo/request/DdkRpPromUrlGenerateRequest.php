<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2018/11/20
 * Time: 下午6:45
 */
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkRpPromUrlGenerateRequest  implements RequestInterface
{
    /**
     * 生成红包推广链接接口
     * @var string
     */
    private $type = 'pdd.ddk.rp.prom.url.generate';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;


    /**
     * 是否生成小程序推广
     * @var
     */
    private $generateWeApp;



    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    public function setGenerateWeApp($generateWeApp)
    {
        $this->generateWeApp = $generateWeApp;
    }

    public function getGenerateWeApp()
    {
        return $this->generateWeApp;
    }

    public function getParams()
    {
        $params = [
            'type'                   => $this->type,
            'p_id_list'              => $this->pid,
            'generate_short_url'     => $this->generateShortUrl,
            'custom_parameters'      => $this->customParameters,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_we_app'        => $this->generateWeApp,
        ];
        return array_filter($params);
    }
}
