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

<div class="col-12" style="color:black; font-size:15px; margin-bottom:5%;">
  <a href="index.php">
 <img src="batlogo.png" alt="logo" width="100px;" style="margin-right:5%; margin-top:5%;border-radius:50%;"></a>General Services Office
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

<center><h1 class="w3-text-red">Job Order Form - Inspection Order</h1></center>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="joborderinsert.php" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:2%;">

             <div class="row "><h4 class="col-6"><b>Serial:</b>&nbsp;<input type="text" name="serial"  class="form-control col-7" placeholder="YearMonthDate ex.20180924" required></h4>
             </div>

        <div class="row "><h4 class="col-6"><b>Date:</b>&nbsp;<input type="date" name="date1"  class="form-control col-7"></h4>
                          <h4 class="col-3"><b>Campus:</b>&nbsp;
                            <select class="form-control form-control" name="campus" id="campus">
                              <option value="Main I">Main I</option>
                              <option value="Main II">Main II</option>
                              <option value="Lemery">Lemery</option>
                              <option value="Balayan">Balayan</option>
                              <option value="Nasugbu">Nasugbu</option>
                              <option value="Malvar">Malvar</option>
                              <option value="Rosario">Rosario</option>
                              <option value="Lobo">Lobo</option>
                              <option value="San Juan">San Juan</option>
                            </select>
        </div>
        <div class="row">
                             <h4 class="col-12"><b>Name of Office:</b>&nbsp;
                             <input type="text" name="nameofoffice" class="form-control col-30" id="nameofoffice" placeholder="Name of Office" required>
        </div>
        </div>
        </div>
<br>
<center><h1 class="w3-text-red">Job Order Request</h1></center>
<div class="container" style="margin-top: 1em;">
    <!-- UPDATE form -->
    <form action="joborderinsert.php" method="POST">
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
<th rowspan=2><input class="w3-check" type="checkbox" name="work" value="Air-condtioning">
<label>Air-conditioning Works:</label></th>
<th><input class="w3-input" type="tb1"></th>
<th colspan=2><input class="w3-input" type="text" name="tb2"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb3"></th>
<th colspan=2><input class="w3-input" type="text" name="tb4"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="work" value="Carpentry/Masonary">
<label><center>Carpentry/ Masonary Works:</label></th>
<th><input class="w3-input" type="text" name="tb5"></th>
<th colspan=2><input class="w3-input" type="text" name="tb6"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb7"></th>
<th colspan=2><input class="w3-input" type="text" name="tb8"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="work" value="Electrical">
<label>Electrical Works:</label></th>
<th><input class="w3-input" type="text" name="tb9"></th>
<th colspan=2><input class="w3-input" type="text" name="tb10"></th>
</tr>
<tr>
<th><center>Job Recommendation</th>
<th colspan=2><input class="w3-input" type="text" name="tb11"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="work" value="Plumbing">
<label><center>Plumbing Works:</label></th>
<th><input class="w3-input" type="text" name="tb12"></th>
<th colspan=2><input class="w3-input" type="text" name="tb13"></th>
</tr>
<tr>
<th><input class="w3-input" type="text" name="tb13"></th>
<th colspan=2><input class="w3-input" type="text" name="tb14"></th>
</tr>
<tr>
<th rowspan=2><input class="w3-check" type="checkbox" name="work" value="Welding">
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
<th><input class="w3-input" type="text" name="reqtb"></th>
<th><input class="w3-input" type="text" name="insptb"></th>
<th><center>Engr. VICTOR A. SEMIRA</th>
</tr>
<tr>
<th>Designation:</th>
<th><input class="w3-input" type="text" name="desg1"></th>
<th><input class="w3-input" type="text" name="desg2"></th>
<th><center>Assistant Director of FMSO</th>
</tr>
<tr>
<th>Date:</th>
<th><input type="date"  class="form-control" name="reqdate"></th>
<th><input type="date"  class="form-control" name="inspdate"></th>
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
<th>Date: <input type="date" name="sosdate"  class="form-control"></th>
<th><input type="date" name="eosdate"  class="form-control"</th>
<th rowspan=2><input class="w3-input" type="text" name="noofhrs"></th>
<th><input class="w3-check" type="checkbox" name="assess1" value="Work completed upon agreed duration">Work completed upon agreed duration</th>
</tr>
<tr>
<th>Time:<input type="time"  class="form-control" name="sostime"></th>
<th><input type="time" class="form-control" name="eostime"></th>
<th><input class="w3-check" type="checkbox" name="assess2" value"Work not completed upon agreed duration">Work not completed upon agreed duration</th>
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
<th colspan=2><input class="w3-input" type="text" name="awtb1"></th>
<th><input class="w3-input" type="text" name="wbtb1"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="awtb2"></th>
<th><input class="w3-input" type="text" name="wbtb2"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="awtb3"></th>
<th><input class="w3-input" type="text" name="wbtb3"></th>
<th></th>
</tr>
<tr>
<th colspan=2><input class="w3-input" type="text" name="awtb4"></th>
<th><input class="w3-input" type="text" name="wbtb4"></th>
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


<input style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">
