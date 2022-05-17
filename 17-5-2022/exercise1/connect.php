<?php

try{
$db = new PDO("mysql:host=localhost; dbname=commerce", "root" , '');
}catch(PDOException $e){
    echo $db->errorCode();
}







?>