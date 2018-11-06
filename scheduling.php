<?php
//REMAINDER
/*
    Codes below are retrieving all data
    Kindly update this ones resources are available,
    must only retrieve data as per campus that the admin logged in
    
    
*/

require 'dbcon.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Scheduling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
</head>

<body>
    <?php
require'navbar.php';

?>

<<<<<<< HEAD
<!--body-->
<br>
<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1 class="w3-text-red">Scheduling</h1></div>
   </div>
</div>



<div class="container">      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Set as</th>
        <th>Serial</th>
        <th>Campus</th>
        <th>Date</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <tr>  
          <td><b>urgernt</b></td>
          <td><b>1111</b></td>
          <td><b>Main II</b></td>
          <td><b>10/10/18</b></td>
          <td style="color:#28a745"><b>Ongoing</b></td>
          </tr>
        </tbody>
      </table>

<div class="container ">
       <div class="float-right"><a href=""> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>
=======
    <!--body-->
    <br>
    <div class="container">
        <div class="form-row text-center">
            <div class="col-12">
                <h1 class="w3-text-red">Scheduling</h1>
            </div>
        </div>
    </div>



    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>Campus</th>
                    <th>Date</th>
                    <th>Priority</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php

                                $sql = "SELECT j.SerialCode,j.CampusId, j.DateRequestCreated, j.statusId, c.Name as CampusName, s.Name as StatusName, p.Name as PriorityName FROM((( joborder as j 
                                inner join capuses as c ON j.CampusId = c.Id) 
                                inner join status as s on j.statusId = s.Id )
                                inner join priority as p on j.priorityId = p.Id)";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
                                    echo "<tr>";
                        echo "<td>" . $row['SerialCode'] . "</td>";
                        echo "<td>" . $row['CampusName'] . "</td>";
                        echo "<td>" . $row['DateRequestCreated'] . "</td>";
                        echo "<td>" . $row['PriorityName'] . "</td>";
                        echo "<td>" . $row['StatusName'] . "</td>";
                          echo "</tr>";
                                  }
                                }
                              ?>

            </tbody>
        </table>

        <div class="container ">
            <div class="float-right"><a href=""> <button type="button" class="btn btn-success">Add</button></a>
            </div>
        </div>
        <script>
            //add script that would add class to priority and status
            //example red for high priority
            
            //add script for priority

        </script>
>>>>>>> 843a66f795bb7a91fce13727edc759bc6efddb69
