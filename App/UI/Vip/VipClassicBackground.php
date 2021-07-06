<?php

namespace App\UI\Vip;

use App\Interfaces\ClassicBackgroundInterface;

class VipClassicBackground implements ClassicBackgroundInterface
{
    public function connect(): string
    {
        return 'background: gold';
    }
}