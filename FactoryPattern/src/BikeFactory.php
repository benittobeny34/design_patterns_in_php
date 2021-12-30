<?php

namespace App;

class BikeFactory
{
    public function getBrandObject($name)
    {
        if ($name == 'pulsar') return new Pulsar();
        else if ($name == 'yamaha') return new Yamaha();
        else if ($name == 're') return new RoyalEnfield();
        else throw new \Exception('invalid brand name');
    }
}