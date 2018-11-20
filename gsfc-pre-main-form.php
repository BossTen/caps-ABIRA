<?php
require '../api/dbcon.php';
require 'test-director-admin.php';

if(isset($_POST['submit'])){
$stmt = $conn->prepare('INSERT INTO preventive_maintenance (
                                              work,
                                              campus,
                                              month,
                                              college,
                                              m_activity,
                                              dateStarted,
                                              accomplishedBy
                                              )
                                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ');
 $stmt->bind_param('ssssssssss',
                              $work,
                              $campus,
                              $month,
                              $college,
                              $m_activity,
                              $dateStarted,
                              $accomplishedBy
                              
                  );
$work = isset($_POST['work']) ? $_POST['work'] : '';
$campus = isset($_POST['campus']) ? $_POST['campus'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$college = isset($_POST['college']) ? $_POST['college'] : '';
$m_activity = isset($_POST['m_activity']) ? $_POST['m_activity'] : '';
$dateStarted = isset($_POST['date-started']) ? $_POST['date-started'] : '';
$accomplishedBy = isset($_POST['accomplished-by']) ? $_POST['accomplished-by'] : '';

$stmt->execute();

if($stmt){
  echo "<script type='text/javascript'>
                alert ('Data has been inserted'); 
                window.location.href='gsfc-pre-main-view.php';</script>";
}else{
echo "<script type='text/javascript'>
                alert ('There has been an error, please try again :)'); 
                window.location.href='gsfc-pre-main-form.php';</script>";
                
}
$stmt->close();
$conn->close();
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generator Set/Fuel Container Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
require'navbar.php';

?>


<!--body-->
<br>
<center><h1 class="w3-text-red">Preventive Maintenance Form</h1></center>
<div class="container" style="margin-top: 1em;">
    <form action="" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:5%;">
            <div class="row">
            <h2>Generator Set/Fuel Container</h2>
            </div>

             <div class="row "><h4 class="col-6"><b>Work:</b>&nbsp;
             <select class="form-control form-control" name="work" id="work">
                  <option value="Generator Set/Fuel Container">Generator Set/Fuel Container</option>
                  <option value="Building, Walls, Doors Windows">Building, Walls, Doors Windows</option>
                  <option value="Power Supply">Power Supply</option>
                  <option value="Plumbing">Plumbing</option>
                  <option value="Air-conditioning">Air-conditioning</option>
                  
                  
                </select></h4>
                              <h4 class="col-6"><b>Campus:</b>&nbsp;
                                                          <select class="form-control form-control" name="campus" id="campus" readonly>
                                <?php
                                require '../api/apiOnly.php';
                                  $campuses = json_decode($api->fetch_campuses(),true);
                                  foreach ($campuses as $campus) {
                                    //$_SESSION['usr_campus'] = 'SAN JUAN';

                                  $selected = strtolower($campus['code']) == strtolower($_SESSION['usr_campus']) ? 'selected' : '';

                                   echo "<option value='".$campus['code']."'". $selected .">".$campus['code']."</option>";

                                  }

                              ?>
                            </select></h4>
                              
        </div>              
        <div class="row">
                             <h4 class="col-6"><b>Month:</b>&nbsp;
                             <select class="form-control form-control" name="month" id="month">
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                              <option value="May">May</option>
                              <option value="June">June</option>
                              <option value="July">July</option>
                              <option value="August">August</option>
                              <option value="September">September</option>
                              <option value="October">October</option>
                              <option value="November">November</option>
                              <option value="December">December</option>
                            </select></h4>
        </div>
        
                            <div class="row">
                             <h4 class="col-6"><b>Maintenance Activiteis Performed:</b>&nbsp;<select class="form-control form-control" name="m-activity" id="m-activity">
                              <option value="Generator Set (Test run; Check fuel consumption; Cleaning)">Generator Set (Test run; Check fuel consumption; Cleaning)</option>
                              <option value="Fuel Container (Refilling; Check fuel amount)">Fuel Container (Refilling; Check fuel amount)</option>
                              
                           
                     
                       
                            </select></h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Date:</b>&nbsp;<input type="date" name="date-started"  class="form-control col-12">
                    
                    </h4>
                             
        </div>
         <div class="row">
                             <h4 class="col-12"><b>Accomplish by:</b>&nbsp;<input type="text" name="accomplished-by"  class="form-control col-12"></h4>
        </div>
        <div class="row">
                <input style="padding:20px;" class="btn btn-success col-12" name="submit" type="submit" value="Save">
        </div>