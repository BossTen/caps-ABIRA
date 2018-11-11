<!DOCTYPE html>
<html lang="en">
<head>

    <title>Job Order View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                                $sql = "SELECT SerialCode,Campus, UserJobDescription, JobRecommendation, DateRequestCreated, statusId FROM joborder";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
                                   $description =   empty($row['JobRecommendation']) ? $row['UserJobDescription'] : $row['JobRecommendation'];
                                    echo "<tr>";
                        echo "<td><a href='job-order-update.php?serial=". $row['SerialCode']. "'>" . $row['SerialCode'] . "</td>";
                        echo "<td>" . $row['Campus'] . "</td>";
                        echo "<td>" .$description. "</td>";
                        echo "<td>" . $row['DateRequestCreated'] . "</td>";
                        echo "<td>" . $row['statusId'] . "</td>";
                          echo "</tr>";
                                  }
                                }
                              ?>


            </tbody>
        </table>
      </div>
    </div>

    <div class="container ">
        <div class="float-right"><a href="job-order-form.php"> <button type="button" class="btn btn-success">Add</button></a>
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

</body>

</html>
