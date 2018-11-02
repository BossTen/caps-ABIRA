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
                                               Welding,


                                               RequestorSignature,
                                               RequestorName,
                                               RequestorDesignation,
                                               DateRequested,
                                               signatureOfInspector,
                                               InspectorName,
                                               InspectorDesignation,
                                               DateInspected,
                                               Approved,
                                               StartOfService,
                                               EndOfService,
                                               NoOfHours,
                                               Assesment,
                                               StartOfServiceTime,
                                               EndOfServiceTime,
                                               AccomplishedWork1,
                                               WorkDoneBy1,
                                               Signature1,
                                               AccomplishedWork2,
                                               WorkDoneBy2,
                                               Signature2,
                                               AccomplishedWork3,
                                               WorkDoneBy3,
                                               Signature3,
                                               AccomplishedWork4,
                                               WorkDoneBy4,
                                               Signature4,
                                               ConformeName,
                                               ConformeApproved,
                                               ConformeDateApproved,
                                               ResponseTime,
                                               AccuracyOfWork,
                                               Courtesy,
                                               QualityOfService
                                               -- ApprovedBy,
                                      
                                               ) 
                                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssss", $nameOfOffice,
                              $serialCode,
                              $date,
                              $airConditioning,
                              $masonryCarpentry,
                              $electrical,
                              $plumbing,
                              $welding,

                              $requesterSignature,
                              $nameOfRequester,
                              $designationOfRequester,
                              $dateRequested,

                              $inspecterSignature,
                              $nameOfInspector,
                              $designationOfInspecter,
                              $dateInspected,

                              $directorSignature,

                              $startOfService,
                              $endOfService,
                              $noOfHours,
                              $assessment,
                              $startOfServiceTime,
                              $endOfServiceTime,
                              $accomplishedWork1,
                              $workDoneBy1,
                              $signature1,
                              $accomplishedWork2,
                              $workDoneBy2,
                              $signature2,
                              $accomplishedWork3,
                              $workDoneBy3,
                              $signature3,
                              $accomplishedWork4,
                              $workDoneBy4,
                              $signature4,
                              $conformeName,
                              $conformeSignature,
                              $conformeDateSigned,
                              $responseTime,
                              $accuracyOfWork,
                              $courtesy,
                              $qualityOfService

                        );
// Approved = $directorSignature
// set parameters and execute
 $nameOfOffice = $_POST['nameofoffice'];
 $serialCode = $_POST['serial'];
 $airConditioning = isset($_POST['air-conditioning']) ? "on" : 'off';
 $masonryCarpentry = isset($_POST['masonary-carpentry']) ? "on" : 'off';
 $electrical = isset($_POST['Electrical']) ? "on" : 'off';
 $plumbing = isset($_POST['Plumbing']) ? "on" : 'off';
 $welding = isset($_POST['Welding']) ? "on" : 'off';
 $date = $_POST['date1'];
 $requesterSignature = $_POST['requester-signature']; 
 $inspecterSignature = $_POST['inspecter-signature'];
 $directorSignature = $_POST['director-signature'];
 $nameOfRequester = $_POST['name-of-requester'];
 $nameOfInspector = $_POST['name-of-inspector'];
 $designationOfRequester = $_POST['designation-of-requester'];
 $designationOfInspecter = $_POST['designation-of-inspecter'];
 $dateRequested = $_POST['date-requested'];
 $dateInspected = $_POST['date-inspected'];
 $startOfService = $_POST['start-of-service'];
 $endOfService = $_POST['end-of-service'];
 $noOfHours = $_POST['no-of-hours'];
 $assessment = $_POST['assessment'];
 $startOfServiceTime = date('h:i A', strtotime($_POST['start-of-service-time']));
 $endOfServiceTime = date('h:i A', strtotime($_POST['end-of-service-time']));
 $accomplishedWork1 = $_POST['accomplished-work1'];
 $workDoneBy1 = $_POST['work-done-by1'];
 $signature1 = $_POST['signature1'];
 $accomplishedWork2 = $_POST['accomplished-work2'];
 $workDoneBy2 = $_POST['work-done-by2'];
 $signature2 = $_POST['signature2'];
 $accomplishedWork3 = $_POST['accomplished-work3'];
 $workDoneBy3 = $_POST['work-done-by3'];
 $signature3 = $_POST['signature3'];
 $accomplishedWork4 = $_POST['accomplished-work4'];
 $workDoneBy4 = $_POST['work-done-by4'];
 $signature4 = $_POST['signature4'];
 $conformeName = $_POST['conforme-name'];
 $conformeSignature = $_POST['conforme-signature'];
 $conformeDateSigned = $_POST['conforme-date-signed'];
 $responseTime = $_POST['cb1'];
 $accuracyOfWork = $_POST['cb2'];
 $courtesy = $_POST['cb3'];
 $qualityOfService = $_POST['cb4'];


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

