<?php

namespace App;

class PartTimeEmployee extends BaseEmployee
{
    public $perHourSalary = 110;
    public $noOfWorkingHours;

    public function getMonthlySalary()
    {
        return $this->perHourSalary * $this->noOfWorkingHours;
    }
}