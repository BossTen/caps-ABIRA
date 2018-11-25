

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
require'navbar-director.php';

?>


<br><br>

<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h1>Job Order Records</h1></div>
      <div class="col-2"><h4>Campus</h4>
        <select name="campus" id="campus" style="width:80%;" onchange="filterCampus()">
          <?php
                                require_once '../api/apiOnly.php';
                                  $campuses = json_decode($api->fetch_campuses(),true);
                                  foreach ($campuses as $campus) {
                                   echo "<option value='".$campus['code']."'>".$campus['code']."</option>";

                                  }

                              ?>
        </select>
      </div>
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
  <table class="table table-striped" id="director-table">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Campus</th>
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
                        echo "<td><a style='color:#1d1d1d !important;' href='director-job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['SerialCode'] . "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='director-job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['Campus'] . "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='director-job-order-update.php?serial=". $row['SerialCode']. "'>" .$description. "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='director-job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['DateRequestCreated'] . "</td>";
                        echo "<td><a style='color:#1d1d1d !important;' href='director-job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['statusName'] . "</td>";
                          echo "</tr>";
                                  }
                                }
                              }
                              ?>
            </tbody>
        </table>
      </div>
    </div>
    <!-- <div class="container ">
        <div class="float-right"><a href="job-order-form.php"> <button type="button" class="btn btn-success">Add</button></a>
        </div>
    </div> -->
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

        function filterCampus() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("campus");
            filter = input.value.toUpperCase();
            table = document.getElementById("director-table");
            tr = table.getElementsByTagName("tr");

              // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; //campus
                
                if (td) {
                  console.log(td.innerHTML.toUpperCase().indexOf(filter));

                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

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
