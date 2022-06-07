<?php
namespace Wcracker\UmengOpenAPI\com\alibaba\openapi\client\serialize;

interface DeSerializer
{
    public function supportedContentType();
    public function deSerialize($deSerializer, $resultType, $charSet = null);
    public function buildException($deSerializer, $resultType, $charSet = null);
}
