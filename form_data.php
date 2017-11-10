<?php

//extracting data from the forms 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $names = array ("Ediwn", "Carrie", "Peter", "Samid", "Jane", "Tom", "Tim");
    $min = 5;
    $max = 12;
    // $red = "red"

    //Validating whether the user is in the database or not; can do the same thing with passwords

    if(strlen($username) < $min){
        echo "Username must be more than 5 characters";
    }elseif(strlen($username) > $max){
        echo "Username must be less than 12 characters";
    }else{
        echo "You can proceed!";
    }

    if(!in_array($username, $name)){
        echo "Username not found. Please sign up!";
    }else{
        echo "Welcome, " . $username . "!"; 
    }

    //PASSWORD VALIDATION
    $password = "bunny";
    $username = "Carla";
    $passwords = array ("cat", "bunny", "Peter", "Samid", "Jane", "Tom", "Tim");
    
    if(!in_array($password, $passwords)){
        echo "Password not found. Please try again!";
    }else{
        echo "Login, successful! Welcome, " . $username . "!";
    }
    


// echo "Hello" . $username; 
// echo "Your password is" . $password;

}

 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
</head>
<body>

    <form action = "form_data.php" method = "post">
        <input type="text" placeholder = "Username" name = "username">
        <input type="password" placeholder = "Password" name = "password">
        <br> 
        <input type="submit" name = "submit">
    </form>

</body>
</html>