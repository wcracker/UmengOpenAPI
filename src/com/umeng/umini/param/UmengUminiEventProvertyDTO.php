<?php
namespace Wcracker\UmengOpenAPI\com\umeng\umini\param;

use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiEventProvertyDTO extends SDKDomain
{
    private $propertyName;
    
    /**
    * @return 属性名
    */
    public function getPropertyName()
    {
        return $this->propertyName;
    }
    
    /**
     * 设置属性名
     * @param String $propertyName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("propertyName", $this->stdResult)) {
            $this->propertyName = $this->stdResult->{"propertyName"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("propertyName", $this->arrayResult)) {
            $this->propertyName = $arrayResult['propertyName'];
        }
    }
}
