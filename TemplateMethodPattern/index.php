<?php

require 'vendor/autoload.php';

//
// this is for template method pattern using VeggySub and turkeysub
(new \App\VeggySub())->make();
echo "------------\n";
(new \App\TurkeySub())->make();

//$redmiNote4 = new \App\RedmiNote9Pro();
//
//var_dump($redmiNote4->camera());