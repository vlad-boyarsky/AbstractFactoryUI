<?php

namespace App\Factories;

use App\Interfaces\ClassicBackgroundInterface;
use App\Interfaces\ProBackgroundInterface;
use App\Interfaces\UserPackageFactoryInterface;
use App\UI\Vip\VipClassicBackground;
use App\UI\Vip\VipProBackground;

class VipPackageFactory implements UserPackageFactoryInterface
{

    public function connectClassicBackground(): ClassicBackgroundInterface
    {
        echo __CLASS__ . "<br/>";
        return new VipClassicBackground;
    }

    public function connectProBackground(): ProBackgroundInterface
    {
        echo __CLASS__ . "<br/>";
        return new VipProBackground;
    }
}