<?php
//Multidimensional array
$foods = [
    "vegetables" => [

            "alu" => [
                     "yes"          
                     ],

             "piyaj" => [
                          "kha",         
                           "ja"          
                        ],
                    ],
    "drinks" => "drinko, drink, coffe, water",
    "fruits" => "banana, mango, jackfruits"
];

// echo $foods["vegetables"]["piyaj"][1];  
echo "\n";

$numbers = [
     [1,3,4],
     [1,3,4,5],
     [1,3,4,89],
     [1,3,4,55],
     [1,3,4,
       [1,3,5,78]
     ]
];
$numbers = [
    [1,3,4],
    [1,3,4,5],
    [1,3,4,89],
    [1,3,4,55],
    [1,3,4,
      [1,3,5,78]
    ]
];

echo $numbers[4][3][3];
// array_unshift($numbers,1,2,3);
// print_r($numbers);