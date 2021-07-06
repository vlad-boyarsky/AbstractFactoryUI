<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

$userPackageFactory = new UserPackageFactory;

/*
 *  Chain connect  *
 *
   echo $userPackageFactory
        ->getPackageFactory('vip')
        ->connectProBackground()
        ->connect();
*/

$package = $userPackageFactory->getPackageFactory('vip');

$connectPro = $package->connectProBackground();

$connectUI = $connectPro->connect();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>UI User Theme</title>
</head>

<body style="<?=$connectUI?>">

</body>

</html>
