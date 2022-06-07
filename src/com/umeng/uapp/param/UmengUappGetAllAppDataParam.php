<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUappGetAllAppDataParam
{
    private $sdkStdResult=array();
    
    public function getSdkStdResult()
    {
        return $this->sdkStdResult;
    }
}
