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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
  
    <pre>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
        ?>
    </pre>
</body>
</html>