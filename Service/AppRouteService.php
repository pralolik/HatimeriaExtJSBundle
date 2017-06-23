<?php

namespace Hatimeria\ExtJSBundle\Service;


class AppRouteService
{
    /**
     * @var string
     */
    protected $apiName;

    public function setAppName($apiName)
    {
        $this->apiName = $apiName;
    }

    public function getAppName()
    {
        return $this->apiName;
    }

}