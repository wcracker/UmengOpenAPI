<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Wcracker\UmengOpenAPI\com\umeng\uapp\param\UmengUappDailyDataInfo;

class UmengUappGetDailyDataResult
{
    private $dailyData;
    
    /**
    * @return UmengUappDailyDataInfo
    */
    public function getDailyData()
    {
        return $this->dailyData;
    }
    
    /**
     * 设置UmengUappDailyDataInfo
     * @param UmengUappDailyDataInfo $dailyData

     * 此参数必填     */
    public function setDailyData(UmengUappDailyDataInfo $dailyData)
    {
        $this->dailyData = $dailyData;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("dailyData", $this->stdResult)) {
            $dailyDataResult=$this->stdResult->{"dailyData"};
            $this->dailyData = new UmengUappDailyDataInfo();
            $this->dailyData->setStdResult($dailyDataResult);
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("dailyData", $this->arrayResult)) {
            $dailyDataResult=$arrayResult['dailyData'];
            $this->dailyData = new UmengUappDailyDataInfo();
            $this->dailyData->setStdResult($dailyDataResult);
        }
    }
}
