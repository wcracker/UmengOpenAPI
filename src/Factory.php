<?php

namespace Wcracker\UmengOpenAPI;

use Wcracker\UmengOpenAPI\App\Apptrack;
use Wcracker\UmengOpenAPI\App\Uapp;
use Wcracker\UmengOpenAPI\App\Umini;

class Factory
{
    public static function umini(array $config)
    {
        return new Umini($config);
    }

    public static function uapp(array $config)
    {
        return new Uapp($config);
    }

    public static function apptrack(array $config)
    {
        return new Apptrack($config);
    }
}