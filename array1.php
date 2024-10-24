<?php
$man = array("noman",23,"khan","faruk");

// var_dump($man); //data type check

 $n=count($man); //check how much value
 echo"$n";

 for($i = 0; $i <= $n; $i++){
    echo $man[$i] ."\n";
 };

 for($i = $n-1; $i >= 0; $i--){
    echo $man[$i] ."\n";
 };