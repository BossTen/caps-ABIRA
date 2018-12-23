<?php require_once 'testfaculty.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Notification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
      <div class="col-5 w3-text-red"><h1>User Reports</h1></div>

<div class="container" style="margin-bottom: 5%">  
  <div class="table-responsive">
  <table class="table table-striped table-hover table-responsive">
    <thead>
      <tr>
        <th>Priority</th>
        <th>Serial</th>
        <th>Campus</th>
        <th>Department</th>
        <th>Date Requested</th>
        <th>Report Description</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

      <?php
 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  
      require '../api/dbcon.php';
            $stmt = $conn->prepare("SELECT j.Campus, j.NameOfOffice, j.StartOfService, j.EndOfService, j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName , p.name as priorityName FROM ((joborder as j INNER JOIN status as s ON j.statusId = s.Id) INNER JOIN priority as p ON j.priorityId = p.Id)
                                WHERE j.RequestorName = ? && (j.statusId = 5 || j.statusId = 7)");
            $stmt->bind_param('s',$usr_fullname);
            $usr_fullname = $_SESSION['usr_fullname'];
            $stmt->execute();
            $stmt->bind_result($campus, $NameOfOffice, $startOfService, $endOfService, $serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName, $priorityName);

                                
                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                        echo "<tr>";
                        echo "<td>" . $priorityName . "</td>";
                        echo "<td>" . $serialCode . "</td>";
                        echo "<td>" . $campus . "</td>";
                        echo "<td>" . $NameOfOffice . "</td>";
                        echo "<td>" . $dCreated . "</td>";
                        echo "<td>" . $userJobDescription . "</td>";
                        echo "<td>" . $statusName . "</td>";
                        echo "</tr>";

                                }

                              ?>  

    </tbody>
  </table>
</div>





<div class="container ">
       <div class="float-right"><a href="faculty-job-order-form.php"> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>





</body>
</html>