<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

//http://php.net/manual/en/ref.math.php


//EXPONENTIAL EXPRESSION
$base = 2;
$power = 3;
echo pow($base, $power); //output 8

//Generate a random integer

echo rand ();

$min = 1;
$max = 10;

echo rand ($min, $max); //output random number between 1 and 10 inclusive

echo ceil(5.6); //so round up /output 6

echo floor(5.6); //so round down /output 5

//STRING FUNCTIONS
//http://php.net/manual/en/ref.strings.php

$string = "What would you like to know?";
echo strlen($string); //find length of string/ output 28

echo strtoupper($string); //makes uppercase 

echo strtolower($string); //makes lowercase

//ARRAY FUNCTIONS 
//http://php.net/manual/en/ref.array.php


$list = [120, 320, 530, 740, 550, 460, 770, 870, 990, 130];

echo max($list);
echo "\n";
echo min($list);
echo "\n";
sort($list);  
print_r($list); 

//output
// 990
// 120
// Array
// (
//     [0] => 120
//     [1] => 130
//     [2] => 320
//     [3] => 460
//     [4] => 530
//     [5] => 550
//     [6] => 740
//     [7] => 770
//     [8] => 870
//     [9] => 990
// )









?>
    
</body>
</html>