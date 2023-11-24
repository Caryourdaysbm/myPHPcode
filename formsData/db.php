<?php
$connection = mysqli_connect('localhost', 'root','', 'loginapp');
    if($connection){
        echo 'we are connected';

    } else {
        die('Database Connection Failed');
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
    
</body>
</html>