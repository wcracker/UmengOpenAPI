<?php
namespace Wcracker\UmengOpenAPI\com\alibaba\openapi\client\exception;

use RuntimeException;

class OceanException extends RuntimeException
{
    private $errorCode;
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
    public function getErrorCode()
    {
        return $this->errorCode;
    }
}
