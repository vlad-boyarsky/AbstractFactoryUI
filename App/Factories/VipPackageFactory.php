<?php

namespace App\Factories;

use App\Interfaces\ClassicBackgroundInterface;
use App\Interfaces\ProBackgroundInterface;
use App\Interfaces\UserPackageFactoryInterface;
use App\UI\ClassicBackground;
use App\UI\ProBackground;

class VipPackageFactory implements UserPackageFactoryInterface
{

    public function connectClassicBackground(): ClassicBackgroundInterface
    {
        echo __CLASS__ . "<br/>";
        return new ClassicBackground;
    }

    public function connectProBackground(): ProBackgroundInterface
    {
        echo __CLASS__ . "<br/>";
        return new ProBackground;
    }
}