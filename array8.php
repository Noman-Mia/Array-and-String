<?php
$name=null;

if(isset($name) && is_numeric($name) || $name !=""){
    echo"this is not empty";
}else{
    echo "this is empty";
}