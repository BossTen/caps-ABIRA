<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script src="js/search.js"></script>

<body>
<img src="logo.png" width="100%" height="20%">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="faculty-index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faculty-job-order-form.php">Send Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Notification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
  	</ul>
  </div>
  <form class="form-inline my-2 my-lg-0 w3-right">
      <input class="form-control mr-sm-2" type="text" value=<?php require_once '../api/apiOnly.php'; echo 'Good Day! '. $_SESSION['usr_fullname']; ?>aria-label="Search" readonly>

    </form>
</nav>


<!--joborder-->
<div class="modal fade" id="joborder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      <center>  
      <a href="job-order-form.php" class="btn btn-danger w3-xxlarge" role="button">Job Order Form</a><br><br>
      <a href="job-order-view.php "class="btn btn-danger w3-xxlarge" role="button">Job Order Records</a>
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