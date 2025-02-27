<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use ArrayObject;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Wcracker\UmengOpenAPI\com\umeng\uapp\param\UmengUappCountData;

class UmengUappGetLaunchesByChannelOrVersionResult
{
    private $launchInfo;

    /**
    * @return
    */
    public function getLaunchInfo()
    {
        return $this->launchInfo;
    }

    /**
     * 设置
     * @param array include @see UmengUappCountData[] $launchInfo

     * 此参数必填     */
    public function setLaunchInfo(UmengUappCountData $launchInfo)
    {
        $this->launchInfo = $launchInfo;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("launchInfo", $this->stdResult)) {
            $launchInfoResult=$this->stdResult->{"launchInfo"};
            $object = json_decode(json_encode($launchInfoResult), true);
            $this->launchInfo = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengUappCountDataResult=new UmengUappCountData();
                $UmengUappCountDataResult->setArrayResult($arrayobject);
                $this->launchInfo [$i] = $UmengUappCountDataResult;
            }
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("launchInfo", $this->arrayResult)) {
            $launchInfoResult=$arrayResult['launchInfo'];
            $this->launchInfo = new UmengUappCountData();
            $this->launchInfo->setStdResult($launchInfoResult);
        }
    }
}
