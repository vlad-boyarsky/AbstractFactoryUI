<?php


namespace App\Factories;

use App\Interfaces\ClassicBackgroundInterface;
use App\Interfaces\ProBackgroundInterface;
use App\Interfaces\UserPackageFactoryInterface;
use App\UI\ClassicBackground;
use App\UI\ProBackground;

class StandardPackageFactory implements UserPackageFactoryInterface
{

    public function connectClassicBackground(): ClassicBackgroundInterface
    {
        return new ClassicBackground;
    }

    public function connectProBackground(): ProBackgroundInterface
    {
        return new ProBackground;
    }
}