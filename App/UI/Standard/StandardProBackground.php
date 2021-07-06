<?php

namespace App\UI\Standard;

use App\Interfaces\ProBackgroundInterface;

class StandardProBackground implements ProBackgroundInterface
{
    public function connect(): string
    {
        return 'background: url(../assets/img/standard-pro-background.jpg)';
    }
}