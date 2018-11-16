<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenance BWSWF View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
require'navbar.php';

?>


<!--body-->
<br><br>
<form action="" method="">
<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h2>Building, Walls, Doors, Windows Preventive Maintenance View</h2></div>
      <div class="col-2"><h4>Department</h4>
        <select name="services" style="width:80%;"></select>
      </div>
      <div class="col-2"><h4>Month</h4>
        <select name="services" style="width:80%;"></select>
      </div>
      <div class="col-2"><h4>Year</h4>
        <select name="services" style="width:80%;"></select>
      </div>

      <div class="col-1" style="margin-top:3%; margin-left:0%;"><button type="submit" class="btn btn-success ">Show</button></div>
   </div>

</form>

<div class="container">
  <div class="table-responsive">      
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Month</th>
          <th>Department</th>
          <th>Floor</th>
          <th>Area</th>
          <th>Type</th>
          <th>Date Started</th>
          <th>Date Ended</th>
          <th>Accomplish by:</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>

<div class="container ">
       <div class="float-right"><a href="bwdw-pre-main-form.php"> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>