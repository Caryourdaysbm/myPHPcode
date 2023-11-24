

<?php 
include "db.php";
 include "function.php";
if(isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];


$query = "UPDATE users SET username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";

$result = mysqli_query($connection, $query);
if(!$result){
    die("Query Failed ". mysqli_error($connection));
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>my sql login pcntl_signal_dispatch</title>
</head>
<body>
    <div class="container">
        <div class="container-sm">
        <form action="update.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="UPDATE">UPDATE</button>


<select name="id">
    <?php
    showAllData();    
        ?>
</select>
</form>
        </div>
    </div>
</body>
</html>