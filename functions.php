<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function init(){
    saySomething();
    echo "\n"; 
    calculate();
}

function saySomething(){
    echo "I'm saying something!";
}

function calculate(){
    echo 300 + 400;
}


//PARAMETERS

function greeting($name){
    echo "Hello, $name"; 
}
 
greeting("Carla");

function calculate ($x, $y){
    $product = $x * $y;
    echo $product; 
}

calculate(30, 10); 

// RETURNING VALUES

function addNumbers($number1, $number2){
    $sum = $number1 + $number2;
    return $sum;
}

$result = addNumbers(4, 86);

$result2 = addNumbers(100, $result); 
echo $result2;


//LOCAL VARIABLES AND SCOPE

$x = "outside"; //global scope

function convert(){
    global $y;
    $y = "inside"; //local before, now global bc of keyword "global"
}

echo $x;

echo "\n";

convert();
echo $y; //needs to come after the call 

//DEFINING CONSTANTS

define("NAME", "Sara");
echo NAME; //result Sara 

echo "\n";

define("productNumber", 5000);
echo productNumber; 


?>
    
</body>
</html>