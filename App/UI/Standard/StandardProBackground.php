<?php

namespace App\UI\Standard;

use App\Interfaces\ProBackgroundInterface;

class StandardProBackground implements ProBackgroundInterface
{
    public function connect(): string
    {
        return 'pro bg';
    }
}