<!DOCTYPE html>
<html lang="en">
<head>
  <title>Montly Maintenance Record</title>
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
<!-- sidebar -->
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Records
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block w3-white">
      <a href="#" class="w3-bar-item w3-button">Montly Maintenance Record</a>
      <a href="job-order-record.php" class="w3-bar-item w3-button">Job Order Records</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Forms
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block w3-white">
      <a href="job-order-form.php" class="w3-bar-item w3-button">Job Order Form</a>
      <a href="#" class="w3-bar-item w3-button">Purchase Request Form</a>
      <a href="#" class="w3-bar-item w3-button">Request to Repair Form</a>
    </div>
  </div>
   <div class="w3-dropdown-hover">
    <button class="w3-button">Schedule
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="montly-maintenance-record.php" class="w3-bar-item w3-button">Schedule for Montly Maintenance</a>
      <a href="#" class="w3-bar-item w3-button">Schedule for Job Order</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button">Inventory</a>
</div>

<div id="main">

<div class="w3-white">
  <button id="openNav" class="w3-button w3-white w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container w3-white">
    <h1>General Services Office</h1>
  </div>
</div>


<div class="w3-container">
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

<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1>Montly Maintenance Record</h1></div>
   </div>
</div>
<br>
<div class="container">      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Month</th>
        <th>Campus</th>
        <th>Department</th>
         <th>Room No.</th>
      </tr>
    </thead>
    <tbody>
    <tr>
    <th>October</th>
    <th>Main II</th>
    <th>CICS</th>
    <th>Room 101</th>
    </tr>
    <tr>
    <th>October</th>
    <th>Main II</th>
    <th>CICS</th>
    <th>Room 101</th>
    </tr>
    <tr>
    <th>October</th>
    <th>Main II</th>
    <th>CICS</th>
    <th>Room 101</th>
    </tr>
    </tbody>
    </table>
    </div>
    <br>

<div class="container ">
       <div class="float-right"><a href="services-index.php"> <button type="button" class="btn btn-success">Add</button></a>
       <a href="#"><button type="button" class="btn btn-primary">Update</button></a>
      </div>   
      </div>

