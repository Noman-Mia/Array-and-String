<?php
//associative array to string serialize,json
$peoples = [
     "fname" => "noman",
     "lname" => "khan",
     "age" => 20,
     "study" => "diploma"
];

// echo $peoples["fname"]." ".$peoples["lname"];
printf("%s %s \n", $peoples['fname'],$peoples['lname']);

//serialize
$serialize = serialize($peoples);
echo"$serialize";
echo"\n";

//unserialize
$unSerialized = unserialize($serialize);
print_r($unSerialized);

// json_encode, json_decode
$jsonData = json_encode($peoples);
echo $jsonData;

$jsonDecode = json_decode($jsonData,true);
print_r($jsonDecode);