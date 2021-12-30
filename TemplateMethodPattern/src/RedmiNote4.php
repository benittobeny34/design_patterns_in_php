<?php


namespace App;


class RedmiNote4 extends Redmi
{
    public function batteryCapacity()
    {
        return '4400 mah';
    }

    public function camera()
    {
        return "12 mp front 16 mp rear camera";
    }
}