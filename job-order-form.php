<?php
require 'dbcon.php';

if(isset($_POST['jos'])){
  //nameofoffice
  //serial

  //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("INSERT INTO joborder (NameOfOffice,
                                               SerialCode, 
                                               DateRequestCreated,
                                               AirCondition,
                                               CarpentryMasonry,
                                               ElectricalWorks,
                                               
                                               Plumbing,
                                               Welding
                                                  
                                               ) 
                                               VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $nameOfOffice,
                          $serialCode,
                          $date,
                          $airConditioning,
                          $masonryCarpentry,
                          $electrical,
                          $plumbing,
                          $welding
                        );

// set parameters and execute
echo $nameOfOffice = $_POST['nameofoffice'];
echo $serialCode = $_POST['serial'];
echo $airConditioning = isset($_POST['air-conditioning']) ? "on" : 'off';
echo $masonryCarpentry = isset($_POST['masonary-carpentry']) ? "on" : 'off';
echo $electrical = isset($_POST['Electrical']) ? "on" : 'off';
echo $plumbing = isset($_POST['Plumbing']) ? "on" : 'off';
echo $welding = isset($_POST['Welding']) ? "on" : 'off';
$date="";
  //echo $campus = $_POST['campus'];

$stmt->execute();
$stmt->close();
$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Order Form</title>
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
      <a href="#" class="w3-bar-item w3-button">Maintenance Record</a>
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

<center><h1>Job Order Form - Inspection Order</h1></center>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:2%;">

             <div class="row "><h4 class="col-6"><b>Serial:</b>&nbsp;<input type="text" name="serial"  class="form-control col-7" placeholder="YearMonthDate ex.20180924" required/></h4>
             </div>

        <div class="row "><h4 class="col-6"><b>Date:</b>&nbsp;<input type="date" name="date1"  id="date1" class="form-control col-7"/></h4>
                          <h4 class="col-3"><b>Campus:</b>&nbsp;
                            <select class="form-control form-control" name="campus" id="campus">
                              <?php
                                $sql = "SELECT Id, Name FROM capuses";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
            echo "<option value='".$row['Id']."'>".$row['Name']."</option>";

                                  }
                                }
                              ?>
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
<th rowspan=2><input class="w3-check" type="checkbox" name="air-conditioning" value ="true">
<label>Air-conditioning Works:</label></th>
<th><input class="w3-input" type="tb1"></th>
<th colspan=2><input class="w3-input" type="text" name="tb2"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb3"></th>
<th colspan=2><input class="w3-input" type="text" name="tb4"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="masonary-carpentry">
<label><center>Carpentry/ Masonary Works:</label></th>
<th><input class="w3-input" type="text" name="tb5"></th>
<th colspan=2><input class="w3-input" type="text" name="tb6"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb7"></th>
<th colspan=2><input class="w3-input" type="text" name="tb8"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="Electrical">
<label>Electrical Works:</label></th>
<th><input class="w3-input" type="text" name="tb9"></th>
<th colspan=2><input class="w3-input" type="text" name="tb10"></th>
</tr>
<tr>
<th><center>Job Recommendation</th>
<th colspan=2><input class="w3-input" type="text" name="tb11"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="Plumbing">
<label><center>Plumbing Works:</label></th>
<th><input class="w3-input" type="text" name="tb12"></th>
<th colspan=2><input class="w3-input" type="text" name="tb13"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb13"></th>
<th colspan=2><input class="w3-input" type="text" name="tb14"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="Welding">
<label><center>Welding Works:</label></th>
<th><input class="w3-input" type="text" name="tb15"></th>
<th colspan=2><input class="w3-input" type="text" name="16"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb17"></th>
<th colspan=2><input class="w3-input" type="text" name="tb18"></th>
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
<th><input class="w3-input" type="text" name="tb19"></th>
<th><input class="w3-input" type="text" name="tb20"></th>
<th><center>Engr. VICTOR A. SEMIRA</th>
</tr>
<tr>
<th>Designation:</th>
<th><input class="w3-input" type="text" name="tb21"></th>
<th><input class="w3-input" type="text" name="tb22"></th>
<th><center>Assistant Director of FMSO</th>
</tr>
<tr>
<th>Date:</th>
<th><input type="date"  class="form-control" name="date2"></th>
<th><input type="date"  class="form-control" name="date3"></th>
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
<th>Date: <input type="date" name="date4"  class="form-control"></th>
<th><input type="date" name="date5"  class="form-control"</th>
<th rowspan=2><input class="w3-input" type="text" name="tb23"></th>
<th><input class="w3-check" type="checkbox" name="assess1">Work completed upon agreed duration</th>
</tr>
<tr>
<th>Time:<input type="time"  class="form-control" name="time1"></th>
<th><input type="time" class="form-control" name="time2"></th>
<th><input class="w3-check" type="checkbox" name="assess2">Work not completed upon agreed duration</th>
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
<th colspan=2><input class="w3-input" type="text" name="tb24"></th>
<th><input class="w3-input" type="text" name="tb25"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="tb26"></th>
<th><input class="w3-input" type="text" name="tb27"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="tb28"></th>
<th><input class="w3-input" type="text" name="tb29"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="tb30"></th>
<th><input class="w3-input" type="text" name="tb31"></th>
<th></th>
</tr>
<tr>
<th rowspan=2><center>Conforme:</th>
<th><input class="w3-input" type="text" name="tb32"></th>
<th></th>
<th><center><input type="date" name="date1"  class="form-control" name="date6"></th>
</tr>
<tr>
<th><center>Name</th>
<th><center>Signature</th>
<th><center>Date signed</th>
</table>
</div>
</div>
<br>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:2%;">

