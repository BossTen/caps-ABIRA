<!DOCTYPE html>
<html lang="en">

<head>
    <title>Scheduling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="w3.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

<body>
    <?php

require 'test-director-admin.php';
if($_SESSION['usr_type']=='admin')
require 'navbar.php';
else
require 'navbar-director.php';


?>
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
        <table class="table table-bordered" id="results">
            <thead>
                <tr>
                    <!-- <th onclick="sortTable(0)">Priority</th> -->
                    <th onclick="sortTable(1)">Serial</th>
                    <th onclick="sortTable(2)">Work Description</th>
                    <th onclick="sortTable(3)">Start Date</th>
                    <th onclick="sortTable(3)">End Date</th>
                    <th onclick="sortTable(4)">Status</th>
                    <th onclick="sortTable(4)">Priority</th>
                </tr>
            </thead>
            <tbody>
                <?php


                switch ($_SESSION['usr_type']){

                    case 'director':
             require '../api/dbcon.php';

            $stmt = $conn->prepare("SELECT j.StartOfService, j.EndOfService, j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName , p.name as priorityName FROM ((joborder as j INNER JOIN status as s ON j.statusId = s.Id) INNER JOIN priority as p ON j.priorityId = p.Id)
                                WHERE j.Campus = ? && s.Name = 'On-Going'");
            $stmt->bind_param('s',$campus);
            $campus = $_SESSION['usr_campus'];
            $stmt->execute();
            $stmt->bind_result($startOfService, $endOfService, $serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName, $priorityName);


                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                        echo "<tr>";
                        // echo redirectDirector($serialCode, $statusId, $priorityName);
                        echo redirectDirector($serialCode, $statusId, $serialCode);
                        echo redirectDirector($serialCode, $statusId, $userJobDescription);
                        // echo redirectDirector($serialCode, $statusId, $startOfService);
                        echo "<td>" . $startOfService . "</td>";

                        echo redirectAdmin($serialCode, $statusId, $endOfService);
                        echo redirectDirector($serialCode, $statusId, $statusName);
                        echo redirectDirector($serialCode, $statusId, $priorityName);
                        echo "</tr>";

                                }
                                break;
                                case 'admin':

             require '../api/dbcon.php';

            $stmt = $conn->prepare("SELECT j.StartOfService, j.EndOfService,  j.SerialCode, j.NameOfOffice, j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName , p.name as priorityName FROM ((joborder as j INNER JOIN status as s ON j.statusId = s.Id) INNER JOIN priority as p ON j.priorityId = p.Id) WHERE j.Campus = ? && s.Name = 'On-Going'");
            $stmt->bind_param('s',$campus);
            
            // (s.Name = 'Approved' || s.Name = 'On-Going' || s.Name = 'Pending For Approval')
            $campus = $_SESSION['usr_campus'];
            $stmt->execute();
            $stmt->bind_result($startOfService, $endOfService,$serialCode,$nameOfOffice, $campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName, $priorityName);


                                while($stmt->fetch()){
                                    $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                                   //$description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                        echo "<tr>";
                        // echo redirectAdmin($serialCode, $statusId, $priorityName);
                        echo redirectAdmin($serialCode, $statusId, $serialCode);
                        echo redirectAdmin($serialCode, $statusId, $description);
                        //echo redirectAdmin($serialCode, $statusId, $startOfService);
                        echo "<td>" . $startOfService . "</td>";
                        echo redirectAdmin($serialCode, $statusId, $endOfService);
                        echo redirectAdmin($serialCode, $statusId, $statusName);
                        echo redirectAdmin($serialCode, $statusId, $priorityName);
                        echo button($serialCode);
                          echo "</tr>";
                                  
                                  
                                 }
                              function button($sCode){
                                return "<td><a href='director-job-order-approval.php?serial=". $sCode. "'><button type='button' class='btn btn-success'>Open</button></a></td>";
                              }
                              function redirectDirector($sCode, $sId, $desc){
                                        return "<td><a href='director-job-order-update.php?serial=". $sCode. "'>" . $desc . "</td>";
                            }
                            function redirectAdmin($sCode, $sId, $desc){
                                        switch($sId){
                                  case 2:
                                        return "<td>" . $desc . "</td>";
                                        break;
                                  case 5:
                                        return "<td>" . $desc . "</td>";
                                        break;
                                  case 7:
                                        return "<td>" . $desc . "</td>";
                                        break;
                                  default:
                                        return "<td>" . $desc . "</td>";
                                        break;
                                }
                            }

?>
            </tbody>

        </table>

<script>
function convertDate(d) {
  var p = d.split("-");
  return +(p[0]+p[1]+p[2]);
}

  var tbody = document.querySelector("#results tbody");
  // get trs as array for ease of use
  var rows = [].slice.call(tbody.querySelectorAll("tr"));

  rows.sort(function(a,b) {
    return convertDate(a.cells[2].innerHTML) - convertDate(b.cells[2].innerHTML);
  });

  rows.forEach(function(v) {
    tbody.appendChild(v); // note that .appendChild() *moves* elements
  });

</script>
