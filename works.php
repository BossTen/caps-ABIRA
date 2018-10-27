<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
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
      <a href="montly-maintenance-record.php" class="w3-bar-item w3-button">Montly Maintenance Record</a>
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

<center><h1 class="w3-text-red">Maintenance Activities to be Performed</h1></center>

<!--  -->
<div class="container">
  <div class="col-12"><hr></div>
<div class="container">
  <div class="col">
    <div class="row w3-center">
      <a href="" type="button" class="btn btn-outline-danger w3-xlarge">AIRCONDITIONING UNITS</a>
    </div><br>
    <div class="row">
      <a href="" type="button" class="btn btn-outline-danger w3-xlarge">POWER SUPPLY</a>
    </div><br>
    <div class="row">
      <a href="" type="button" class="btn btn-outline-danger w3-xlarge">Generator Set/Fuel Container</a>
    </div>
  </div>
  <br>
  <div class="col">
    <div class="row w3-center">
      <a href="" type="button" class="btn btn-outline-danger w3-xlarge">PLUMBING SYSTEM</a>
    </div><br>
    <div class="row">
      <a href="" type="button" class="btn btn-outline-danger w3-xlarge">Building WALLS, DOORS, WINDOWS and FLOORS</a>
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