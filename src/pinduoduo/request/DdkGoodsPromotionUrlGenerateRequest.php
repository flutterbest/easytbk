<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkGoodsPromotionUrlGenerateRequest implements  RequestInterface
{

    /**
     * 生成普通商品推广链接
     * @var string
     */
    private $type = 'pdd.ddk.goods.promotion.url.generate';

    /**
     * 推广位ID
     * @var
     */
    private $pid;

    /**
     * 商品ID，仅支持单个查询
     * @var
     */
    private $goodsIdList;

    /**
     * 是否生成短链接，true-是，false-否
     * @var
     */
    private $generateShortUrl;

    /**
     * true--生成多人团推广链接 false--生成单人团推广链接（默认false）1、单人团推广链接：用户访问单人团推广链接，可直接购买商品无需拼团。2、多人团推广链接：用户访问双人团推广链接开团，若用户分享给他人参团，则开团者和参团者的佣金均结算给推手
     * @var
     */
    private $multiGroup;

    /**
     * 自定义参数，为链接打上自定义标签。自定义参数最长限制64个字节。
     * @var
     */
    private $customParameters;

    /**
     * 是否开启订单拉新，true表示开启（订单拉新奖励特权仅支持白名单，请联系工作人员开通）
     * @var
     */
    private $pullNew;

    /**
     * 是否生成唤起微信客户端链接，true-是，false-否，默认false
     * @var
     */
    private $generateWeappWebview;

    /**
     * 招商多多客ID
     * @var
     */
    private $zsduoId;

    /**
     * 是否生成小程序推广
     * @var
     */
    private $generateWeApp;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setGoodsIdList($goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    public function getGoodsIdList()
    {
        return $this->goodsIdList;
    }

    public function setGenerateShortUrl($generateShortUrl)
    {
        $this->generateShortUrl = $generateShortUrl;
    }

    public function getGenerateShortUrl()
    {
        return $this->generateShortUrl;
    }

    public function setMultiGroup($multiGroup)
    {
        $this->multiGroup = $multiGroup;
    }

    public function getMultiGroup()
    {
        return $this->multiGroup;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }

    public function getCustomParameters()
    {
        return $this->customParameters;
    }

    public function setPullNew($pullNew)
    {
        $this->pullNew = $pullNew;
    }

    public function getPullNew()
    {
        return $this->pullNew;
    }

    public function setGenerateWeappWebview($generateWeappWebview)
    {
        $this->generateWeappWebview = $generateWeappWebview;
    }

    public function getGenerateWeappWebview()
    {
        return $this->generateWeappWebview;
    }

    public function setZsduoId($zsduoId)
    {
        $this->zsduoId = $zsduoId;
    }

    public function getZsduoId()
    {
        return $this->zsduoId;
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
            'p_id'                   => $this->pid,
            'goods_id_list'          => $this->goodsIdList,
            'generate_short_url'     => $this->generateShortUrl,
            'multi_group'            => $this->multiGroup,
            'custom_parameters'      => $this->customParameters,
            'pull_new'               => $this->pullNew,
            'generate_weapp_webview' => $this->generateWeappWebview,
            'zs_duo_id'              => $this->zsduoId,
            'generate_we_app'        => $this->generateWeApp,
        ];
        return array_filter($params);
    }
}