<?php

use App\PhoneBuilder;

require "vendor/autoload.php";

//Builder pattern builds a complex object using simple objects and uses step by step approach.
//A Builder class builds the final object step by step. This builder is independent of other objects.

//we don't worry about the order of the parameters in the constructor.
$phone = new PhoneBuilder();
echo $phone->setBattery('5000')->setOs('ios')->setRam(3)->setProcessor('snapdragon')->getPhone();