<?php
require 'vendor/autoload.php';
$editor = new \App\Editor();
$history = new \App\History();
$editor->setContent('a');
$history->push($editor->createState());

$editor->setContent('b');
$history->push($editor->createState());

$editor->setContent('c');
$history->push($editor->createState());
echo $editor->restore($history->pop()). "\n";