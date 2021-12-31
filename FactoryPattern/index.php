<?php

require 'vendor/autoload.php';
use App\Pulsar;
//customer wants to buy different kind of bike based on their interest
$bikeFactory = new \App\BikeFactory();
$model = $bikeFactory->getBrandObject('yamaha');
$models = implode($model->availableModels(),',');

var_dump("The Brand of the bike {$model->brand()}. The available models are {$models}. For further details contact {$model->manager()}");
//
////customer1 one wants to buy pulsar
//
//$pulsar = new Pulsar();
//$models = implode($pulsar->availableModels(),',');
//var_dump("The Brand of the bike {$pulsar->brand()}. The available models are {$models}. For further details contact {$pulsar->manager()}");
//
////customer 2 wants to buy yamaha
//$yamaha = new \App\Yamaha();
//$models = implode($yamaha->availableModels(),',');
//var_dump("The Brand of the bike {$yamaha->brand()}. The available models are {$models}. For further details contact {$yamaha->manager()}");
//
////customer 3 wants to buy RE
//$re = new \App\RoyalEnfield();
//$models = implode($re->availableModels(),',');
//var_dump("The Brand of the bike {$re->brand()}. The available models are {$models}. For further details contact {$re->manager()}");
