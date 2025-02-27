<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use ArrayObject;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Wcracker\UmengOpenAPI\com\umeng\uapp\param\UmengUappDateCountInfo;

class UmengUappEventParamGetDataResult
{
    private $paramValueData;

    /**
    * @return
    */
    public function getParamValueData()
    {
        return $this->paramValueData;
    }

    /**
     * 设置
     * @param array include @see UmengUappDateCountInfo[] $paramValueData

     * 此参数必填     */
    public function setParamValueData(UmengUappDateCountInfo $paramValueData)
    {
        $this->paramValueData = $paramValueData;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("paramValueData", $this->stdResult)) {
            $paramValueDataResult=$this->stdResult->{"paramValueData"};
            $object = json_decode(json_encode($paramValueDataResult), true);
            $this->paramValueData = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengUappDateCountInfoResult=new UmengUappDateCountInfo();
                $UmengUappDateCountInfoResult->setArrayResult($arrayobject);
                $this->paramValueData [$i] = $UmengUappDateCountInfoResult;
            }
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("paramValueData", $this->arrayResult)) {
            $paramValueDataResult=$arrayResult['paramValueData'];
            $this->paramValueData = new UmengUappDateCountInfo();
            $this->paramValueData->setStdResult($paramValueDataResult);
        }
    }
}
