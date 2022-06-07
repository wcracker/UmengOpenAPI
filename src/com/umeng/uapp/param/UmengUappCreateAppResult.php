<?php
namespace Wcracker\UmengOpenAPI\com\umeng\uapp\param;

use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Wcracker\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUappCreateAppResult
{
    private $code;
    
    /**
    * @return 状态码
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * 设置状态码
     * @param Long $code

     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
            
    private $success;
    
    /**
    * @return 状态
    */
    public function getSuccess()
    {
        return $this->success;
    }
    
    /**
     * 设置状态
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
            
    private $data;
    
    /**
    * @return 成功时返回新建应用key
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置成功时返回新建应用key
     * @param String $data

     * 此参数必填     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
            
    private $msg;
    
    /**
    * @return 返回消息
    */
    public function getMsg()
    {
        return $this->msg;
    }
    
    /**
     * 设置返回消息
     * @param String $msg

     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("data", $this->stdResult)) {
            $this->data = $this->stdResult->{"data"};
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("msg", $this->stdResult)) {
            $this->msg = $this->stdResult->{"msg"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("data", $this->arrayResult)) {
            $this->data = $arrayResult['data'];
        }
        if ((new \Wcracker\UmengOpenAPI\Common)->is_array_key_exists("msg", $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
    }
}
