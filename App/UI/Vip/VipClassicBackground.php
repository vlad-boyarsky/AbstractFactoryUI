<?php

namespace App\UI;

use App\Interfaces\ClassicBackgroundInterface;

class VipClassicBackground implements ClassicBackgroundInterface
{
    public function connect(): string
    {
        return 'classic bg';
    }
}