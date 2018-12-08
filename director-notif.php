<?php require 'testdirector.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Director Notification</title>
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
require 'navbar-director.php';
?>
<br><br>
        <center>
  <h1 style="color: red;">Pending for Approval</h1>
</center>

<div class="container" style="margin-bottom: 5%;">
<div class="table-responsive">    
  <table id='table' class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        
        <th>Description</th>
        <th>Date</th>
         <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require '../api/dbcon.php';


                                                        $stmt = $conn->prepare("SELECT j.RequestorName,j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName FROM joborder as j  INNER JOIN status as s ON j.statusId = s.Id WHERE (j.statusId = 1) && j.Campus = ?");
                                                        $stmt->bind_param('s',$campus);
                                                        $campus = $_SESSION['usr_campus'];
                                                        $stmt->execute();
                                                        $stmt->bind_result($name,$serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName);


                                
                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                                    echo "<tr>";
                        echo redirectTo($serialCode, $statusId, $serialCode);
                        //echo redirectTo($serialCode, $statusId, $campus);
                        echo redirectTo($serialCode, $statusId, $description);
                        echo redirectTo($serialCode, $statusId, $dCreated);
                        echo redirectTo($serialCode, $statusId, $statusName);
                          echo "</tr>";
                                  
                                  
                                 }
                      
                              function redirectTo($sCode, $sId, $desc){

                                switch($sId){

                                  case 1:
                                  //REDIRECT TO EVALUATION
                                        return "<td><a href='director-job-order-approval.php?serial=". $sCode. "'>" . $desc . "</td>";
                                        break;
                                  default:
                                        return "<td><a href='not-allowed.php?serial=". $sCode. "'>" . $desc . "</td>";
                                        break;
                                }  
                              }
                              ?>
            </tbody>
        </table>
      </div>
    </div>

</body>
</html>



