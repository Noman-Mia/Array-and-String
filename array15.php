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

//range function
$evenNumbers = range(2, 20, 2);
print_r($evenNumbers);

//shuffling 
$numbers = range(1, 10);
shuffle($numbers);
print_r($numbers);

//random number
$randomNumber = mt_rand(1, 100); // Generates a random number between 1 and 100
echo $randomNumber;

