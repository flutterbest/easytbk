<?php

namespace NiuGengYun\EasyTBK\SuNing;

class Application
{
    public $appkey;

    public $appSecret;

    public $serverUrl = "https://open.suning.com/api/http/sopRequest";

    public $format = "json";

    public $connectTimeout = 5;

    public $readTimeout = 30;

    public $checkRequest = true;

    protected $signMethod = "md5";

    protected $apiVersion = "v1.2";

    protected $userAgent = "suning-sdk-php";

    protected $sdkVersion = "suning-sdk-php-beta0.1";

    public function __construct($appkey = "", $secretKey = "")
    {
        $this->appkey = $appkey;
        $this->appSecret = $secretKey;
    }

    /**
     * @return string
     */
    public function getAppkey(): string
    {
        return $this->appkey;
    }

    /**
     * @param string $appkey
     */
    public function setAppkey(string $appkey): void
    {
        $this->appkey = $appkey;
    }

    /**
     * @return string
     */
    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    /**
     * @param string $appSecret
     */
    public function setAppSecret(string $appSecret): void
    {
        $this->appSecret = $appSecret;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat(string $format): void
    {
        $this->format = $format;
    }


    /**
     * 封装头信息及签名
     *
     * $param array $params
     *
     * @return array
     */
    private function generateSignHeader($params)
    {
        $signString = '';
        foreach ($params as $k => $v) {
            $signString .= $v;
        }
        unset($k, $v);
        $signMethod = $this->signMethod;
        $signString = $signMethod($signString);
        // 组装头文件信息
        $signDataHeader = array(
            "Content-Type: text/xml; charset=utf-8",
            "AppMethod: " . $params['method'],
            "AppRequestTime: " . $params['date'],
            "Format: " . $this->format,
            "signInfo: " . $signString,
            "AppKey: " . $params['app_key'],
            "VersionNo: " . $params['api_version'],
            "User-Agent: " . $this->userAgent,
            "Sdk-Version: " . $this->sdkVersion
        );
        return $signDataHeader;
    }

    /**
     * 发送请求
     *
     * @param string $url
     * @param json|xml $postFields
     *            $param array $header
     * @return json xml
     */
    public function curl($url, $postFields = null, $header = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        // https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new Exception($response, $httpStatusCode);
            }
        }
        curl_close($ch);
        return $response;
    }

    /**
     * 准备发送的参数及检查验证
     *
     * @param obj $request
     * @return json xml
     */
    public function execute($request)
    {
        $checkParam = $request->getCheckParam();
        if ($checkParam) {
            try {
                $request->check();
            } catch (\Exception $e) {
                dd($e->__toString());
            }
        }
        // 获取业务参数
        $paramsArray = $request->getApiParams();
        if (empty($paramsArray)) {
            $paramsArray = '';
        }
        $paramsArray = array('sn_request' => array('sn_body' => array(
            "{$request -> getBizName()}" => $paramsArray
        )));
        if ($this->format == "json") {
            $apiParams = json_encode($paramsArray);
        } else {
            $apiParams = ArrayToXML::parse($paramsArray["sn_request"], "sn_request");
        }
        // 组装系统参数
        $sysParams["secret_key"] = $this->appSecret;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["date"] = date('Y-m-d H:i:s');
        $sysParams["app_key"] = $this->appkey;
        $sysParams["api_version"] = $this->apiVersion;
        $sysParams["post_field"] = base64_encode($apiParams);
        // 头信息(内含签名)
        $signHeader = $this->generateSignHeader($sysParams);
        unset($sysParams);
        // 发起HTTP请求
        try {
            $resp = $this->curl($this->serverUrl . "/" . $request->getApiMethodName(), $apiParams, $signHeader);
        } catch (\Exception $e) {
            dd($e->__toString());
        }
        return $resp;
    }
}
