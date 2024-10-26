<?php
//copy by value
$persons= ["fname"=>"noman","lname"=>"khan"];
$newPersons= $persons;
print_r($newPersons);

//copy by references
function printData(&$persons){
    $persons["fname"].=" changed";
    print_r($persons);
};
printData($persons);

print_r($persons);


// associative array data remove unset
unset($persons["lname"]);
print_r($persons);