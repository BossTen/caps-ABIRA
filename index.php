<?php
require '../api/dbcon.php';

if(isset($_POST['admin-login'])){
  session_start();
  $_SESSION['userType'] = '';


  //search how to check for null json return value
  //change function to authenticate_faculty afterwards
  $isFaculty = $api->authenticate_student($_POST['admin-name'],$_POST['admin-password'])!='null'? true : false;
  if($isFaculty){
    $_SESSION['userType'] = 'Faculty';
  }else {
    //do query, if query returns false then do an error statement that says, "it appears you are not an applicable user, please try again" something like that.
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
</style>
<body>

<img src="logo.png" width="100%" height="20%"><br><br>

<div class="container">
<div class="text-center">
<img src="batlogo.png" style="width:400px;">
</div>
</div>

<br>
<div class="container">
<div class="card">
  <div class="card-body">
<div class="form-row text-center">
<div class="col-6">
  <button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#admin" style="width: 300px;">
    <img src="adminlogo.png" alt="logo" width="100px" height="100px"><b>Administrator</b></button>
  </div>
<div class="col-6">
  <button type="button" class="btn btn-danger custom" data-toggle="modal" data-target="#director" style="width: 300px;">
  <img src="adminlogo.png" alt="logo" width="100px" height="100px">Director</button>
  </div>

</div>
</div>

</div>
</div>
</div>

 <!-- admin -->
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle"><img src="adminlogo.png" alt="logo" width="75px" height="75px">Administrator</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center>  


  <form action="" method="post">
    <label>Username</label>
    <input type="text" id="username" name="admin-name" class="w3-border-round">
    <br>
    <label>Password</label>
    <input type="password" id="password" name="admin-password">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" name="admin-login">Login</button>
      </div>
    </div>
  </div>
</div>

 <!-- director -->
<div class="modal fade" id="director" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle"><img src="adminlogo.png" alt="logo" width="75px" height="75px">Director</h1>
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

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>