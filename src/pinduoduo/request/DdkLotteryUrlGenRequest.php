<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2018/11/20
 * Time: 下午6:45
 */

namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkLotteryUrlGenRequest implements RequestInterface
{
    /**
     * 多多客工具生成转盘抽免单url
     * @var string
     */
    private $type = 'pdd.ddk.lottery.url.gen';

    /**
     * 推广位 STRING[]
     * @var
     */
    private $pidList;

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    /**
     * 是否多人团，true-是，false-否
     * @var
     */
    private $multiGroup;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;




    /**
     * @return mixed
     */
    public function getPidList()
    {
        return $this->pidList;
    }

    /**
     * @param mixed $pidList
     */
    public function setPidList($pidList)
    {
        $this->pidList = $pidList;
    }

    /**
     * @return mixed
     */
    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    /**
     * @param mixed $generateWeappWebview
     */
    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    /**
     * @return mixed
     */
    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    /**
     * @param mixed $generateShortUrl
     */
    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    /**
     * @return mixed
     */
    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    /**
     * @param mixed $multiGroup
     */
    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    /**
     * @return mixed
     */
    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    /**
     * @param mixed $customParameters
     */
    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getParams()
    {
        $params = [
            'type' => $this->type,
            'pid_list' => $this->pidList,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'generate_short_url' => $this->generateShortUrl,
            'multi_group' => $this->multiGroup,
            'custom_parameters' => $this->customParameters,
        ];
        return array_filter($params);
    }
}
