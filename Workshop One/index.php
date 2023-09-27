<?php
require __DIR__ . '/./vendor/autoload.php';
use App\Book;
use App\Library;
use App\Src\Enums\libraryShelf;

$library = new Library();

$book1 = new Book('IT', 'Fantasy', 600, 'Steven King, Steven    Ling , dfsdf dfdsdf    , d');
$book2 = new Book('IT', 'Fantasy', 300, 'Vtora kniga');
$book3 = new Book('Za ribite', 'Horror', 300, 'Vtora kniga');


$book1->setAuthors('tedooo dffdf, dfasf ddd, dafdfaa,');


$library->addBook($book1, libraryShelf::Clowns);
$library->addBook($book2, libraryShelf::Clowns);
$library->addBook($book3, libraryShelf::Ocean);

// echo libraryShelf::Clowns->value;
// echo $book1->getAuthors();

$library->printShelf();





