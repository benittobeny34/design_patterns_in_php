<?php

require 'vendor/autoload.php';

use App\Book;
use App\BookInterface;
use App\eReaderAdapter;
use App\Kindle;
use App\Nook;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person())->read(new eReaderAdapter(new Kindle()));
(new Person())->read(new Book());
(new Person())->read(new eReaderAdapter(new Nook()));