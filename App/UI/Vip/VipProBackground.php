<?php

namespace App\UI\Vip;

use App\Interfaces\ProBackgroundInterface;

class VipProBackground implements ProBackgroundInterface
{
    public function connect(): string
    {
        return 'pro bg';
    }
}