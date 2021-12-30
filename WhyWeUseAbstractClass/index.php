<?php


require 'vendor/autoload.php';

$ftp = new \App\FullTimeEmployee();

$ftp->firstName = 'Benitto';
$ftp->lastName = 'raj';
$ftp->age = '21';
$ftp->noOfWorkingDays = 23;
var_dump($ftp->getFullName());
var_dump($ftp->getMonthlySalary());