<div class="col-12" style="color:black; font-size:20px; margin-bottom:5%;">
  <a href="index.php">
 <img src="batlogo.png" alt="logo" width="100px;" style="margin-right:0%; margin-top:5%;border-radius:50%;"></a>General Services Office
</div>

  <a href="" class="w3-bar-item w3-button" data-toggle="modal" data-target="#joborder">Job Order</a>
  <a href="" class="w3-bar-item w3-button" data-toggle="modal" data-target="#air">Air-conditioning</a>
  <a href="" class="w3-bar-item w3-button" data-toggle="modal" data-target="#plum">Plumbing</a>
  <a href="" class="w3-bar-item w3-button" data-toggle="modal" data-target="#ps">Power Supply</a>
  <a href="j" class="w3-bar-item w3-button" data-toggle="modal" data-target="#bwdw">Building, Walls, Doors, Windows</a>
  <a href="job-order-record.php" class="w3-bar-item w3-button" data-toggle="modal" data-target="#gsfc">Generator Set/Fuel Container</a>
  <a href="scheduling.php" class="w3-bar-item w3-button">Scheduling</a>
  <a href="inventory.php" class="w3-bar-item w3-button">Inventory</a>
    <a href="" class="w3-bar-item w3-button"data-toggle="modal" data-target="#admin">Log Out</a>
<button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button><br>
 

</div>


<div id="main">

<div class="w3-white">
  <button id="openNav" class="w3-button w3-white w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container w3-white">
    <h1></h1>
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


<!--joborder-->
<div class="modal fade" id="joborder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="job-order-form.php" class="btn btn-danger w3-xxlarge" role="button">Job Order Form</a><br><br>
      <a href="job-order-view.php" class="btn btn-danger w3-xxlarge" role="button">Job Order Records</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--air-->
<div class="modal fade" id="air" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="air-pre-main-form.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Adding Form</a><br><br>
      <a href="air-pre-main-view.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Records</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--plumbing-->
<div class="modal fade" id="plum" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="plum-pre-main-form.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Adding  Form</a><br><br>
      <a href="plum-pre-main-view.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Records</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--Power supply-->
<div class="modal fade" id="ps" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="ps-pre-main-form.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Adding  Form</a><br><br>
      <a href="ps-pre-main-view.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Records</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--BWDW-->
<div class="modal fade" id="bwdw" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="bwd-pre-main-form.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Adding  Form</a><br><br>
      <a href="bwd-pre-main-view.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Records</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--GSFC-->
<div class="modal fade" id="gsfc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="gsfc-pre-main-form.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Adding  Form</a><br><br>
      <a href="gsfc-pre-main-view.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Records</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<center><h1>Job Order Form - Inspection Order</h1></center>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:2%;">

             <div class="row "><h4 class="col-6"><b>Serial:</b>&nbsp;<input type="text" name="serial"  class="form-control col-7" placeholder="YearMonthDate ex.20180924" required/></h4>
             </div>

        <div class="row ">
          
          <h4 class="col-6"><b>Date:</b>&nbsp;
            <input type="date" class="form-control col-7" name="date1" />
          </h4>
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
<th rowspan="5"><input class="w3-input" type="tb1"></th>
<th colspan=2><input class="w3-input" type="text" name="tb2"></th>
</tr>
<tr>

<th colspan=2><input class="w3-input" type="text" name="tb4"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="masonary-carpentry">
<label><center>Carpentry/ Masonary Works:</label></th>

<th colspan=2><input class="w3-input" type="text" name="tb6"></th>
</tr>
<tr>

<th colspan=2><input class="w3-input" type="text" name="tb8"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="Electrical">
<label>Electrical Works:</label></th>

<th colspan=2><input class="w3-input" type="text" name="tb10"></th>
</tr>
<tr>
<th><center>Job Recommendation</th>
<th colspan=2><input class="w3-input" type="text" name="tb11"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="Plumbing">
<label><center>Plumbing Works:</label></th>
<th rowspan="5"><input class="w3-input" type="text" name="tb12"></th>
<th colspan=2><input class="w3-input" type="text" name="tb13"></th>
</tr>
<tr>

<th colspan=2><input class="w3-input" type="text" name="tb14"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="Welding">
<label><center>Welding Works:</label></th>

