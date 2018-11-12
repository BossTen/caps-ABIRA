<?php
require '../api/dbcon.php';
  
  session_start();
//FACULTY - USER LOGIN

 
if(isset($_POST['login'])){
  //do query here
  $stmt = $conn->prepare('SELECT username FROM admin where username = ? AND password = ? ');
  $stmt->bind_param('ss', $u, $p);
  $u=$_POST['username'];
  $p=md5($_POST['password']);
  $stmt->execute();
  $stmt->bind_result($username);
  if($stmt->fetch()){
   $_SESSION['usr_fullname'] = $username;
   $_SESSION['usr_type'] = 'admin';
   
   
   header('location: job-order-view.php');
   exit();
  }else{
   
    //ERROR MESSAGE HERE
    echo 'username or password is not correct please try';
    
  }
  $stmt->close();
  $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>
<img src="logo.png" width="100%" height="20%">
<br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">    <h1 class="w3-text-red w3-center">Administrator Log In</h1>
    <center>
             <form action="" method="post">
               <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter Username"></div>
               <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password"></div>
               <input type="submit" class="btn btn-success w3-xlarge" name="login" value="Login">
              </form>
             </form>
            </div>
  </div>
</div>
