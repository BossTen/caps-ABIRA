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


<br><br>

<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h1>Job Order Records</h1></div>
      <div class="col-2"><h4>Campus</h4>
        <select name="services" style="width:80%;"></select>
      </div>
      <div class="col-2"><h4>Month</h4>
        <select name="services" style="width:80%;"></select>
      </div>
      <div class="col-2"><h4>Year</h4>
        <select name="services" style="width:80%;"></select>
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

                   if($_SESSION['usr_type']=='admin'){
                                                        $stmt = $conn->prepare("SELECT j.SerialCode,j.Campus, j.UserJobDescription, j.JobRecommendation, j.DateRequestCreated, j.statusId, s.name as statusName FROM joborder as j  INNER JOIN status as s ON j.statusId = s.Id WHERE j.Campus = ?");
                                                        $stmt->bind_param('s',$campus);
                                                        $campus = $_SESSION['usr_campus'];
                                                        $stmt->execute();
                                                        $stmt->bind_result($serialCode,$campus,$userJobDescription, $JobRecommendation, $dCreated, $statusId, $statusName);

                                
                                while($stmt->fetch()){
                                   $description =   empty($JobRecommendation) ? $userJobDescription : $JobRecommendation;

                                    echo "<tr>";
                        echo redirectTo($serialCode, $statusId, $serialCode);
                        echo redirectTo($serialCode, $statusId, $campus);
                        echo redirectTo($serialCode, $statusId, $userJobDescription);
                        echo redirectTo($serialCode, $statusId, $dCreated);
                        echo redirectTo($serialCode, $statusId, $statusName);
                          echo "</tr>";
                                  
                                  
                                }
                    }
                              function redirectTo($sCode, $sId, $desc){

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
      </div>
    </div>

    <div class="container ">
      
        <div class="float-right"><a href="<?php echo (($_SESSION['usr_type']=='faculty')? 'faculty-job-order-form.php' : 'job-order-form.php') ?>"> <button type="button" class="btn btn-success">Add</button></a>
        </div>
    </div>


    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("jobOrderTable");
            switching = true;
            //Set the sorting direction to ascending:
            dir = "asc";
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    /*check if the two rows should switch place,
                    based on the direction, asc or desc:*/
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    //Each time a switch is done, increase this count by 1:
                    switchcount++;
                } else {
                    /*If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again.*/
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }

        function filterTable() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
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
