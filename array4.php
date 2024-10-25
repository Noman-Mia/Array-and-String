<?php
//string to array,array to string
$vegetables= explode(", ", "green, chili, onion, read");
                            //delimiter
// var_dump($vegetables);
// echo $vegetables[1];
$string = join(", ",$vegetables);
echo"$string";

//preg_split 

$vegetable = preg_split("/, /", "green, chili, onion, read-write");
print_r($vegetable);
