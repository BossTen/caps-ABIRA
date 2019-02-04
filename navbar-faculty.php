<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
?>
<body>
<img src="logo.png" class="img-fluid" alt="Responsive image" width="100%" height="20%">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="faculty-index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" >
      <li class="nav-item">
        <a href="faculty-job-order-form.php" class="nav-link">Send Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faculty-notif.php">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faculty-notices.php">Notices</a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link" data-toggle="modal" data-target="#faqs" >FAQs</a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="faculty-forevaluation-view.php">Evaluation</a>
      </li> -->
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

<style>
.label {
  color: #80b3ff;
  font-size: 20px;
}
.h6 {
  color: #cc00cc;
}
</style>
<div class="modal fade" id="faqs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 style="color:red">User FAQs</h1>
      </div>
      <div class="modal-body">
<h1>Frequently Ask Question</h1>
<label  class="label">1. How do I see the current status of my sent request?</label><br>
<h6 class="h6">A. In the navigation click "Reports". A table of list of your sent reports will show.
In the last column of the table there is a column for status where you can see the current progress of your service request.
<label class="label">
2. Can I request more than 1 service in one job order request?</label><br>
A. Yes. Just click on the checkbox next to the type of services you need and make a detailed description of the trouble in the description box.
<label class="label">3. How do I send a message to the GSO?</label><br>
A. Click on a request you sent. Under the job order form is a button "write a message".
Click this button, compose your message, and click send. If the GSO replies, you can see it in the notices page when you click notices in the navigation bar above the page.
<label class="label">4. How do I cancel a sent request?</label><br>
A. To cancel a request you will need to send a message to the GSO for them to stop the progress of your request.
<label class="label">5. How do I create a new account?</label><br>
A. To ensure the security and integrity of the system, the only person that can create an account is the GSO admin.
There is only one account per department. For a new account, you will have to go the GSO personally and they will register you in the system and create an account for you.</h6><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>