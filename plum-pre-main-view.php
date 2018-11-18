<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenance Plumbing View</title>
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
require'navbar.php';

?>


<!--body-->
<br><br>
<form action="" method="">
<div class="container">
   <div class="form-row">
      <div class="col-5 w3-text-red"><h2>Plumbing<br> Preventive Maintenance View</h2></div>
      <div class="col-2"><h4>Department</h4>
        <select name="services" style="width:80%;"></select>
      </div>
      <div class="col-2"><h4>Month</h4>
        <span><select name="month">
        <?php for( $m=1; $m<=12; ++$m ) { 
          $month_label = date('F', mktime(0, 0, 0, $m, 1));?>
          <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
        <?php } ?>
      </select> 
    </span>
      </div>
      <div class="col-2"><h4>Year</h4>
        <span>
      <select name="year">
        <?php 
          $year = date('Y');
          $min = $year - 10;
          $max = $year;
          for( $i=$max; $i>=$min; $i-- ) {
            echo '<option value='.$i.'>'.$i.'</option>';
          }
        ?>
      </select>
    </span>
      </div>

      <div class="col-1" style="margin-top:3%; margin-left:0%;"><button type="submit" class="btn btn-success ">Show</button></div>
   </div>

</form>
<div class="container">
<div class="table-responsive">   
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Month</th>
        <th>Campus</th>
         <th>Department</th>
         <th>Floor</th>
         <th>Type</th>
         <th>Date Started</th>
         <th>Date Ended</th>
         <th>Accomplish by:</th>
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
$sql = "SELECT * FROM preventive_maintenance WHERE work LIKE 'Plumbing%' AND campus LIKE 'Alangilan%'";
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
$sql="SELECT * FROM preventive_maintenance WHERE work LIKE 'Plumbing%' AND campus LIKE 'Alangilan%' Order by id DESC  LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);
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
    echo '<li class="page-item"><a class="page-link" href="plum-pre-main-view.php?page=' . $page . '">' . $page . '</a> ';

}
?>
</div>
<div class="container ">
       <div class="float-right"><a href="job-order-form.php"> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>