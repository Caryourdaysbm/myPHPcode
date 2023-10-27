<?php 
// // Extracting INformation from form
// if(isset($_POST['submit'])){
// $username = $_POST['username'];
// $password = $_POST['password'];
// echo $username . " " . $password;
// }


// Validating the Form Values
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $name = ["kayode", "Samuel", "Adeyemi"];
    $minimum = 5;
    $maximum = 10;
    if (strlen($username) < $minimum){
        echo "Username cannot be shorter than 5";
    } elseif (strlen($username) > $maximum) {
        echo "Username cannot be longer than 10";
    }

    if (!in_array($username, $name)){
        echo "Sorry, you are not allowed";
    } else {
        echo "welcome";
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