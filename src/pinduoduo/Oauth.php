<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo;


class Oauth
{
    private $sellerCodeUrl = 'http://mms.pinduoduo.com/open.html';

    private $ddkCodeUrl = 'http://jinbao.pinduoduo.com/open.html';

    private $tokenUrl = 'http://open-api.pinduoduo.com/oauth/token';

    private $clientId;

    private $redirectUri;

    public function __construct()
    {
        $config = config('pinduoduo');
        $this->clientId = $config['client_id'];
        $this->redirectUri = $config['redirect_uri'];
    }

    public function getCode($type = null)
    {
        if ($type == 'ddk') {
            $url = $this->ddkCodeUrl . '?response_type=code&client_id=' . $this->clientId . '&redirect_uri=' . $this->redirectUri;
        } else {
            $url = $this->sellerCodeUrl . '?response_type=code&client_id=' . $this->clientId . '&redirect_uri=' . $this->redirectUri;
        }
//        header('Location: '.$url);
//        exit();
        dd($url);
    }

    public function getToken($code)
    {
        $url = $this->tokenUrl . '';
        dd($url);
    }
}