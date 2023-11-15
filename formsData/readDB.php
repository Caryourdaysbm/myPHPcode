<?php

// // Validating the Form Values
// if (isset($_POST["submit"])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];

// connecting to local server; lohost, username, password, database

    $connection = mysqli_connect('localhost', 'root','', 'loginapp');
    if($connection){
        echo 'we are connected';

    } else {
        die('Database Connection Failed');
    }
    
// CRUD
// READ

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

if($result) {
    echo 'db connected';
} else{
    
    die('Query Failed' . mysqli_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        while($row = mysqli_fetch_row($result)){
            print_r($row);
        }
    ?>
</body>
</html>