<?php


include 'connect.php';

// $name = $_GET["name"];
// $description = $_GET["description"];
// $time = $_GET["time"];
// $location = $_GET["location"];
// $teacherName = $_GET["teacherName"];

// $query = "INSERT INTO `courses` (`id`, `name`, `description`, `time`, `location`, `teacher name`) VALUES (null, '$name', '$description', '$time', '$location', '$teacherName')";

// $query = "UPDATE courses
// SET name = 'Alfred Schmidt'
// WHERE id = 1;";

// $query = "DELETE FROM courses where id = 5;";

$query = "SELECT * FROM courses";

$result = mysqli_query($connection , $query);

if($result == false){
    
    echo "Error: " . $query. "<br>" .$connection->error;
}


$arr =  $result->fetch_all();


echo "<table border='1px'>
<tr>
    <th>id</th>
    <th>name</th>
    <th>Description</th>
    <th>Time</th>
    <th>Teacher name</th>
</tr>
";
foreach($arr as $key){
    echo "<tr>";
        foreach($key as $value)
            echo "<td>" .$value ."</td>";
            
    echo "</tr>";
}
echo "</table>";
?>

