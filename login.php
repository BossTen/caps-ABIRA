<?php
      if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
          }  
require '../api/dbcon.php';
require '../api/apiOnly.php';
  


//FACULTY - USER LOGIN

 
if(isset($_POST['login'])){
  //do query here
  $stmt = $conn->prepare('SELECT username, campus, designation FROM accounts where username = ? AND password = ? ');
  $stmt->bind_param('ss', $u, $p);
  $u=$_POST['username'];
  $p=md5($_POST['password']);
  $stmt->execute();
  $stmt->bind_result($username,$campus, $designation);
  if($stmt->fetch()>0){
   $_SESSION['usr_fullname'] = $username;
   $_SESSION['usr_type'] = $designation;
  $_SESSION['usr_campus'] = $campus;
   if($_SESSION['usr_type']=='admin'){
header('location: home.php');
   exit();
   }else if($_SESSION['usr_type']=='director'){
   header('location: director-index.php');
   exit(); 
   }
   
  }else{
 $faculty = json_decode($api->authenticate_student($_POST['username'],$_POST['password']),true);
   if(!empty($faculty[0]['usr_fullname'])){
   $_SESSION['usr_fullname'] = $faculty[0]['usr_fullname'];
    $_SESSION['usr_type'] = 'faculty';

    // echo $api->fetch_semester();
    // echo $api->fetch_schoolyear();
    // print_r($api->fetch_student_grades('2018-2019','First',$_POST['username'],$faculty[0]['token']));
    //   die();
    header('location: faculty-index.php');
    exit();
   }else{
        echo "<script type='text/javascript'>
                alert ('Username and Password unmatched!'); 
                window.location.href='login.php';</script>";
}


    
  }
  $stmt->close();
  $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
          <div class="card-body">    <h1 class="w3-text-red w3-center">Login</h1>
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
