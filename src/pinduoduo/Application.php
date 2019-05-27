<?php

namespace NiuGengYun\EasyTBK\PinDuoDuo;


class Application
{
    private static $instance;

    private $gatewayUrl = 'http://gw-api.pinduoduo.com/api/router';

    public $clientId;

    public $clientSecret;

    public $readTimeout;

    public $connectTimeout;

    public $format = "JSON";

    public function __construct($client_id = "", $client_secret = "")
    {
        $this->clientId = $client_id;
        $this->clientSecret = $client_secret;
    }

    /**
     * 生成加密签名
     * @Author: niugengyun
     * @Date: 2018/4/26
     * @param $params
     * @return string
     */
    public function generateSign($params)
    {
        ksort ($params);
        $str = $this->clientSecret;
        foreach ($params as $paramKey => $param) {
            $str .= $paramKey . $param;
        }
        $str .= $this->clientSecret;
        return strtoupper (md5 ($str));
    }

    /**
     * post请求
     * @Author: niugengyun
     * @Date: 2018/4/26
     * @param $url
     * @return mixed
     */
    public function curl_post($url)
    {
        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_FAILONERROR, false);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTimeout) {
            curl_setopt ($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        //https 请求
        if (strlen ($url) > 5 && strtolower (substr ($url, 0, 5)) == "https") {
            curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        curl_setopt ($ch, CURLOPT_POST, true);

        $reponse = curl_exec ($ch);

        if (curl_errno ($ch)) {
//            throw new \Exception(curl_error($ch),0);
        } else {
            $httpStatusCode = curl_getinfo ($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                abort ($httpStatusCode);
            }
        }
        curl_close ($ch);
        return $reponse;
    }

    /**
     * 执行
     * @Author: niugengyun
     * @Date: 2018/4/26
     * @param $request
     * @return mixed
     */
    public function execute($request, $access_token = '')
    {
        $baseParams = [
            'client_id' => $this->clientId,
            'access_token' => $access_token,
            'data_type' => $this->format,
            'timestamp' => time (),
            'version' => '',
        ];
        $apiParams = $request->getParams ();
        $params = array_merge ($apiParams, $baseParams);
        $params['sign'] = $this->generateSign ($params);
        $requestUrl = $this->gatewayUrl . "?";
        foreach ($params as $paramKey => $param) {
            $requestUrl .= "$paramKey=" . urlencode ($param) . '&';
        }
        $requestUrl = substr ($requestUrl, 0, -1);
        $resp = $this->curl_post ($requestUrl);
        $respArr = json_decode ($resp, true);
        return $respArr;
    }

    /**
     * @return Oauth
     */
    public function oauth()
    {
        return new Oauth();
    }

    /**
     * 单例获取当前对象
     * @Author: niugengyun
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
     * 魔术方法 调用不存在的静态方法时触发
     * @Author: niugengyun
     * @Date: 2018/4/26
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $obj = self::getInstance ();
        return $obj->$name($arguments);
    }

}