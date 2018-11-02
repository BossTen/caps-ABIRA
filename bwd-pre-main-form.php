<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenance BWSWF</title>
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


<!--body-->

<center><h1 class="w3-text-red">Preventive Maintenance Form</h1></center>
<div class="container" style="margin-top: 1em;">
    <form action="../capstone2/test.php" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:5%;">
            <div class="row">
            <h2>Building WALLS, DOORS, WINDOWS and FLOORS (Main II)</h2>
            </div>

             <div class="row "><h4 class="col-6"><b>Work:</b>&nbsp;
             <select class="form-control form-control" name="work" id="campus">
             				<option value="">Building WALLS, DOORS, WINDOWS and FLOORS</option>
                              <option value="">AIRCONDITIONING UNITS</option>
                              <option value="">POWER SUPPLY</option>
                              <option value="">PLUMBING SYSTEM</option>
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
                             <select class="form-control form-control" name="" id="Month">
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
                             <h4 class="col-6"><b>Department:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.
</option>
                              <option value="">CICS (College of Informatics & Computing Sciences) Bldg.
</option>
                              <option value="">CIT (College of Industrial Technology) Bldg.</option>
                              <option value="">RG RECTO Bldg. (RGR)</option>
                              <option value="">STUDENT Center Bldg. (SSC)</option>
                              <option value="">FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office
</option>
                              <option value="">RSFIHM (School of Food & International Hotel Management) Bldg.</option>
                              <option value="">Gymnasium Area</option>
                              <option value="">Food Innovation Center Building /option>
                     
                       
                            </select></h4>
                             <h4 class="col-6"><b>Floor:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                             <option value="">Basement Floor</option>
                              <option value="">Ground Floor</option>
                              <option value="">Second Floor</option>
                              <option value="">Third Floor</option>
                              <option value="">Fourth Floor</option>
                              <option value="">Fifth Floor</option>

                       
                            </select></h4>
                            </div>
                            <div class="row">
                             <h4 class="col-6"><b>Type:</b>&nbsp;<select class="form-control form-control" name="" id="campus">
                              <option value="">Door (Repainted; Lock/Knobs repaired/ replaced)</option>
                              <option value="">Windows (Replaced broken Glass covers; Cleaned)</option>	
                              <option value="">Floor Rooms (Replaced broken tiles; Mopped/ Cleaned )</option>
                              <option value="">Lobby (Replaced broken tiles; Mopped/ Cleaned )</option>
                              <option value="">Walls (Repainted; Cleaned)</option>
                              <option value="">Toilet (Cleaned; Repaired/ Replaced Fixtures)</option>
                     
                       
                            </select></h4>
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

    