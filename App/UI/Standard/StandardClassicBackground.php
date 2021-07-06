<?php

namespace App\UI\Standard;

use App\Interfaces\ClassicBackgroundInterface;

class StandardClassicBackground implements ClassicBackgroundInterface
{
    public function connect(): string
    {
        return 'background: wheat';
    }
}