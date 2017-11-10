<?php

//extracting data from the forms 

if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password']; 

echo "Hello" . $username; 
echo "Your password is" . $password;

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