<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use ArrayObject;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Wcracker\UmengOpenAPI\com\umeng\uapp\param\UmengUappChannelInfo;

class UmengUappGetChannelDataResult
{
    private $channelInfos;

    /**
    * @return
    */
    public function getChannelInfos()
    {
        return $this->channelInfos;
    }

    /**
     * 设置
     * @param array include @see UmengUappChannelInfo[] $channelInfos

     * 此参数必填     */
    public function setChannelInfos(UmengUappChannelInfo $channelInfos)
    {
        $this->channelInfos = $channelInfos;
    }


    private $page;

    /**
    * @return 页数
    */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * 设置页数
     * @param Integer $page

     * 此参数必填     */
    public function setPage($page)
    {
        $this->page = $page;
    }


    private $totalPage;

    /**
    * @return 总页数
    */
    public function getTotalPage()
    {
        return $this->totalPage;
    }

    /**
     * 设置总页数
     * @param Integer $totalPage

     * 此参数必填     */
    public function setTotalPage($totalPage)
    {
        $this->totalPage = $totalPage;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("channelInfos", $this->stdResult)) {
            $channelInfosResult=$this->stdResult->{"channelInfos"};
            $object = json_decode(json_encode($channelInfosResult), true);
            $this->channelInfos = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengUappChannelInfoResult=new UmengUappChannelInfo();
                $UmengUappChannelInfoResult->setArrayResult($arrayobject);
                $this->channelInfos [$i] = $UmengUappChannelInfoResult;
            }
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("page", $this->stdResult)) {
            $this->page = $this->stdResult->{"page"};
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("totalPage", $this->stdResult)) {
            $this->totalPage = $this->stdResult->{"totalPage"};
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("channelInfos", $this->arrayResult)) {
            $channelInfosResult=$arrayResult['channelInfos'];
            $this->channelInfos = new UmengUappChannelInfo();
            $this->channelInfos->setStdResult($channelInfosResult);
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("page", $this->arrayResult)) {
            $this->page = $arrayResult['page'];
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("totalPage", $this->arrayResult)) {
            $this->totalPage = $arrayResult['totalPage'];
        }
    }
}
