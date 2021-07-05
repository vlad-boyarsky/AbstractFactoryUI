<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

$userPackageFactory = new UserPackageFactory;

$package = $userPackageFactory->getPackageFactory('vip');

echo $package->connectClassicBackground();