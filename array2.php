<?php
//array manipulation array_push,array_pop,
//array_unshift,array_shift

$peoples = [
   "noman",
   "faruk",
   "raju",
   "shihab",
   "hadi",
   "moinul"
];


$student = array_pop($peoples);
$student = array_shift($peoples);

array_unshift($peoples,"Khan");
array_push($peoples,"asif");

foreach ($peoples as $people){
    printf("%s \n", $people);
};

