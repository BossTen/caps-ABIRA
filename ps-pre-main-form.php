<?php
require '../api/dbcon.php';
require '../api/apiOnly.php';
require 'test-director-admin.php';

if(isset($_POST['submit'])){
$stmt = $conn->prepare('INSERT INTO preventive_maintenance (
                                              work,
                                              campus,
                                              month,
                                              college,
                                              floor,
                                              type,
                                              dateStarted,
                                              dateEnded,
                                              accomplishedBy)
                                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ');
 $stmt->bind_param('sssssssss',
                              $work,
                              $campus,
                              $month,
                              $college,
                              $floor,
                              $type,
                              $dateStarted,
                              $dateEnded,
                              $accomplishedBy
                  );
$work = isset($_POST['work']) ? $_POST['work'] : '';
$campus = isset($_POST['campus']) ? $_POST['campus'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$college = isset($_POST['college']) ? $_POST['college'] : '';
$floor = isset($_POST['floor']) ? $_POST['floor'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$dateStarted = isset($_POST['date-started']) ? $_POST['date-started'] : '';
$dateEnded = isset($_POST['date-ended']) ? $_POST['date-ended'] : '';
$accomplishedBy = isset($_POST['accomplished-by']) ? $_POST['accomplished-by'] : '';
$stmt->execute();

if($stmt){
  echo "<script type='text/javascript'>
                alert ('Data has been inserted'); 
                window.location.href='ps-pre-main-view.php';</script>";
}else{
echo "<script type='text/javascript'>
                alert ('There has been an error, please try again :)'); 
                window.location.href='plum-pre-main-form.php';</script>";
                
}
$stmt->close();
$conn->close();
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenance Power Supply</title>
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

<!-- body -->
<br>
<center><h1 class="w3-text-red">Preventive Maintenance Form</h1></center>
<div class="container" style="margin-top: 1em;">
    <form action="" method="POST">
        <!-- UPDATE card -->
        <div class="card">
            <div class="card-body" style="margin-left:5%;">
            <div class="row">
            <h2>POWER SUPPLY (Main II)</h2>
            </div>


             <div class="row">
                   <h4 class="col-6"><b>Work:</b>&nbsp;
                <input class="form-control" name="work" value="Power Supply" readonly>
                                </h4>
                       <h4 class="col-6"><b>Campus:</b>&nbsp;
                             <input class="form-control" name="campus" id="campus" value="<?php echo $_SESSION['usr_campus'] ?>" readonly>

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
                             <h4 class="col-6"><b>Department:</b>&nbsp;
                             <select class="form-control form-control" name="college" id="college">
                              <option value="CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.">CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.
</option>
                              <option value="CICS (College of Informatics & Computing Sciences) Bldg.">CICS (College of Informatics & Computing Sciences) Bldg.
</option>
                              <option value="CIT (College of Industrial Technology) Bldg.">CIT (College of Industrial Technology) Bldg.</option>
                              <option value="RG RECTO Bldg. (RGR)">RG RECTO Bldg. (RGR)</option>
                              <option value="STUDENT Center Bldg. (SSC)">STUDENT Center Bldg. (SSC)</option>
                              <option value="FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office">FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office
</option>
                              <option value="RSFIHM (School of Food & International Hotel Management) Bldg.">RSFIHM (School of Food & International Hotel Management) Bldg.</option>
                              <option value="Gymnasium Area">Gymnasium Area</option>
                              <option value="Food Innovation Center Building">Food Innovation Center Building </option>
                     
                       
                            </select></h4>
                             <h4 class="col-6"><b>Floor:</b>&nbsp;
                             <select class="form-control form-control" name="floor" id="campus">
                             <option value="Basement Floor">Basement Floor</option>
                              <option value="Ground Floor">Ground Floor</option>
                              <option value="Second Floor">Second Floor</option>
                              <option value="Third Floor">Third Floor</option>
                              <option value="Fourth Floor">Fourth Floor</option>
                              <option value="Fifth Floor">Fifth Floor</option>

                       
                            </select></h4>
                            </div>
                            <div class="row">
                             <h4 class="col-6"><b>Type:</b>&nbsp;<select class="form-control form-control" name="type" id="type">
                              <option value="LO - Lighting Outlet">LO - Lighting Outlet</option>
                              <option value="CO - Convience Outlet">CO - Convience Outlet</option>
                              <option value="Ceiling Fans">Ceiling Fans</option>	
                              <option value="Fire Alarms">Fire Alarms</option>
                              <option value="Panel Boards">Panel Boards</option>
                              <option value="Switching">Switching</option>
                           
                     
                       
                            </select></h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Date Started:</b>&nbsp;<input type="date" name="date-started"  class="form-control col-12">
                    
                    </h4>
                             <h4 class="col-6"><b>Date Ended:</b>&nbsp;<input type="date" name="date-ended"  class="form-control col-12">
                    </h4>
        </div>
         <div class="row">
                             <h4 class="col-12"><b>Accomplish by:</b>&nbsp;<input type="text" name="accomplished-by"  class="form-control col-12"></h4>
        </div>
        <div class="row">
                <input style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" name="submit" type="submit" value="submit">
        </div>





        </div>
        </div>

    </form>