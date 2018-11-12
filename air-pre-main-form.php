<?php
require '../api/dbcon.php';
require 'test-director-admin.php';
$stmt = $conn->prepare('INSERT INTO preventive_maintenance (
                                              work,
                                              campus,
                                              month,
                                              college,
                                              floor,
                                              area,
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
                              $area,
                              $dateStarted,
                              $dateEnded,
                              $accomplishedBy
                  );
$work = isset($_POST['work']) ? $_POST['work'] : '';
$campus = isset($_POST['campus']) ? $_POST['campus'] : '';
$month = isset($_POST['month']) ? $_POST['month'] : '';
$college = isset($_POST['college']) ? $_POST['college'] : '';
$floor = isset($_POST['floor']) ? $_POST['floor'] : '';
$area = isset($_POST['area']) ? $_POST['area'] : '';
$dateStarted = isset($_POST['date-started']) ? $_POST['date-started'] : '';
$dateEnded = isset($_POST['date-ended']) ? $_POST['date-ended'] : '';
$accomplishedBy = isset($_POST['accomplished-by']) ? $_POST['accomplished-by'] : '';
$stmt->execute();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenancev Airconditioning</title>
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
            <h2>AIR-CONDITIONING UNITS (Main II)</h2>
            </div>

             <div class="row ">
              <h4 class="col-6"><b>Work:</b>&nbsp;
                <input type="text" name="work" value="AIR-CONDITIONING" id="airconditioning" class="form-control col-12" readonly>
              </h4>
                       <h4 class="col-6"><b>Campus:</b>&nbsp;
                             <select class="form-control form-control" name="campus" id="campus">
                                <?php
                                require '../api/apiOnly.php';
                                  $campuses = json_decode($api->fetch_campuses(),true);
                                  foreach ($campuses as $campus) {
                                    //$_SESSION['usr_campus'] = 'SAN JUAN';

                              $selected = $campus['code'] == $_SESSION['usr_campus'] ? 'selected' : '';

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
                             <h4 class="col-6"><b>College:</b>&nbsp;
                             <select class="form-control form-control" name="college" id="college">
                                <?php
                                require '../api/apiOnly.php';
                                  $colleges = json_decode($api->fetch_colleges(),true);
                                  foreach ($colleges as $college) {
                                   echo "<option value='".$college['description']."'>".$college['description']."</option>";

                                  }

                              ?>
                            
                     
                       
                            </select></h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Floor:</b>&nbsp;
                             <select class="form-control form-control" name="floor" id="campus">
                             <option value="Basement Floor">Basement Floor</option>
                              <option value="Ground Floor">Ground Floor</option>
                              <option value="Second Floor">Second Floor</option>
                              <option value="Third Floor">Third Floor</option>
                              <option value="Fourth Floor">Fourth Floor</option>
                              <option value="Fifth Floor">Fifth Floor</option>

                       
                            </select></h4>
                             <h4 class="col-6"><b>Area:</b>&nbsp;<input type="text" name="area"  class="form-control col-12">
                    </h4>
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
                <input style="padding:20px;" class="btn btn-success col-12" type="submit" name="submit" value="Save">
        </div>
</form>




        </div>
        </div>
      </body>
</html>
    