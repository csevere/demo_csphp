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

//VARIABLES

$name = "Carla";
$number = 100; 

echo $name . $number;
echo $name . "" . $number;

$greeting = "<h1>helllloooo</h1>";
echo $greeting;

//can assign images to php variables too 

echo 100 + 100;
echo "\n";
echo "<br>";
echo 100 - 50;

$number1 = 100;
$number2 = 200;

echo $number1 +  $number2; 


//ARRAYS

$numberList = array(23, 47, 87, 100);
$productList = array('<h1>Bat</h1>', '<h1>Baseball</h1>', '<h1>Gloves</h1>');

echo $numberList; 
print_r($numberList);


//ASSOCIATE ARRAYS

$names = array("first_name" => 'Sally', "last_name" => 'Cooper');
print_r($names);

echo $names['first_name'] . " ". $names['last_name'];


?>
    
</body>
</html>