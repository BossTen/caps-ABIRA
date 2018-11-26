<?php
       if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
          }  
    require 'testadmin.php';
    //echo $_SESSION['usr_campus'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Job Order View</title>
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
      <div class="col-5 w3-text-red"><h1>Job Order Records</h1></div>
      
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
                                    $year = substr($year,5);
                                   echo "<option value='".$year."'>".$year."</option>";

                                  }

                              ?>
        </select>
      </div>

      <div class="col-1" style="margin-top:3%; margin-left:0%;"><button type="submit" class="btn btn-success ">Show</button></div>
   </div>



<br>



<div class="container">
<div class="table-responsive">    
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
                        echo "</tr>";

                                }
                              ?>
            </tbody>
        </table>
      </div>
    </div>

    <div class="container ">
      
        <div class="float-right"><a href="<?php echo (($_SESSION['usr_type']=='faculty')? 'faculty-job-order-form.php' : 'job-order-form.php') ?>"> <button type="button" class="btn btn-success">Add</button></a>
        </div>
    </div>

    <script>

            function filterMonth() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("month");
            filter = input.value.toUpperCase();
            table = document.getElementById("director-table");
            tr = table.getElementsByTagName("tr");

              // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3]; 
                
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {

                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function filterYear() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("year");
            filter = input.value.toUpperCase();
            table = document.getElementById("director-table");
            tr = table.getElementsByTagName("tr");

              // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3]; 
                
                if (td) {
                  console.log(td.innerHTML.toUpperCase().substring(0,4));
                    if (td.innerHTML.toUpperCase().indexOf(filter)> -1) {
                      //console.log(td.innerHTML.toUpperCase());

                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</div>
</body>

</html>
