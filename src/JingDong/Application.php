<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2019/1/8
 * Time: 13:56
 * https://router.jd.com/api?v=1.0&method=jd.union.open.goods.query&access_token=&app_key=ab2ef93a20a5492d8b0dad11ad34b256&sign_method=md5&format=json&timestamp=2019-01-08 14:57:08&sign=B7B42BB545958BBA25DD795FFEDD35E2&param_json={"goodsReqDTO":{"keyword":"女装"}}
 */

namespace NiuGengYun\EasyTBK\JingDong;


class Application
{
    private static $instance;

    private $gatewayUrl = 'https://api.jd.com/routerjson';

    public $appKey;

    public $appSecret;

    public $readTimeout;

    public $connectTimeout;

    public $format = "json";

    private $signMethod = "md5";

    private $v = "1.0";

    public function __construct($appKey = "", $appSecret = "")
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
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


    /**
     * 执行
     * @Author: niugengyun
     * @Date: 2018/4/26
     * @param $request
     * @return mixed
     */
    public function execute($request, $access_token = null)
    {
        $timestamp = date ('Y-m-d H:i:s');


        $params = [
            'v' => $this->v,
            'method' => $request->getMethod (),
            'app_key' => $this->appKey,
            'sign_method' => $this->signMethod,
            'format' => $this->format,
            'timestamp' => $timestamp,
        ];
        if (null != $access_token) {
            $params["access_token"] = $access_token;
        }

        $params['360buy_param_json'] = $request->getParamJson ();;


        $params['sign'] = $this->generateSign ($params);


        $requestUrl = $this->gatewayUrl . "?";
        foreach ($params as $k => $v) {
            $requestUrl .= "$k=" . urlencode ($v) . '&';
        }


        $requestUrl = substr ($requestUrl, 0, -1);


        $resp = $this->curl_post ($requestUrl);
        $respArr = json_decode ($resp, true);
        return $respArr;
    }

    public function oauth()
    {
        return new Oauth();
    }


    /**
     * 生成加密签名
     * @param $request
     * @param $timestamp
     * @return string
     */
    public function generateSign($params)
    {
        ksort ($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if (!is_array ($v) && "@" != substr ($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper (md5 ($stringToBeSigned));
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
            throw new \Exception(curl_error ($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo ($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                abort ($httpStatusCode);
            }
        }
        curl_close ($ch);
        return $reponse;
    }


}
