<?php

namespace App;

use App\Factories\StandardPackageFactory;
use App\Factories\VipPackageFactory;
use App\Interfaces\UserPackageFactoryInterface;

class UserPackageFactory
{

    public function getPackageFactory($selected): UserPackageFactoryInterface
    {

        switch ($selected) {
            case 'standard':
                $factory = new StandardPackageFactory;
                break;

            case 'vip':
                $factory = new VipPackageFactory;
                break;
        }

        return $factory;
    }

}