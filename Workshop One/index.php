<?php
require __DIR__ . '/./vendor/autoload.php';
use App\Book;

$book1 = new Book('IT', 'Fantasy', 600, 'Steven King, Steven    Ling , dfsdf dfdsdf    , d');



echo '<pre>',print_r($book1,1),'</pre>';
