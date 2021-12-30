<?php

$registerNo = '1005';

switch ($registerNo) {
    case '1001' : echo "my name is Ajay \n";
                  break;
    case '1002': echo "my name is Benitto \n";
                  break;
    case '1003': echo "my name is Cameron \n";
                 break;
    default:  echo "No matching records for this {$registerNo} please check your register No. \n";
}