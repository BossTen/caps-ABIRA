<?php
  require 'checklogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Director Index</title>
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php
require 'navbar-director.php';
?>

<br><br>
<div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <div class="stat-icon dib">
                <i class="fa fa-file" style="font-size:20px;"> Job Orders: </i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <div class="stat-icon dib">
                <i class="fa fa-file" style="font-size:20px;"> Approved Job Orders: </i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md- col-lg- mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <div class="stat-icon dib">
                <i class="fa fa-file" style="font-size:20px;"> Pending Job Orders: </i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h1>Job Order Approval</h1></div>
   </div>

<div class="container">
<div class="table-reponsive">    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Date</th>
         <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require '../api/dbcon.php';

                    if($_SESSION['usr_type']=='director'){
                                $sql = "SELECT j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName FROM joborder as j  INNER JOIN status as s ON j.statusId = s.Id WHERE j.statusId = 1 OR j.statusId = 2 OR j.statusId = 3";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
                                   $description =   empty($row['JobRecommendation']) ? $row['UserJobDescription'] : $row['JobRecommendation'];
                                    echo "<tr>";
                        echo "<td><a style='color:#1d1d1d !important;' href='job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['SerialCode'] . "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['Campus'] . "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='job-order-update.php?serial=". $row['SerialCode']. "'>" .$description. "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['DateRequestCreated'] . "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['statusName'] . "</td>";
                          echo "</tr>";
                                  }
                                }
                    }else if($_SESSION['usr_type']=='admin'){
                                                        $sql = "SELECT j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName FROM joborder as j  INNER JOIN status as s ON j.statusId = s.Id WHERE j.statusId = 4 OR j.statusId = 5 OR j.statusId = 6 OR j.statusId = 2";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
                                   $description =   empty($row['JobRecommendation']) ? $row['UserJobDescription'] : $row['JobRecommendation'];
                                    echo "<tr>";
                        echo "<td>" . $row['SerialCode'] . "</td>";
                        echo "<td>" . $row['Campus'] . "</td>";
                        echo "<td>" .$description. "</td>";
                        echo "<td>" . $row['DateRequestCreated'] . "</td>";
                        echo "<td>" . $row['statusName'] . "</td>";
                          echo "</tr>";
                                  }
                                }
                    }


                              ?>


            </tbody>
        </table>
      </div>
    </div>


</body>
</html>