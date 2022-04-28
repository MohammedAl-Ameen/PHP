<?php 

$op =  $_GET["btn"];
$num1 = $_GET["fnumber"];
$num2 = $_GET["snumber"];

if($op == "add"){
    echo $num1 + $num2;
}else if($op == "sub"){
    echo $num1 - $num2;
}else if($op == "multiple"){
    echo $num1 * $num2;
}else if($op == "divide"){
    echo $num1 / $num2;
}




?>