<?php
include_once 'connect.php';

if(isset($_POST["name"])){
$name = $_POST["name"];
$catagory = $_POST["catagory"];


$sql = 'SELECT id FROM catagory WHERE name = :catagory';

$statement = $db->prepare($sql);
$statement->bindParam(':catagory' , $catagory , pdo::PARAM_STR);
$statement->execute();

$temp = $statement->fetch(pdo::FETCH_ASSOC)["id"];

$sql = "INSERT INTO `product` (`id`, `name`, `catagoryID`) VALUES (NULL, ?, ?)";

$statement = $db->prepare($sql);
// $statement->bindParam(':catagoryID' , $temp, pdo::PARAM_INT);
$statement->bindParam(1 , $name );
$statement->bindParam(2 , $temp );
// $statement->execute(array(
//     ':catagoryID' => $temp ,
//     ':name' => $name
// ))

if($statement->execute()){
    header("location: index.php");
}else{
    print_r($statement->errorInfo());
}
}else{

    try{
        $catagory = $_POST["catagory"];
        $sql = 'INSERT INTO `catagory` (`id` , `name`) VALUES (NULL , ?)';
        $statement = $db->prepare($sql);
        $statement->bindParam(1,$catagory);
        $statement->execute();
        header("location: index.php");
    }catch(EXCEPTION $e){
        throw $e;
    }

}
?>