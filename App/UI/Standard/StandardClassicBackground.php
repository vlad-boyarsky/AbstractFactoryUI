<?php

namespace App\UI;

use App\Interfaces\ClassicBackgroundInterface;

class StandardClassicBackground implements ClassicBackgroundInterface
{
    public function connect(): string
    {
        return 'classic bg';
    }
}