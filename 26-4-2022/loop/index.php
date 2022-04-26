<?php

echo "<br>";
echo "<br>";

$sum = 0;
for($i = 0; $i <= 30; $i++){
    $sum += $i;
}

echo $sum;

echo "<br>";
echo "<br>";


for($i = 0; $i < 5 ; $i++){
    $counter = 5 - $i;
    for($j = 1; $j <= 5; $j++){
        if($counter <= $j){
            echo chr(65+$i);
        }else{
            echo "A";
        }
    }
    echo "<br>";
}


echo "<br>";
echo "<br>";

for($i = 1; $i <= 5 ; $i++){
    $counter = 5 - $i;
    for($j = 1; $j <= 5; $j++){
        if($counter < $j){
            echo $i;
        }else{
            echo 1;
        }
    }
    echo "<br>";
}



echo "<br>";
echo "<br>";

for($i = 1; $i <= 5 ;$i++){
    for($j = 1;$j <= 5;$j++){
        if($i == $j){
            echo $i;
        }else{
            echo 0;
        }
    }

    echo "<br>";
}

echo "<br>";
echo "<br>";



for($i = 5; $i > 0; $i--){
static $factorial = 1;
$factorial *= $i;
}


echo $factorial;


echo "<br>";
echo "<br>";

$num1 = 0;
$num2 = 1;
$n = 30;
echo "$num1, $num2";
for($i = 1; $i <= $n; $i++) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    echo ", $num3"; 
}


echo "<br>";
echo "<br>";



echo '<table id="time-table" border="2">';
for($i =1;$i <= 5;$i++){
    echo "<tr>";
for($j =1;$j <= 6;$j++){
    $mult = $i * $j;
    echo "<td>"; echo $i ." * " .$j ."= " .$mult ; echo "</td>";
}
    echo "</tr>";
}
echo "</table>";



echo "<br>";
echo "<br>";


for($i =1;$i <= 50;$i++){
if(($i % 5 == 0) && ($i % 3 == 0)){
    echo "FizzBuzz <br>";
}else if($i % 5 == 0){
    echo "Buzz <br>";
}else if($i % 3 == 0){
    echo "Fizz <br>"; 
}
}


echo "<br>";
echo "<br>";

$n = 5;
$count = 0;
for($i = 1; $i <= $n;$i++){
    for($j = 0; $j < $i; $j++){
        $count++;
       echo $count ." ";
    
}
echo "<br>";
}

echo "<br>";
echo "<br>";

// $flag = false;
// for($i = 1; $i > 0;){
//     for($j = 1; $j < 12; $j++){
//             echo chr(64 + $i);
        

    
//     }

//     echo "<br>";
//     if($i < 5 && !$flag){
//         $i++;
//     }else{
//         $flag = true;
//         $i--;
//     }
// }


for($i = 0, $k = 0, $l = 2; $i < 5; $k++){
            if($k == abs((2) - $i)){
                for($j = 0; $j < 2 * abs(abs($l) - (2)) + 1; $j++)
                     echo chr(65 + $j);

                echo"<br>";
                $i++;
                $k = -1;
                $l--;
                continue;
            }
            echo"&#160;";
        }

?>