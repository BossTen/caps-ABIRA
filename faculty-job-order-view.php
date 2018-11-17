<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php

require 'navbar-faculty.php';

?>

<br><br>
<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h1>User Reports</h1></div>

<div class="container">  
  <div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Priority</th>
        <th>Serial</th>
        <th>Campus</th>
        <th>Department</th>
        <th>Services</th>
        <th>Date Requested</th>
        <th>Report Description</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'abira');


// define how many results you want per page
$results_per_page = 20;
// find out the number of results stored in database
$sql = "SELECT * FROM joborder";
$result = mysqli_query ($con,$sql);
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
$sql="SELECT * FROM joborder Order by id DESC  LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['priorityId'] . "</td>";
  echo "<td>" . $row['SerialCode'] . "</td>";
  echo "<td>" . $row['Campus'] . "</td>";
  echo "<td>" . $row['NameOfOffice'] . "</td>";
  echo "<td></td>";
  echo "<td>" . $row['DateRequestCreated'] . "</td>";
  echo "<td>" . $row['UserJobDescription'] . "</td>";
  echo "<td>" . $row['statusId'] . "</td>";
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
    echo '<li class="page-item"><a class="page-link" href="faculty-job-order-view.php?page=' . $page . '">' . $page . '</a> ';

}
?>

</tbody>
</table>
</div>
</div>

<div class="container ">
       <div class="float-right"><a href="faculty-job-order-form.php"> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>





</body>
</html>