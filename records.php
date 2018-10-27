<!DOCTYPE html>
<html lang="en">
<head>
  <title>Records</title>
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
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Forms
      <i class="fa fa-caret-down"></i>
  </div>
   <div class="w3-dropdown-hover">
    <button class="w3-button">Schedule
      <i class="fa fa-caret-down"></i>
    </button>
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
  <div class="col-12"><hr></div>
<div class="container">
  <div class="row">
    <div class="col w3-center">
      <a href="" type="button" class="btn btn-default w3-xxlarge w3-white w3-border-red">
<img src="cicslogo.jpg" alt="logo" width="100px" height="100px">CICS</a>
    </div>
    <div class="col">
      <a href="" type="button" class="btn btn-default w3-xxlarge w3-white w3-border-red">
<img src="batlogo.png" alt="logo" width="100px" height="100px">CEAFA</a>
    </div>
    <div class="col">
      <a href="" type="button" class="btn btn-default w3-xxlarge w3-white w3-border-red">
<img src="batlogo.png" alt="logo" width="100px" height="100px">CIT</a>
    </div>
  </div>