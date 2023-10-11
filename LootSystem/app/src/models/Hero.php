<?php

namespace App\Src\Models;

use App\Src\Common\ItemType;
use App\Src\Common\StatType;
use App\Src\Models\Item;

class Hero
{
    private $name;
    private $health = 100;
    private $strength = 25;
    private $intelligence = 20;
    private $defense = 20;
    private $damage = 10;
    private $critChance = 0;

    private $items = [];

    public function __construct($name)
    {
        if (!is_string($name) || strlen($name) < 2 || strlen($name) > 100) {
            throw new \Exception("Invalid Hero name!");
        }

        $this->name = $name;
        $this->items[ItemType::AMULET->name] = null;
        $this->items[ItemType::ARMOR->name] = null;
        $this->items[ItemType::WEAPON->name] = null;

    }

    public function equip($item)
    {
        if (!$item instanceof Item) {
            throw new \Exception("Invalid Item!");
        }

        switch ($item->type) {
            case "ARMOR":
                $this->items[ItemType::ARMOR->name] = $item;
                break;
            case "WEAPON":
                $this->items[ItemType::WEAPON->name] = $item;
                break;
            case "AMULET":
                $this->items[ItemType::AMULET->name] = $item;
                break;
        }
    }

    public function __get($item)
    {
        return $this->{$item};
    }

    public function __set($item, $value)
    {
        return $this->{$item} = $value;
    }

    public function printHeroInfo()
    {
        return "
        <br>
        Name: {$this->name} <br>
        Health: {$this->health} <br>
        Strength: {$this->strength} <br>
        Intelligence: {$this->intelligence} <br>
        Defense: {$this->defense} <br>
        Damage: {$this->damage} <br>
        Crit Chance: {$this->critChance} <br>
        ";
    }

    private function calculateStats($value, $type)
    {
        
    }
}
