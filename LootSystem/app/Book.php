<?php

namespace App;

use ErrorException;
use App\Src\Enums\BookGenre;

class Book
{
    private $title;
    private $genre;
    private $pages;
    private $authors;

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
                    return trim($el) !== "";
                }
            });

            return implode(" ", $filtered);

        }, explode(",", $authors));

        $this->title = $title;
        $this->genre = $genre;
        $this->pages = $pages;
        $this->authors = substr(implode(", ", array_map('trim', $filteredString)), 0, -2);
    }

    function getTitle() {
        return $this->title;
    }
    
    function setTitle($value) {
        $this->title = $value;
    }

    function getGenre() {
        return $this->genre;
    }

    function setGenre($value) {
        $this->genre = $value;
    }

    function getPages() {
        return $this->pages;
    }

    function setPages($value) {
        $this->pages = $value;
    }

    function getAuthors() {
        return $this->authors;
    }

    function setAuthors($value) {
        $filteredString = array_map( function($item) {
            $arr = explode(" ", $item);
            $filtered = array_filter($arr, function($el) {
                if (strlen($el) > 1) {
                    return trim($el) !== "";
                }
            });

            return implode(" ", $filtered);

        }, explode(",", $value));

        $this->authors = substr(implode(", ", array_map('trim', $filteredString)), 0, -1);
    }
}