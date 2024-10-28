<?php
//array_slice
$numbers = array(80,70,60,50,40,30,20,10,0);
$number= array_slice($numbers,2,4);
print_r($number);

//array_slice from associative array
$letters = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=> 5);
$letter = array_slice($letters ,1,3, true);
print_r($letter);