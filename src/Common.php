<?php

namespace Wcracker\UmengOpenAPI;

class Common
{
    function is_array_key_exists($prop_name, $obj)
    {
        return property_exists($obj, $prop_name);
    }
}