<th colspan=2><input class="w3-input" type="text" name="16"></th>
</tr>
<tr>

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
<th><input class="w3-input" type="text" name="requester-signature" placeholder="requester signature"></th>
<th><input class="w3-input" type="text" name="inspecter-signature" placeholder="inspecter signature"></th>
<th><input class="w3-input" type="text" name="director-signature" placeholder="signature of director"></th>
</tr>
<tr>
<th>Printed Name:</th>
<th><input class="w3-input" type="text" name="name-of-requester" placeholder="name of requester"></th>
<th><input class="w3-input" type="text" name="name-of-inspector" placeholder="name of inspecter"></th>
<th><center>Engr. VICTOR A. SEMIRA</th>
</tr>
<tr>
<th>Designation:</th>
<th><input class="w3-input" type="text" name="designation-of-requester" placeholder="designation of requester"></th>
<th><input class="w3-input" type="text" name="designation-of-inspecter" placeholder="designation of inspecter"></th>
<th><center>Assistant Director of FMSO</th>
</tr>
<tr>
<th>Date:</th>
<th><input type="date"  class="form-control" name="date-requested"></th>
<th><input type="date"  class="form-control" name="date-inspected"></th>
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
<th>Date: <input type="date" name="start-of-service"  class="form-control"></th>
<th><input type="date" name="end-of-service"  class="form-control"</th>
<th rowspan=2><input class="w3-input" type="text" name="no-of-hours"></th>
<th><input class="w3-check" type="radio" name="assessment" value="completed">Work completed upon agreed duration</th>
</tr>
<tr>
<th>Time:<input type="time"  class="form-control" name="start-of-service-time"></th>
<th><input type="time" class="form-control" name="end-of-service-time"></th>
<th><input class="w3-check" type="radio" name="assessment" value="notcompleted">Work not completed upon agreed duration</th>
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
<th colspan=2><input class="w3-input" type="text" name="accomplished-work1"></th>
<th><input class="w3-input" type="text" name="work-done-by1"></th>
<th><input class="w3-input" type="text" name="signature1"></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="accomplished-work2"></th>
<th><input class="w3-input" type="text" name="work-done-by2"></th>
<th><input class="w3-input" type="text" name="signature2"></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="accomplished-work3"></th>
<th><input class="w3-input" type="text" name="work-done-by3"></th>
<th><input class="w3-input" type="text" name="signature3"></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="accomplished-work4"></th>
<th><input class="w3-input" type="text" name="work-done-by4"></th>
<th><input class="w3-input" type="text" name="signature4"></th>
</tr>
<tr>
<th rowspan=2><center>Conforme:</th>
<th><input class="w3-input" type="text" name="conforme-name"></th>
<th><input class="w3-input" type="text" name="conforme-signature"></th>
<th><center><input type="date" class="form-control" name="conforme-date-signed"></th>
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
    <!-- WHAT IS THIS FOR ? <form action="" method="POST"> -->
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
  <th><input type="radio" value="5" class="form-control" name="cb1"></th>
  <th><input type="radio" value="4" class="form-control" name="cb1"></th>
  <th><input type="radio" value="3" class="form-control" name="cb1"></th>
  <th><input type="radio" value="2" class="form-control" name="cb1"></th>
  <th><input type="radio" value="1" class="form-control" name="cb1"></th>
  </tr>
  <tr>
  <th colspan="4">Accuracy of work and efficiency to save time</th>
  <th><input type="radio" value="5" class="form-control" name="cb2"></th>
  <th><input type="radio" value="4" class="form-control" name="cb2"></th>
  <th><input type="radio" value="3" class="form-control" name="cb2"></th>
  <th><input type="radio" value="2" class="form-control" name="cb2"></th>
  <th><input type="radio" value="1" class="form-control" name="cb2"></th>
  </tr>
  <tr>
  <th colspan="4">Courtesy and professionalis of the attending personel</th>
  <th><input type="radio" value="5" class="form-control" name="cb3"></th>
  <th><input type="radio" value="4" class="form-control" name="cb3"></th>
  <th><input type="radio" value="3" class="form-control" name="cb3"></th>
  <th><input type="radio" value="2" class="form-control" name="cb3"></th>
  <th><input type="radio" value="1" class="form-control" name="cb3"></th>
  </tr>
  <tr>
  <th colspan="4">Quality of service provided in performing the requested work, service and/or assistance</th>
  <th><input type="radio" value="5" class="form-control" name="cb4"></th>
  <th><input type="radio" value="4" class="form-control" name="cb4"></th>
  <th><input type="radio" value="3" class="form-control" name="cb4"></th>
  <th><input type="radio" value="2" class="form-control" name="cb4"></th>
  <th><input type="radio" value="1" class="form-control" name="cb4"></th>
  </tr>


  </tbody>
</table>
</div>
</div>
</div>
<br>


<input name ="jos" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">
