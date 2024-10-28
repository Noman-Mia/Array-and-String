<?php
// indexed array sorting
//Ascending Order
$numbers = array(3, 1, 4, 1, 5, 9);
sort($numbers);
print_r($numbers);

//Descending Order
$numbers = array(3, 1, 4, 1, 5, 9);
rsort($numbers);
print_r($numbers);


//associative array sorting

//Sort by Values (Ascending)
$fruits = array("b" => "banana", "a" => "apple", "c" => "cherry");
asort($fruits);
print_r($fruits);

//Sort by Values (Descending)
$fruits = array("b" => "banana", "a" => "apple", "c" => "cherry");
arsort($fruits);
print_r($fruits);

//Sort by Keys (Ascending)
$fruits = array("b" => "banana", "a" => "apple", "c" => "cherry");
ksort($fruits);
print_r($fruits);

//Sort by Keys (Descending)
$fruits = array("b" => "banana", "a" => "apple", "c" => "cherry");
krsort($fruits);
print_r($fruits);
