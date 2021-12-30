<?php


namespace App;


class Nook implements eReaderInterface
{

    public function turnOn()
    {
        var_dump( "Turn on the Nook");
    }

    public function pressNext()
    {
        var_dump("Press the Next button in Nook");
    }
}