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
require 'navbar.php';
require 'test-director-admin.php';

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
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th onclick="sortTable(0)">Priority</th>
                    <th onclick="sortTable(1)">Serial</th>
                    <th onclick="sortTable(2)">Department</th>
                    <th onclick="sortTable(3)">Date</th>
                    <th onclick="sortTable(4)">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
                echo $_SESSION['usr_type'];
                switch ($_SESSION['usr_type']){

                    case 'director':
             require '../api/dbcon.php';
      
            $stmt = $conn->prepare("SELECT j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName , p.name as priorityName FROM ((joborder as j INNER JOIN status as s ON j.statusId = s.Id) INNER JOIN priority as p ON j.priorityId = p.Id)
                                WHERE j.Campus = ? && (s.Name = 'Denied' || s.Name = 'Approved' || s.Name = 'Pending For Approval')");
            $stmt->bind_param('s',$campus);
            $campus = $_SESSION['usr_campus'];
            $stmt->execute();
            $stmt->bind_result($serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName, $priorityName);

                                
                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                        echo "<tr>";
                        echo redirectDirector($serialCode, $statusId, $priorityName);
                        echo redirectDirector($serialCode, $statusId, $serialCode);
                        echo redirectDirector($serialCode, $statusId, $userJobDescription);
                        echo redirectDirector($serialCode, $statusId, $dCreated);
                        echo redirectDirector($serialCode, $statusId, $statusName);
                        echo "</tr>";

                                }
                                break;
                                case 'admin':

             require '../api/dbcon.php';
      
            $stmt = $conn->prepare("SELECT j.SerialCode, j.NameOfOffice, j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName , p.name as priorityName FROM ((joborder as j INNER JOIN status as s ON j.statusId = s.Id) INNER JOIN priority as p ON j.priorityId = p.Id) WHERE j.Campus = ? && (s.Name = 'Approved' || s.Name = 'On-Going' || s.Name = 'Pending For Approval')");
            $stmt->bind_param('s',$campus);
            $campus = $_SESSION['usr_campus'];
            $stmt->execute();
            $stmt->bind_result($serialCode,$nameOfOffice, $campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName, $priorityName);

                                
                                while($stmt->fetch()){
                                   //$description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;
                        echo "<tr>";
                        echo redirectAdmin($serialCode, $statusId, $priorityName);
                        echo redirectAdmin($serialCode, $statusId, $serialCode);
                        echo redirectAdmin($serialCode, $statusId, $nameOfOffice);
                        echo redirectAdmin($serialCode, $statusId, $dCreated);
                        echo redirectAdmin($serialCode, $statusId, $statusName);
                        echo "</tr>";

                                }
                                break;
                    }

                              function redirectDirector($sCode, $sId, $desc){
                                        return "<td><a href='director-job-order-update.php?serial=". $sCode. "'>" . $desc . "</td>";
                            }     
                            function redirectAdmin($sCode, $sId, $desc){
                                        switch($sId){
                                  case 2: 
                                        return "<td><a href='job-order-approved.php?serial=". $sCode. "'>" . $desc . "</td>";
                                        break;
                                  case 5:
                                        return "<td><a href='job-order-ongoing.php?serial=". $sCode. "'>" . $desc . "</td>";
                                        break;
                                  case 7:
                                        return "<td><a href='job-order-forinspection.php?serial=". $sCode. "'>" . $desc . "</td>";
                                        break;
                                  default:
                                        return "<td><a href='job-order.php?serial=". $sCode. "'>" . $desc . "</td>";
                                        break;
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

        </script>
