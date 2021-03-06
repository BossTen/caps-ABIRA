<!DOCTYPE html>
<html lang="en">
<head>

    <title>Job Order Completed View</title>
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
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
require'navbar.php';

?>


<br>

<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h1>Job Order Completed Records</h1></div>
      
      <div class="col-2"><h4>Month</h4>
        <select name="month" id="month" style="width:80%;" onchange="filterMonth()">
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </div>
      <div class="col-2"><h4>Year</h4>
        <select name="year" id="year" style="width:80%;" onchange="filterYear()">
                    <?php
                                require_once '../api/apiOnly.php';
                                  $years = json_decode($api->fetch_schoolyear(),true);
                                  foreach ($years as $year) {
                                    $year = substr($year,0,4);

                                   echo "<option value='".$year."'>".$year."</option>";

                                  }

                              ?>
        </select>
      </div>

      <!-- <div class="col-1" style="margin-top:3%; margin-left:0%;"><button type="submit" class="btn btn-success ">Show</button></div> -->
   </div>



<br>



<div class="container" style="margin-bottom: 5%">
<div class="table-responsive">    
  <table id='table' class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Subject</th>
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


                                                        $stmt = $conn->prepare("SELECT j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, p.Name,s.name as statusName FROM joborder as j  
                                                          INNER JOIN status as s ON j.statusId = s.Id
                                                          INNER JOIN priority as p ON j.priorityId = p.Id
                                                          WHERE j.Campus = ? && (statusId = 6)");
                                                        $stmt->bind_param('s',$campus);
                                                        $campus = $_SESSION['usr_campus'];
                                                        $stmt->execute();
                                                        $stmt->bind_result($serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId,$priorityName, $statusName);


                                
                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                                    echo "<tr>";
                        echo redirectTo($serialCode, $statusId, $serialCode);
                        echo redirectTo($serialCode, $statusId, $campus);
                        echo redirectTo($serialCode, $statusId, $description);
                        echo redirectTo($serialCode, $statusId, $dCreated);
                        echo redirectTo($serialCode, $statusId, $statusName);
                        echo redirectTo($serialCode, $statusId, $priorityName);
                        echo button($serialCode);
                          echo "</tr>";
                                  
                                  
                                 }
                              function button($sCode){
                                return "<td><a href='job-order.php?serial=". $sCode. "'><button type='button' class='btn btn-success'>Open</button></a></td>";
                              }
                              function redirectTo($sCode, $sId, $desc){

                                switch($sId){
                                  case 6: 
                                        return "<td>" . $desc . "</td>";
                                        break;
                                  
                                  default:
                                        return "<td>". $desc . "</td>";
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
