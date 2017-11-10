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

if( 3 > 10){

echo "three is less than 10"; 

}elseif( 4 < 5){
    echo "four is less than five";
}else{
    echo "it's not";
}


//COMPARISONS


// YOU KNOW THIS

//SWITCH STATEMENTS

$number = 34;

switch($number){
    case 34:
        echo "it's 34";
        break;
    case 35:
        echo "it's 35";
        break;
    case 36:
        echo "it's 36";
        break;
    case 37:
        echo "it's 37";
        break;  
}


//WHILE LOOPS 

$counter = 0;
while($counter < 10){
    echo "hello students" . "\n";
    echo $counter; 
    $counter += 1;
}

//FOR LOOPS 

for($counter = 0; $counter < 0; $counter++){
    echo $counter; 
    echo "hello, world" . "\n";    
};

//FOR EACH LOOPS

$numbers = array(345, 346, 347, 348, 349, 350);

foreach($numbers as $number){
    echo $number . "\n";
}

$productLists = array("hat", "bat", "gloves", "helmet", "sneakers");

foreach($productLists as $productList){
    echo $productList;
}


?>
    
</body>
</html>