<?php

$year = 2022;
$year = readline();

if($year % 4 == 0){
    echo "This year is leap";
}else{
    echo "This year is not leap";
}

echo "<br>";
echo "<br>";

$temperature = 18;

if($temperature < 20){
    echo "It's winter time ";
}else{
    echo "It's summer time";
}

echo "<br>";
echo "<br>";

$firstInteger = 2;
$secondInteger = 2;
$output = $firstInteger + $secondInteger;
if($firstInteger == $secondInteger)
    $output = $output * 3;

echo $output;

echo "<br>";
echo "<br>";

$firstInteger = 10;
$secondInteger = 20;
$output = $firstInteger + $secondInteger;
if($output > 29){
 echo "true";
}else{
 echo "false";
}

echo "<br>";
echo "<br>";

$firstInteger = 20;
if($firstInteger % 3){
    echo "false";
}else{
    echo "true";
}

echo "<br>";
echo "<br>";


if($firstInteger > 19 && $firstInteger < 51){
    echo "true";
}else{
    echo "false";
}

echo "<br>";
echo "<br>";


$numbers = array(1, 9, 3);
$max = $numbers[0];

for($i = 1 ; $i <= 2; $i++)
    if($numbers[$i] > $max)
        $max = $numbers[$i];
    
echo $max;


echo "<br>";
echo "<br>";

$units = 300;
$bill = 0.0;

if($units != 0){
    if($units < 51){
        $bill = $units * 2.5;
    }else{
        $bill = 50 * 2.5;
        if($units < 101 ){
            $units -= 50;
            $bill += $units * 5;
        }else{
            $bill += 50 * 5;
            if($units < 251){
                $units -= 100;
                $bill += $units * 6.20;
            }else{
                $bill += 150 * 6.2;
                if($units >= 251){
                    $units -= 250;
                    $bill += $units * 7.50;
                }
            }
        }
    }
}

echo $bill;


echo "<br>";
echo "<br>";

$age = 18;

if($age < 18){
    echo "is not eligible to vote";
}else{
    echo "is eligible to vote";
}


echo "<br>";
echo "<br>";

$firstInteger = 10;

if($firstInteger == 0){
    echo "zero";
}else if($firstInteger < 0){
    echo "Negative";
}else {
    echo "Postive";
}

echo "<br>";
echo "<br>";

$output = $firstInteger + $secondInteger;
echo "Addition " .$output ;
echo "<br>";
$output = $firstInteger - $secondInteger;
echo "Subtraction " .$output;
echo "<br>";
$output = $firstInteger * $secondInteger;
echo "Multiplication " .$output;
echo "<br>";
$output = $firstInteger / $secondInteger;
echo "Division " .$output;

echo "<br>";
echo "<br>";


$numbers = array(60,86,95,63,55,74,79,62,50);
$sum = 0;
for($i = 0; $i < count($numbers); $i++)
    $sum += $numbers[$i];

$avg = $sum / count($numbers);

if($avg < 60){
    echo "F";
}else if($avg < 70){
    echo "D";
}else if($avg < 80){
    echo "C";
}else if($avg < 90){
    echo "B";
}else if($avg < 100){
    echo "A";
}

?>