<?php require 'testadmin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator Notification</title>
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
require 'navbar.php';
?>
<br><br>
<div class="container">
<div class="table-responsive">    
  <table id='table' class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        
        <th>Description</th>
        <th>Date</th>
         <th>Status</th>
         <th>Priority</th>
         <th></th>
      </tr>
    </thead>
    <tbody>
      <?php

      require '../api/dbcon.php';


                                                        $stmt = $conn->prepare("SELECT j.RequestorName,j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName, p.Name as priorityName FROM ((joborder as j  INNER JOIN status as s ON j.statusId = s.Id) INNER JOIN priority as p ON j.priorityId = p.Id) WHERE (j.statusId = 7 || j.statusId = 2) && j.Campus = ?");
                                                        $stmt->bind_param('s',$campus);
                                                        $campus = $_SESSION['usr_campus'];
                                                        $stmt->execute();
                                                        $stmt->bind_result($name,$serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName, $priorityName);


                                
                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                                    echo "<tr>";
                        echo redirectTo($serialCode, $statusId, $serialCode);
                        //echo redirectTo($serialCode, $statusId, $campus);
                        echo redirectTo($serialCode, $statusId, $description);
                        echo redirectTo($serialCode, $statusId, $dCreated);
                        echo redirectTo($serialCode, $statusId, $statusName);
                        echo redirectTo($serialCode, $statusId, $priorityName);
                        echo button($serialCode, $statusId);
                          echo "</tr>";
                                 }

                        function button($sCode, $sId){
                              switch($sId){
                                  case 2: 
                                    //NO REDIRECT
                                        return "<td><a href='job-order-approved.php?serial=". $sCode. "'><button type='button' class='btn btn-success'>Open</button></a></td>";
                                        break;
                                  case 7:
                                  //REDIRECT TO inspection
                                        return "<td><a href='job-order-forinspection.php?serial=". $sCode. "'><button type='button' class='btn btn-success'>Open</button></a></td>";
                                        break;
                                  case 3:
                                  //REDIRECT TO Edenied
                                        return "<td><a href='job-order-denied.php?serial=". $sCode. "'><button type='button' class='btn btn-success'>Open</button></a></td>";
                                        break;
                                  default:
                                        return "<td><a href='not-allowed.php?serial=". $sCode. "'><button type='button' class='btn btn-success'>Open</button></a></td>";
                                        break;
                                }  
                        }
                              function redirectTo($sCode, $sId, $desc){
                                        return "<td>" . $desc . "</td>";
 
                              }
                              ?>
            </tbody>
        </table>
      </div>
    </div>

</body>
</html>



