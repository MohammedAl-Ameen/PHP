<?php

$email = $_POST["email"];
$password = $_POST["password"];

if(($email == "hhmohm831@gmail.com") && ($password == "123456789")){
    echo "Welcome";
}else{
    echo "Your password or your email is incorrect";
}

?>