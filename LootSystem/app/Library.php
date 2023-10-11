<?php

namespace App;

use ErrorException;
use App\Src\Enums\libraryShelf;

class Library
{
    private $shelves = [];

   public function addBook($book, $shelf) 
   {
        $result = match ($shelf) {
            libraryShelf::Ocean             => true,
            libraryShelf::Elemental         => true,
            libraryShelf::Technical         => true,
            libraryShelf::Clowns            => true,
            libraryShelf::Unclassified      => true,
            default                         => false,
        };

        if ($result) {
            if (isset($this->shelves[$shelf->value])) {
                array_push($this->shelves[$shelf->value], $book);
                echo "has";
            } else {
                $this->shelves[$shelf->value] = [$book];
                echo "has not";
            }
            
        }
   }

   public function printShelf()
   {
        echo '<pre>';
        print_r($this->shelves);
        echo '</pre>';
   }
}