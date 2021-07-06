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
        return new VipClassicBackground;
    }

    public function connectProBackground(): ProBackgroundInterface
    {
        return new VipProBackground;
    }
}