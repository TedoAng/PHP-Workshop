<?php

namespace App\Src\Engine;

use App\Src\Models\Hero;

class GameManager
{
    static function createHero($name)
    {
        return new Hero($name);
    }
}