<?php
require __DIR__ . '/./vendor/autoload.php';
use App\Src\Models\Item;
use App\Src\Common\ItemType;
use App\Src\Common\ItemRarity;

$a = new Item('fsfsdf', ItemType::ARMOR, ItemRarity::MAGIC, [1,2,3]);

print_r($a->stats);





