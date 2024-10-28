<?php
// Difference in Indexed Arrays
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(3, 4, 6, 7);

$difference = array_diff($array1, $array2);
print_r($difference);

// Difference in Associative Arrays
$array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
$array2 = array("a" => "apple", "b" => "blueberry");

$difference = array_diff_assoc($array1, $array2);
print_r($difference);

// Intersection in Indexed Arrays
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(3, 4, 6, 7);

$intersection = array_intersect($array1, $array2);
print_r($intersection);

// Intersection in Associative Arrays
$array1 = array("a" => "apple", "b" => "banana", "c" => "cherry");
$array2 = array("a" => "apple", "b" => "blueberry");

$intersection = array_intersect_assoc($array1, $array2);
print_r($intersection);
