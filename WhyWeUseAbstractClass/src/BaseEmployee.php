<?php

namespace App;
abstract class BaseEmployee
{
    public $firstName;
    public $lastName;
    public $age;

    public function getFullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }

}