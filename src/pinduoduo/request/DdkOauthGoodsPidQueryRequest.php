<?php
namespace NiuGengYun\EasyTBK\PinDuoDuo\Request;

use NiuGengYun\EasyTBK\PinDuoDuo\RequestInterface;


class DdkOauthGoodsPidQueryRequest implements RequestInterface
{
    private $type = 'pdd.ddk.oauth.goods.pid.query';


    private $page;

    private $pageSize;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

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