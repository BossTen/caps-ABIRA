<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
?>
<body>
<img src="logo.png" class="img-fluid" alt="Responsive image" width="100%" height="20%">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="faculty-job-order-form.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" >
      <li class="nav-item">
        <a href="faculty-job-order-form.php" class="nav-link">Send Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faculty-notif.php">Notification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
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