<?php
//array_splice
$numbers = array(80,70,60,50,40,30,20,10,0);
$newNumber = array(100,200,300);

$number = array_splice($numbers, 0, 3, $newNumber);

echo "Removed elements: ";
print_r($number);

echo "Modified array: ";
print_r($numbers);


