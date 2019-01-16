<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Notices</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php

require 'navbar-faculty.php';

?>

<br><br>

<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h1>Notices</h1></div>
    </div>
</div>
<br>

<div class="container">  
  <div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Message</th>
        <th>Date</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      require '../api/dbcon.php';

      $stmt = $conn->prepare("SELECT m.id, m.serialCode, m.facultyId, m.adminId, m.dateCreated, m.message, a.NameOfOffice, a.campus, a.Department, a.designation FROM messages as m INNER JOIN accounts AS a ON m.facultyId = a.Id WHERE a.Campus = ? AND m.sender='admin'");
      $stmt->bind_param('s', $sCampus);
      $sCampus = $_SESSION['usr_campus'];
      $stmt->execute();
      $stmt->bind_result($mId, $mSCode, $mFId, $mAId, $dateCreated, $mMessage, $aNameOfOffice, $aCampus, $aDepartment, $aDesignation);
      while($stmt->fetch()){
        echo "<tr>";
        echo  "<td>" . $mMessage . "</td>";
        echo  "<td>" . $dateCreated . "</td>";
    
        // echo '<td><a href="" class="nav-link" data-toggle="modal" data-target="#reply" ><button type="button" class="btn btn-success">Reply</button></a></th>';
        echo '<td><a href="faculty-message.php?id='. $mId. '"><button type="button" class="btn btn-success">Reply</button></a></th>';
        echo "</tr>";
      }

      $stmt->close();
      $conn->close();
      ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="reply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <input type="text" name="" class="form-control col-12" id="" placeholder="Enter your message"><br>
        <button type="button" class="btn btn-success">Send</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>