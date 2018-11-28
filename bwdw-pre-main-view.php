<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenance BWSWF View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
require'navbar.php';

?>


<!--body-->
<br><br>
<form action="" method="">
<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h2>Building, Walls, Doors, Windows Preventive Maintenance View</h2></div>
      <div class="col-2"><h4>Department</h4>
        <select name="services" style="width:80%;"></select>
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

      <!-- <div class="col-1" style="margin-top:3%; margin-left:0%;"><button type="submit" class="btn btn-success ">Show</button></div> -->
   </div>

</form>

<div class="container">
  <div class="table-responsive">      
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Month</th>
          <th>Department</th>
          <th>Floor</th>
          <th>Area</th>
          <th>Type</th>
          <th>Date Started</th>
          <th>Date Ended</th>
          <th>Accomplished by:</th>
        </tr>
      </thead>
      <tbody>
        <?php
// connect to database
require '../api/dbcon.php';


// define how many results you want per page
$results_per_page = 20;
// find out the number of results stored in database
$sql = "SELECT * FROM preventive_maintenance WHERE work LIKE 'building%' AND campus LIKE 'Alangilan%'";
$result = mysqli_query ($conn,$sql);
$number_of_results = mysqli_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql="SELECT * FROM preventive_maintenance WHERE work LIKE 'Building%' AND campus LIKE 'Alangilan%' Order by id DESC  LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['month'] . "</td>";
  echo "<td>" . $row['campus'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['floor'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "<td>" . $row['dateStarted'] . "</td>";
  echo "<td>" . $row['dateEnded'] . "</td>";
  echo "<td>" . $row['accomplishedBy'] . "</td>";
}
// display the links to the pages
?>


    </tbody>
  </table>
</div>


<div class="container">
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<li class="page-item"><a class="page-link" href="ps-pre-main-view.php?page=' . $page . '">' . $page . '</a> ';

}
?>
</div>

      </tbody>
    </table>
  </div>
</div>

<div class="container ">
       <div class="float-right"><a href="bwdw-pre-main-form.php"> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>