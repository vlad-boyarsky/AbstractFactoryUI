<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

$userPackageFactory = new UserPackageFactory;

echo $userPackageFactory
        ->getPackageFactory('vip')
        ->connectProBackground()
        ->connect();

