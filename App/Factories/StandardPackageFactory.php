<?php

namespace App\Factories;

use App\Interfaces\ClassicBackgroundInterface;
use App\Interfaces\ProBackgroundInterface;
use App\Interfaces\UserPackageFactoryInterface;
use App\UI\Standard\StandardClassicBackground;
use App\UI\Standard\StandardProBackground;

class StandardPackageFactory implements UserPackageFactoryInterface
{

    public function connectClassicBackground(): ClassicBackgroundInterface
    {
        return new StandardClassicBackground;
    }

    public function connectProBackground(): ProBackgroundInterface
    {
        return new StandardProBackground;
    }
}