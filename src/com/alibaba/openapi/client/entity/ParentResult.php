<?php
namespace Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity;

class ParentResult
{
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
    }
    public function getStdResult()
    {
        return $this->stdResult;
    }
    private $responseStatus;
}
