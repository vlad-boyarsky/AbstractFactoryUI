<?php

namespace App\UI;

use App\Interfaces\ProBackgroundInterface;

class VipProBackground implements ProBackgroundInterface
{
    public function connect(): string
    {
        return 'pro bg';
    }
}