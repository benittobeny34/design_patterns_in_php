<?php


namespace App;


class Book implements BookInterface
{
    public function open()
    {
        var_dump('opening the paper book');
    }

    public function turnPage()
    {
        var_dump('Turning the page of paper book');
    }

}