<?php 
// // Extracting INformation from form
// if(isset($_POST['submit'])){
// $username = $_POST['username'];
// $password = $_POST['password'];
// echo $username . " " . $password;
// }


// Validating the Form Values
if (isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
// connecting to local server; lohost, username, password, database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
        echo 'we are connected';

    } else {
        die('Database Connection Failed');
    }

    // CRUD
    // Create
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username','$password')";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query Failed' . mysqli_error());
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="forms.php" method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="password" name="password" placeholder="Enter password">
        <input type="submit" name="submit">
    </form>
</body>
</html>