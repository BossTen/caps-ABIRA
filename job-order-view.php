<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
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
=======
  <title>Job Order View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
>>>>>>> 3f03e4c6e75cbf3f00f313208951f3cc611b9ac6
</head>
<body>
<?php
require'navbar.php';

?>

<<<<<<< HEAD
    <!--body-->
    <br><br>
    <form action="" method="">
        <div class="container">
            <div class="form-row">
                <div class="col-5 w3-text-red">
                    <h1>Job Order Records</h1>
                </div>
                <!-- REMOVED clicking the title of column, does the job -->
                <!-- <div class="col-2">
                    <h4>Campus</h4>
                    <select name="services" style="width:80%;"></select>
                </div>
                <div class="col-2">
                    <h4>Month</h4>
                    <select name="services" style="width:80%;"></select>
                </div>
                <div class="col-2">
                    <h4>Year</h4>
                    <select name="services" style="width:80%;"></select>
                </div> 

                <div class="col-1" style="margin-top:3%; margin-left:0%;"><button type="submit" class="btn btn-success ">Show</button></div>-->
                <div class="col-2">
                    <h4>Filter</h4>
                    <select name="services" style="width:80%;"></select>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                </div>
            </div>

    </form>
    <br>



    <div class="container">
        <table class="table table-bordered" id="jobOrderTable">
            <thead>
                <tr>
                    <th onclick="sortTable(0)">Serial</th>
                    <th onclick="sortTable(1)">Campus</th>
                    <th onclick="sortTable(2)">Date</th>
                    <th onclick="sortTable(3)">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
=======
<!--body-->
<br><br>
<form action="" method="">
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

</form>
<br>



<div class="container">      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Campus</th>
        <th>Date</th>
         <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
>>>>>>> 3f03e4c6e75cbf3f00f313208951f3cc611b9ac6
      require 'dbcon.php';
                                $sql = "SELECT j.SerialCode,j.CampusId, j.DateRequestCreated, j.statusId, c.Name FROM joborder as j inner join capuses as c ON j.CampusId = c.Id ";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
                                    echo "<tr>";
                        echo "<td>" . $row['SerialCode'] . "</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['DateRequestCreated'] . "</td>";
                        echo "<td>" . $row['statusId'] . "</td>";
                          echo "</tr>";
                                  }
                                }
                              ?>
<<<<<<< HEAD

            </tbody>
        </table>
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
=======
    <tr>
          <td><b></b></td>
          <td><b></b></td>
          <td><b></b></td>
          <td><b></td>
          <td style="color:#28a745"><b></b></td>
          </tr>
        </tbody>
      </table>
    </div>

<div class="container ">
       <div class="float-right"><a href="job-order-form.php"> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>
>>>>>>> 3f03e4c6e75cbf3f00f313208951f3cc611b9ac6
