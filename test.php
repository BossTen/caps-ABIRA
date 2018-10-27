<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
<img src="logo.png" width="100%" height="20%">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand w3-xlarge" href="index.php">General Services Office</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link w3-xlarge" href="#">Notification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-xlarge" href="#">Inventory</a>
      </li>
      <li class="nav-item dropdown w3-xlarge">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Records
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="montly-maintenance-record.php">Maintenance Record</a>
          <a class="dropdown-item" href="student-record.php">Student Record</a>
          <a class="dropdown-item" href="job-order-record.php">Job Order Records</a>
        </div>
      </li>
      <li class="nav-item dropdown w3-xlarge">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Forms
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="job-order-form.php">Job Order Form</a>
          <a class="dropdown-item" href="#">Purchase Request Form</a>
          <a class="dropdown-item" href="#">Request for Repair Form</a>
        </div>
      </li>
      <li class="nav-item dropdown w3-xlarge">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Scheduling
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Schedule for Monthly Maintenance</a>
          <a class="dropdown-item" href="#">Schedule for Job Order</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn  w3-hover-white" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- sidebar -->
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block w3-white">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
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


<!-- Button trigger modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#admin">
<img src="adminlogo.png" alt="logo" width="50px" height="50px">
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
        <button type="button" class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>



<br>
<center><h1>Job Order Form - Inspection Order</h1></center>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="../capstone2/joboderinsert.php" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:2%;">

             <div class="row "><h4 class="col-6"><b>Serial:</b>&nbsp;<input type="text" name="serial"  class="form-control col-7" placeholder="YearMonthDate ex.20180924" required></h4>
            <h4 class="col-6"><b>Time:</b>&nbsp;<input type="time" name="time"  class="form-control col-7" required></h4>
             </div>

        <div class="row "><h4 class="col-6"><b>Date:</b>&nbsp;<input type="date" name="date1"  class="form-control col-7"  required></h4>
                          <h4 class="col-3"><b>Campus:</b>&nbsp;
                            <select class="form-control form-control" name="campus" id="campus">
                              <option value="Main I">Main I</option>
                              <option value="Main II">Main II</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                              <option value="">Main I</option>
                            </select>
        </div>
        <div class="row">
                             <h4 class="col-12"><b>Name of Office:</b>&nbsp;
                             <input type="text" name="nameofoffice" class="form-control col-30" id="nameofoffice" placeholder="Name of Office" required>
        </div>
        </div>
        </div>
<br>
<center><h1>Job Order Request</h1></center>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:2%;">


<table class="table table-bordered">
  <tbody>
  <tr>
  <th><center>Kindly put a check mark before the work<br> service and/or assistance to be done</th>
  <th><center>Inspection report</th>
  <th colspan=2><center>Material Needed</th>
  </tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox">
<label>Air-conditioning Works:</label></th>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox">
<label><center>Carpentry/ Masonary Works:</label></th>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox">
<label>Electrical Works:</label></th>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th><center>Job Recommendation</th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox">
<label><center>Plumbing Works:</label></th>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox">
<label><center>Welding Works:</label></th>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
<tr>
<th><input class="w3-input" type="text"></th>
<th colspan=2><input class="w3-input" type="text"></th>
</tr>
</table>
<br>
<table class="table table-bordered w3-card w3-round">
<tr>
<th></th>
<th><center>Requested by:</th>
<th><center>Inspected by:</th>
<th><center>Approved by:</th>
</tr>
<tr>
<th>Signature:</th>
<th></th>
<th></th>
<th></th>
</tr>
<tr>
<th>Printed Name:</th>
<th><input class="w3-input" type="text"></th>
<th><input class="w3-input" type="text"></th>
<th><center>Engr. VICTOR A. SEMIRA</th>
</tr>
<tr>
<th>Designation:</th>
<th><input class="w3-input" type="text"></th>
<th><input class="w3-input" type="text"></th>
<th><center>Assistant Director of FMSO</th>
</tr>
<tr>
<th>Date:</th>
<th><input type="date" name="date1"  class="form-control"></th>
<th><input type="date" name="date1"  class="form-control"></th>
<th><center>GSO - GPB Main II</th>
</tr>
</table>
<table class="table table-bordered w3-card w3-round">
<tr>
<th>Start of Service</th>
<th>End of Service</th>
<th>No. of hrs</th>
<th>Assessment</th>
</tr>
<br>
<tr>
<th>Date: <input type="date" name="date1"  class="form-control"></th>
<th><input type="date" name="date1"  class="form-control"></th>
<th rowspan=2><input class="w3-input" type="text"></th>
<th><input class="w3-check" type="checkbox">Work completed upon agreed duration</th>
</tr>
<tr>
<th>Time:<input type="time" name="date1"  class="form-control"></th>
<th><input type="time" name="date1"  class="form-control"></th>
<th><input class="w3-check" type="checkbox">Work not completed upon agreed duration</th>
</tr>
</table>
<br>
<table class="table table-bordered w3-card w3-round">
<tr>
<th colspan=2><center>Accomplished Works</th>
<th><center>Work done by:</th>
<th><center>Signature</th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text"></th>
<th><input class="w3-input" type="text"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text"></th>
<th><input class="w3-input" type="text"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text"></th>
<th><input class="w3-input" type="text"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text"></th>
<th><input class="w3-input" type="text"></th>
<th></th>
</tr>
<tr>
<th rowspan=2><center>Conforme:</th>
<th><input class="w3-input" type="text"></th>
<th></th>
<th><center><input type="date" name="date1"  class="form-control"></th>
</tr>
<tr>
<th><center>Name</th>
<th><center>Signature</th>
<th><center>Date signed</th>
</table>
</div>
</div>
<br>
<input style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">


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