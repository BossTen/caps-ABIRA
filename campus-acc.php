<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator Registration</title>
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php

require 'testaccountcreator.php';



?>
<br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
        <div class="card card-signin my-7">
          <div class="card-body">
            <center>
              <form id="form-register">
            <h1 class="w3-text-red">Account Information</h1>
            <h5 class="col-12"><b>Username:</b>
              <input type="text" name="username" class="form-control col-12" id="" placeholder="" required>
            <h5 class="col-12"><b>Password:</b>
              <input type="password" name="password" class="form-control col-12" id="fpass" placeholder="" required>
            <h5 class="col-12"><b>Confirm Password:</b><p id="message"></p>
              <input type="password" name="confirm-password" class="form-control col-12" id="spass" placeholder="" required>
            <h5 class="col-12"><b>Campus:</b>
              <select class="form-control form-control col-12" name="campus" id="campus" required>
                                <?php
                                require '../api/apiOnly.php';
                                  $campuses = json_decode($api->fetch_campuses(),true);
                                  foreach ($campuses as $campus) {
                                   echo "<option value='".$campus['code']."'>".$campus['code']."</option>";

                                  }

                              ?>
                            </select>
            <h5 class="col-12"><b>Designation:</b>&nbsp;
              <select class="form-control form-control col-12" name="designation" id="designation" required>
                  <option value="director">Director
                  </option>
                  <option value="admin">Admin</option>                     
                       
              </select>
<br>
            <center>
            <input name="submit" style="paddingding:20px;" id='save' class="btn btn-success ocl-md-4" type="submit" value="Register" disabled="">
          </form>
            </center>

            <script>

$('#fpass, #spass').on('keyup', function () {
  console.log("test")
  if ($('#fpass').val() == $('#spass').val()) {

    $('#message').html('Matching').css('color', 'green');
    $("#save").removeAttr("disabled");

  } else {
    $('#message').html('Not Matching').css('color', 'red');
    

  }
});
                $("#save").click(function() {

 
    //no more clicks until timer expires
    $(this).attr("disabled", "disabled");

    //do whatever you want on the click here
                    var data = $("#form-register").serialize();
  $.ajax({
    
         data: data,
         type: "post",
         url: "backend/AdminAccount.php",
         success: function(data){
          
                  $('input:text, input:password').val('');
              
              alert(data);
              
         }
});
    //set timer to re-enable the button 
    setTimeout(function() {
        $("#save").removeAttr("disabled");
    }, 5 *  1000);
});
            </script>
