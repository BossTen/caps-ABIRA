<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
?>  
<img src="logo.png" class="img-fluid" alt="Responsive image" width="100%" height="20%">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" >
      
      <li class="nav-item">
        <a class="nav-link" href="scheduling.php">Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Inventory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="director-notif.php">Notification</a>
      </li>
    </ul>
  </div>
  <div class="pull-right">
    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php require_once '../api/apiOnly.php'; echo 'Good Day! '. (isset($_SESSION['usr_fullname'])? $_SESSION['usr_fullname'] : '') ; ?>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="logout.php"><i class="fi-dial"></i>Log Out</a>
  </div>
</div>


</nav>

<!--joborder-->
<div class="modal fade" id="joborder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
     
      <a href="director-job-order-view.php "class="btn btn-danger w3-xxlarge" role="button">Job Order Records</a>
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
      <a href="bwdw-pre-main-form.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Adding  Form</a><br><br>
      <a href="bwdw-pre-main-view.php" class="btn btn-danger w3-xlarge" role="button">Preventive Maintenance Records</a>
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

