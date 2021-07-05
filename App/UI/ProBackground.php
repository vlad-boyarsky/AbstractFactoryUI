<?php


namespace App\UI;


use App\Interfaces\ProBackgroundInterface;

class ProBackground implements ProBackgroundInterface
{
    public function connect(): string
    {
        return 'pro bg';
    }
}