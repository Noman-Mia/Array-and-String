<?php

//array_walk
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

array_walk($numbers, function(&$num) {
    if ($num % 2 === 0) {
        $num *= $num;
    }
});

print_r($numbers);

//array_map
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function($num) {
    return $num * $num;
}, $numbers);

print_r($squaredNumbers);

//array-filter
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 === 0;
});

print_r($evenNumbers);

//array_reduce
$numbers = [1, 2, 3, 4, 5];

$product = array_reduce($numbers, function($carry, $num) {
    return $carry * $num;
}, 1);

echo $product;

//list function
$data = ["John", "Doe", 25];

list($firstName, $lastName, $age) = $data;

echo "First Name: $firstName\n";
echo "Last Name: $lastName\n";
echo "Age: $age\n";