<table class="table table-bordered">
  <tbody>
  <tr>
  <th colspan="12">Thank you for giving us the opportunity to serve you better. Please help us by taking a few minutes to inform us about the technical assistance/service that you have just been provided. Put check in the colun that corresponds to your of satisfaction.</th>
  </tr>
  <tr>
  <th rowspan="2" colspan="4"><center>EVALUATION STATEMENTS</th>
  <th>Outstanding</th>
  <th>Very Satisfactory</th>
  <th>Satisfactory</th>
  <th>Unsatisfactory</th>
  <th>Poor</th>
  </tr>
  <tr>
  <center>
  <th><center>5</center></th>
  <th><center>4</center></th>
  <th><center>3</center></th>
  <th><center>2</center></th>
  <th><center>1</center></th>
  </tr>

  <tr>
  <th colspan="4">Accuracy of work and efficiency to save time</th>
  <th><input type="radio" value="1" class="form-control" name="cb1"></th>
  <th><input type="radio" value="2" class="form-control" name="cb1"></th>
  <th><input type="radio" value="3" class="form-control" name="cb1"></th>
  <th><input type="radio" value="4" class="form-control" name="cb1"></th>
  <th><input type="radio" value="5" class="form-control" name="cb1"></th>
  </tr>
  <tr>
  <th colspan="4">Accuracy of work and efficiency to save time</th>
  <th><input type="radio" value="1" class="form-control" name="cb2"></th>
  <th><input type="radio" value="2" class="form-control" name="cb2"></th>
  <th><input type="radio" value="3" class="form-control" name="cb2"></th>
  <th><input type="radio" value="4" class="form-control" name="cb2"></th>
  <th><input type="radio" value="5" class="form-control" name="cb2"></th>
  </tr>
  <tr>
  <th colspan="4">Courtesy and professionalis of the attending personel</th>
  <th><input type="radio" value="1" class="form-control" name="cb3"></th>
  <th><input type="radio" value="2" class="form-control" name="cb3"></th>
  <th><input type="radio" value="3" class="form-control" name="cb3"></th>
  <th><input type="radio" value="4" class="form-control" name="cb3"></th>
  <th><input type="radio" value="5" class="form-control" name="cb3"></th>
  </tr>
  <tr>
  <th colspan="4">Quality of service provided in performing the requested work, service and/or assistance</th>
  <th><input type="radio" value="1" class="form-control" name="cb4"></th>
  <th><input type="radio" value="2" class="form-control" name="cb4"></th>
  <th><input type="radio" value="3" class="form-control" name="cb4"></th>
  <th><input type="radio" value="4" class="form-control" name="cb4"></th>
  <th><input type="radio" value="5" class="form-control" name="cb4"></th>
  </tr>


  </tbody>
</table>
</div>
</div>
</div>
<br>


<input name ="jos" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">
