<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenance Airconditioning</title>
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

<center><h1 class="w3-text-red">Preventive Maintenance Form</h1></center>
<div class="container" style="margin-top: 1em;">
    <form action="../capstone2/test.php" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:10%;">
            <div class="row">
            <h2><b>AIRCONDITIONING UNITS (Main II)</b></h4>
            </div>
<div class="row">
<h3 ><b>Cleaning, Replacement of Capacitor, Units Charging with Freon and Others</b></h4>
</div>
             <div class="row "><h4 class="col-6"><b>Work:</b>&nbsp;
             <select class="form-control form-control" name="work" id="campus">
                              <option value="">AIRCONDITIONING UNITS</option>
                              <option value="">POWER SUPPLY</option>
                              <option value="">PLUMBING SYSTEM</option>
                              <option value="">MBuilding WALLS, DOORS, WINDOWS and FLOORS</option>
                      </select></h4>
        </div>              
        <div class="row">
                             <h4 class="col-6"><b>Month:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">January</option>
                              <option value="">Februaru</option>
                              <option value="">March</option>
                              <option value="">April</option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                       
                            </select></h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Department:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">January</option>
                              <option value="">Februaru</option>
                              <option value="">March</option>
                              <option value="">April</option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                       
                            </select></h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Floor:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">CICS</option>
                              <option value="">Februaru</option>
                              <option value="">March</option>
                              <option value="">April</option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                       
                            </select></h4>
                             <h4 class="col-6"><b>Area:</b>&nbsp;<input type="text" name=""  class="form-control col-12">
                    </h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Date Started:</b>&nbsp;<input type="date" name=""  class="form-control col-12">
                    
                    </h4>
                             <h4 class="col-6"><b>Date Ended:</b>&nbsp;<input type="date" name=""  class="form-control col-12">
                    </h4>
        </div>
         <div class="row">
                             <h4 class="col-12"><b>Accomplish by:</b>&nbsp;<input type="text" name=""  class="form-control col-12"></h4>
        </div>
        <div class="row">
                <input style="padding:20px;" class="btn btn-success col-12" type="submit" value="Save">
        </div>





        </div>
        </div>

    