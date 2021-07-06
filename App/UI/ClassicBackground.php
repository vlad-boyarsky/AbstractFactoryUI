<?php

namespace App\UI;

use App\Interfaces\ClassicBackgroundInterface;

class ClassicBackground implements ClassicBackgroundInterface
{
    public function connect(): string
    {
        return 'classic bg';
    }
}