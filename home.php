<?php
  require 'checklogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator Index</title>
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
require 'navbar.php';



?>


<br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <div class="stat-icon dib">
              <?php
                  require '../api/dbcon.php';
                  $stmt = $conn->prepare('SELECT COUNT(*) FROM joborder WHERE campus = ?');
                  $stmt->bind_param('s',$campus);
                  $campus = $_SESSION['usr_campus'];
                  $stmt->execute();
                  $stmt->bind_result($totalJobOrderForCampus);
                  $stmt->fetch();
                  $stmt->close();
                  $conn->close();

              ?>
                <i class="fa fa-file" style="font-size:20px;"> Job Orders: <?php echo $totalJobOrderForCampus;?></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <div class="stat-icon dib">
              <?php
                  require '../api/dbcon.php';

                  $stmt = $conn->prepare('SELECT COUNT(*) FROM joborder WHERE campus = ? AND statusId = ?');
                  $stmt->bind_param('ss',$campus,$statusId);
                  $campus = $_SESSION['usr_campus'];
                  $statusId = 2;
                  $stmt->execute();
                  $stmt->bind_result($totalJobOrderForCampusAndApproved);
                  $stmt->fetch();
                  $stmt->close();
                  $conn->close();

              ?>
                <i class="fa fa-file" style="font-size:20px;"> Approved Job Orders: <?php echo $totalJobOrderForCampusAndApproved; ?> </i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md- col-lg- mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <div class="stat-icon dib">
              <?php
               require '../api/dbcon.php';
              
                  $stmt = $conn->prepare('SELECT COUNT(*) FROM joborder WHERE campus = ? AND statusId = ?');
                  $stmt->bind_param('ss',$campus,$statusId);
                  $campus = $_SESSION['usr_campus'];
                  $statusId = 4;
                  $stmt->execute();
                  $stmt->bind_result($totalJobOrderForCampusAndPending);
                  $stmt->fetch();
                  $stmt->close();
                  $conn->close();



              ?>
                <i class="fa fa-file" style="font-size:20px;"> Pending Job Orders: <?php echo $totalJobOrderForCampusAndPending ?> </i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <!--PRE-->
   <div class="form-row">
      <div class="col-12 w3-text-red"><h2>Preventive Maintenance View</h2></div>

<div class="container">
  <div class="table-reponsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Work</th>
         <th>Department</th>
         <th>Date Started</th>
         <th>Accomplish By:</th>
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
$sql = "SELECT * FROM preventive_maintenance";
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
$sql="SELECT * FROM preventive_maintenance  LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['work'] . "</td>";
  echo "<td>" . $row['college'] . "</td>";
  echo "<td>" . $row['dateStarted'] . "</td>";
  echo "<td>" . $row['accomplishedBy'] . "</td>";
}
// display the links to the pages
?>


    </tbody>
  </table>
</div>


</body>
</html>