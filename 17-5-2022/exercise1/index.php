<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise-1</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>


<?php 
include_once 'connect.php';

$sql = 'SELECT name FROM catagory';
$statement = $db->prepare($sql);

if(!$statement->execute()){
    echo $statement->errorCode();
}
?>

<div class="container" style="width: 50%; margin-top:5%;" >
<form action="edit.php" method="POST">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
    <small id="emailHelp" class="form-text text-muted">Enter the name of the product</small>
    <select required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="catagory" >
    <option value="" disabled selected>Catagory</option>
            <?php
                for($i = 0; $data = $statement->fetch(pdo::FETCH_ASSOC);$i++){

            ?>
                    <option><?php echo $data["name"]; ?></option>
            <?php
                }
            ?>
    </select>
    <button type="submit" class="btn btn-dark">add</button>
</form>

<form action="edit.php" method="POST" style="margin: 20px 0;">
<label for="Catagory">Catagory</label>
    <input type="text" class="form-control" id="Catagory" aria-describedby="emailHelp" placeholder="Enter Catagory" name="catagory" required>
    <small id="emailHelp" class="form-text text-muted">Enter the name of the Catagory</small>
    <br>
    <button type="submit" class="btn btn-dark">add</button>
</form>

</div>
<script>

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>