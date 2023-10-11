<?php
require __DIR__ . '/./vendor/autoload.php';
use App\Src\Models\Item;
use App\Src\Common\ItemType;
use App\Src\Common\ItemRarity;
use App\Src\Models\Hero;

$a = new Item('fsfsdf', ItemType::ARMOR, ItemRarity::MAGIC, [1,2,3]);
$amidamaro = new Hero('Amidamaro');

$arr = [];

$arr[ItemType::AMULET->name] = null;
$arr[ItemType::ARMOR->name] = null;
$arr[ItemType::WEAPON->name] = null;

$arr[]=$amidamaro;
echo "<pre>";
print_r($arr);
echo "</pre>";

print_r($amidamaro->health);
$amidamaro->items += [ItemType::AMULET->name => 'dfsdfsd'];
print_r($amidamaro->printHeroInfo());





