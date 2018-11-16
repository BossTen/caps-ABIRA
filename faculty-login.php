<?php

require '../api/dbconNApi.php';
  

//FACULTY - USER LOGIN


if(isset($_POST['login'])){
  //$faculty = json_decode($api->authenticate_faculty($_POST['username'],$_POST['password']));
  //echo $api->faculty_profile($faculty[0]['instructor_id']);
    //echo $faculty;
   $faculty = json_decode($api->authenticate_student($_POST['username'],$_POST['password']),true);
   if(!empty($faculty[0]['usr_fullname'])){
   $_SESSION['usr_fullname'] = $faculty[0]['usr_fullname'];
    $_SESSION['usr_type'] = 'faculty';
    header('location: faculty-job-order-form.php');
   }else{
     echo 'username or password is not correct please try';
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
          <div class="card-body">    
            <h1 class="w3-text-red w3-center">Faculty Log In</h1>
    <center>
             <form action="" method="post">
               <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Enter Username" required></div>
               <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password" required></div>
               <input type="submit" class="btn btn-success w3-xlarge" name="login" value="Login">
              </form>
             </form>
            </div>
  </div>
</div>
