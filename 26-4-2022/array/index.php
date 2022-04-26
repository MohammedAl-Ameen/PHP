<?php 
$colors = array('white', 'green', 'red');

echo "<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul>";


$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

foreach($cities as $country => $city)
    echo "The capital of $country is $city <br>";

$count = 0;
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
foreach($color as $key => $value){
    echo '<br>' .$value .'<br>';
    break; 
}


$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach($fruits as $key => $value){
    echo '<br>' .$value;
}

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$min = array();
$max = array();
$sum = 0;
sort($temperatures);
$counter = 0;
foreach($temperatures as $value){
    $sum += $value;
    if($counter != 5){
        $min[$counter] = $value;
    }

    if($counter >= (count($temperatures) - 5)){
        static $index = 0;
        $max[$index] = $value;
        $index++;
    }

    $counter++;

}   echo "<br>";

    $avarage = $sum/count($temperatures);
    echo "<br>The Average Temperature is: $avarage <br>";
    echo "List of five lowest temperatures: ";
    for($i = 0; $i<5;$i++){
        echo "$min[$i], ";
    }
    echo "<br>List of five highest temperatures: ";
    for($i = 0; $i<5;$i++){
        echo "$max[$i], ";
    }


    echo "<br>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

    $i = count($array1);
    foreach($array2 as $key => $value){
        if(is_numeric($key)){
            $array1[$i] = $value;
            $i++;
        }else{
            $array1[$key] = $value;
        }
        
    }

    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "<br>";

    for($i = 200; $i <= 250;$i++)
        if($i % 4 == 0)
            echo "$i,";
        
    echo "<br>";

    $words =  array("abcd","abc","de","hjjj","g","wer");
    $max = strlen($words[0]);
    $min = strlen($words[0]);
    foreach($words as $value){
        if($max < strlen($value))
            $max = strlen($value);
        
        if($min > strlen($value))
            $min = strlen($value);
    }
    echo "<br>";
    echo "The shortest array length is $min. The longest array length is $max";

    echo "<br>";
    echo "<br>";

    $n = 11;
    $m = 20;
 
    for($i = 0; $i < 9; $i++){
        $number = rand($n,$m);
        echo "$number ";
    }

    echo "<br>";
    echo "<br>";

    $array1 = array( 2, 0, 10, 12, 6);
    $min = $array1[0];
    foreach($array1 as $value)
        if($value != 0)
            if($value < $min)
                $min = $value;
        
    echo $min;

    echo "<br>";
    echo "<br>";
?>