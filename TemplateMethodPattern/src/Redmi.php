<?php


namespace App;


abstract class Redmi
{
    public function simSlot()
    {
        return 'yeah we have two sim slots';
    }

    public function company()
    {
        return 'xiaomi';
    }

    public function batteryType()
    {
        return 'irremovable and unreplacable';
    }

    public function companyLogo()
    {
        return 'xiaomi logo';
    }

    public abstract function batteryCapacity();

    public abstract function camera();
}