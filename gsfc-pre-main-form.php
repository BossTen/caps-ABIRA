<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generator Set/Fuel Container Form</title>
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
  <a href="job-order-record.php" class="w3-bar-item w3-button">Job Order</a>
  <a href="#" class="w3-bar-item w3-button">Preventive Maintenance</a>
  <a href="" class="w3-bar-item w3-button">Inventory</a>

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


<!--body-->

<center><h1 class="w3-text-red">Preventive Maintenance Form</h1></center>
<div class="container" style="margin-top: 1em;">
    <form action="../capstone2/test.php" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:5%;">
            <div class="row">
            <h2>Generator Set/Fuel Container</h2>
            </div>

             <div class="row "><h4 class="col-6"><b>Work:</b>&nbsp;
             <select class="form-control form-control" name="work" id="campus">
             				<option value="">POWER SUPPLY</option>
             				<option value="">PLUMBING SYSTEM</option>
             				<option value="">Building WALLS, DOORS, WINDOWS and FLOORS</option>
                            <option value="">AIRCONDITIONING UNITS</option>
                              
                              
                              </select></h4>
                              <h4 class="col-6"><b>Campus:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">Main I</option>
                              <option value="">Main II</option>
                              <option value="">Lemery</option>
                              <option value="">Balayan</option>
                              <option value="">Nasugbu</option>
                              <option value="">Malvar</option>
                              <option value="">Rosario</option>
                              <option value="">Lobo</option>
                              <option value="">San Juan</option>
                     
                       
                            </select></h4>
                              
        </div>              
        <div class="row">
                             <h4 class="col-6"><b>Month:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">January</option>
                              <option value="">February</option>
                              <option value="">March</option>
                              <option value="">April</option>
                              <option value="">May</option>
                              <option value="">June</option>
                              <option value="">July</option>
                              <option value="">August</option>
                              <option value="">September</option>
                              <option value="">October</option>
                              <option value="">November</option>
                              <option value"">December</option>
                       
                            </select></h4>
        </div>
        
                            <div class="row">
                             <h4 class="col-6"><b>Maintenance Activiteis Performed:</b>&nbsp;<select class="form-control form-control" name="" id="campus">
                              <option value="">Generator Set (Test run; Check fuel consumption; Cleaning)</option>
                              <option value="">Fuel Container (Refilling; Check fuel amount)</option>
                              
                           
                     
                       
                            </select></h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Date:</b>&nbsp;<input type="date" name=""  class="form-control col-12">
                    
                    </h4>
                             
        </div>
         <div class="row">
                             <h4 class="col-12"><b>Accomplish by:</b>&nbsp;<input type="text" name=""  class="form-control col-12"></h4>
        </div>
        <div class="row">
                <input style="padding:20px;" class="btn btn-success col-12" type="submit" value="Save">
        </div>