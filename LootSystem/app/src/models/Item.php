<?php
namespace App\Src\Models;

use App\Src\Common\ItemType;
use App\Src\Common\StatType;
use App\Src\Common\ItemRarity;

class Item
{
    private $name;
    private $type;
    private $rarity;
    private $stats= [];

    public function __construct($name, $type, $rarity, $stats)
    {
        if (!is_string($name) || strlen($name) < 2 || strlen($name) > 100) {
            throw new \Exception("Invalid name!");
        }
        if (!$type instanceof ItemType) {
            throw new \Exception("Invalid item type!");
        }
        if (!$rarity instanceof ItemRarity) {
            throw new \Exception("Invalid item rarity!");
        }
        $this->name = $name;
        $this->type = $type;
        $this->rarity = $rarity;
        $this->stats[] = $stats;
    }

    public function __get($name)
    {
        return $this->{$name};
    }
}