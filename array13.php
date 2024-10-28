<?php

// Searching in Indexed Array
echo "Searching in Indexed Array:\n";
$numbers = array(1, 2, 3, 4, 5);

// Check if a value exists in the array
if (in_array(3, $numbers)) {
    echo "3 is in the array.\n";
} else {
    echo "3 is not in the array.\n";
}

// Get the index of a specific value
$index = array_search(3, $numbers);
if ($index !== false) {
    echo "3 is at index $index.\n";
} else {
    echo "3 is not in the array.\n";
}
echo "\n";

// Searching in Associative Array
echo "Searching in Associative Array:\n";
$fruits = array("a" => "apple", "b" => "banana", "c" => "cherry");

// Check if a value exists in the associative array
if (in_array("banana", $fruits)) {
    echo "banana is in the array.\n";
} else {
    echo "banana is not in the array.\n";
}

// Get the key associated with a specific value
$key = array_search("banana", $fruits);
if ($key !== false) {
    echo "banana is at key $key.\n";
} else {
    echo "banana is not in the array.\n";
}

// Check if a specific key exists in the associative array
if (array_key_exists("b", $fruits)) {
    echo "Key 'b' exists in the array.\n";
} else {
    echo "Key 'b' does not exist in the array.\n";
}

?>
