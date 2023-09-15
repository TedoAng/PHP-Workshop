<?php

namespace App;

use ErrorException;
use App\Src\Enums\BookGenre;

class Book
{
    public $title;
    public $genre;
    public $pages;
    public $authors;

    function __construct($title, $genre, $pages, $authors)
    {
        if (gettype($title)!=='string' || strlen($title) < 1 || strlen($title) > 255) {
            throw new ErrorException('Invalid title');
        }
        if (!array_search($genre, array_column(BookGenre::cases(), "name"))) {
            throw new ErrorException('Invalid genre!');
        }
        if (gettype($pages)!=='integer'|| $pages % 1 !== 0) {
            throw new ErrorException('Invalid pages value!');
        }

        
        $filteredString = array_map( function($item) {
            $arr = explode(" ", $item);
            $filtered = array_filter($arr, function($el) {
                if (strlen($el) > 1) {
                    echo $el.'|';
                    return trim($el) !== "";
                }
            });

            return implode(" ", $filtered);

        }, explode(",", $authors));

        $this->title = $title;
        $this->genre = $genre;
        $this->pages = $pages;
        $this->authors = implode(", ", array_map('trim', $filteredString));
    }
}