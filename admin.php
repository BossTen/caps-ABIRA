<?php
$connect = mysqli_connect('localhost', 'root', '', 'testing');

if (isset($_POST['login'])) {
  if (empty($_POST['username']) && empty($_POST['password'])){
  echo '<script> alert("Both Field are required")</script>';
}

else{
$username=mysqli_escape_string($connect, $_POST['username']);
$password=mysqli_escape_string($connect, $_POST['password']);
$query = "SELECT * FROM admin WHERE password='$password' AND username='$username'";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result)> 0){

header('location:index.php');
}
else {
echo '<script> alert("Worng username or Password") </script>';
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img src="logo.png" width="100%" height="20%"><br><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-default offset-md-4 col-md-4" data-toggle="modal" data-target="#admin">
<img src="adminlogo.png" alt="logo" width="100px" height="100px">
Administrator
</button>

<!-- Modal -->
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle"><img src="adminlogo.png" alt="logo" width="100px" height="100px">Administrator</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center>  
  <form action="" method="post">
    <label>Username</label>
    <input type="text" id="username" name="username" class="w3-border-round">
    <br>
    <label>Password</label>
    <input type="password" id="password" name="password">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" name="login">Login</button>
      </div>
    </div>
  </div>
</div>