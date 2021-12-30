<?php

namespace App;

class FullTimeEmployee extends BaseEmployee
{
    protected $perDaySalary = 800;
    public $noOfWorkingDays;

    public function getMonthlySalary()
    {
        return $this->perDaySalary * $this->noOfWorkingDays;
    }
}