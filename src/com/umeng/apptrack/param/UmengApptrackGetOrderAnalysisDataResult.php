<?php
namespace Wcracker\UmengOpenAPI\com\umeng\apptrack\param;

use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Wcracker\UmengOpenAPI\com\umeng\apptrack\param\UmengApptrackGetPayAnalysis;

class UmengApptrackGetOrderAnalysisDataResult
{
    private $data;
    
    /**
    * @return
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置
     * @param array include @see UmengApptrackGetPayAnalysis[] $data

     * 此参数必填     */
    public function setData(UmengApptrackGetPayAnalysis $data)
    {
        $this->data = $data;
    }
    
            
    private $total;
    
    /**
    * @return 总数
    */
    public function getTotal()
    {
        return $this->total;
    }
    
    /**
     * 设置总数
     * @param Integer $total

     * 此参数必填     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("data", $this->stdResult)) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengApptrackGetPayAnalysisResult=new UmengApptrackGetPayAnalysis();
                $UmengApptrackGetPayAnalysisResult->setArrayResult($arrayobject);
                $this->data [$i] = $UmengApptrackGetPayAnalysisResult;
            }
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("total", $this->stdResult)) {
            $this->total = $this->stdResult->{"total"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("data", $this->arrayResult)) {
            $dataResult=$arrayResult['data'];
            $this->data = new UmengApptrackGetPayAnalysis();
            $this->data->setStdResult($dataResult);
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("total", $this->arrayResult)) {
            $this->total = $arrayResult['total'];
        }
    }
}
