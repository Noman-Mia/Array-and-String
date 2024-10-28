<?php
//concatenating several arrays
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$array3 = array(7, 8, 9);

$mergedArray = array_merge($array1, $array2, $array3);

print_r($mergedArray);
