<?php

namespace App\Src\Engine;

class GameManager
{
    static function createHero($name)
    {
        return new Hero($name);
    }
}