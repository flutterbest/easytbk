<?php
namespace NiuGengYun\EasyTBK\pinduoduo\request;

use NiuGengYun\EasyTBK\pinduoduo\RequestInterface;


class DdkOauthGoodsPidQueryRequest implements RequestInterface
{
    private $type = 'pdd.ddk.oauth.goods.pid.query';


    private $page;

    private $pageSize;



    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }


    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }


    public function getParams()
    {
        $params = [
            'type'      => $this->type,
            'page_size' => $this->pageSize,
            'page'      => $this->page,
        ];
        return array_filter($params);
    }
}
