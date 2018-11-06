<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Order View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
require'navbar.php';

?>

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

<br><br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">&larr; Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next &rarr; </a>
    </li>
  </ul>
</nav>
