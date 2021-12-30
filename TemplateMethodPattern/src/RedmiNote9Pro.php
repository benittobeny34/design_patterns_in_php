<?php


namespace App;


class RedmiNote9Pro extends Redmi
{
    public function batteryCapacity()
    {
        return '5000 mah';
    }

    public function camera()
    {
        return "16 mp front 64 mp rear camera";
    }

}