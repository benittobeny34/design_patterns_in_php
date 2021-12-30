<?php

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($b, $a);

print_r(array_walk($c, function($value) {
    return $value;
}));