<?php


namespace App;


class Kindle implements eReaderInterface
{
   public function turnOn()
   {
        var_dump('turn the kindle on');
   }

   public function pressNext()
   {
        var_dump('press the next button to jump the page');
   }
}