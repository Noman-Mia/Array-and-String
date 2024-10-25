<?php

//associative array
$foods = [
   "vegetables"=>"sak,mas,alu,mula",
   "drinks"=>"drinko, drink, coffe, water",
   "fruits"=>"banana, mango, jackfruits"
];

// $foods["fruits"]= $foods["fruits"]." "."orange,apple";
$foods["fruits \n"].= "orange,apple";

foreach($foods as $key => $value){
    $foods [$key]=$value;
    echo "$value \n";
};