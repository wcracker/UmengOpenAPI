<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Wcracker\UmengOpenAPI\com\umeng\uapp\param\UmengUappDailyDataInfo;

class UmengUappGetTodayDataResult
{
    private $todayData;
    
    /**
    * @return
    */
    public function getTodayData()
    {
        return $this->todayData;
    }
    
    /**
     * 设置
     * @param UmengUappDailyDataInfo $todayData

     * 此参数必填     */
    public function setTodayData(UmengUappDailyDataInfo $todayData)
    {
        $this->todayData = $todayData;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("todayData", $this->stdResult)) {
            $todayDataResult=$this->stdResult->{"todayData"};
            $this->todayData = new UmengUappDailyDataInfo();
            $this->todayData->setStdResult($todayDataResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("todayData", $this->arrayResult)) {
            $todayDataResult=$arrayResult['todayData'];
            $this->todayData = new UmengUappDailyDataInfo();
            $this->todayData->setStdResult($todayDataResult);
        }
    }
}
