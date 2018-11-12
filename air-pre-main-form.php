<!DOCTYPE html>
<html lang="en">
<head>
  <title>Preventive Maintenancev Airconditioning</title>
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
<br>
<center><h1 class="w3-text-red">Preventive Maintenance Form</h1></center>
<div class="container" style="margin-top: 1em;">
    <form action="../capstone2/test.php" method="POST">
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
                                   echo "<option value='".$campus['code']."'>".$campus['code']."</option>";

                                  }

                              ?>
                            
                     
                       
                            </select></h4>
                              

        </div>              
        <div class="row">
                             <h4 class="col-6"><b>Month:</b>&nbsp;
                             <select class="form-control form-control" name="" id="campus">
                              <option value="">January</option>
                              <option value="">February</option>
                              <option value="">March</option>
                              <option value="">April</option>
                              <option value="">May</option>
                              <option value="">June</option>
                              <option value="">July</option>
                              <option value="">August</option>
                              <option value="">September</option>
                              <option value="">October</option>
                              <option value="">November</option>
                              <option value="">December</option>
                       
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
                             <select class="form-control form-control" name="" id="campus">
                             <option value="">Basement Floor</option>
                              <option value="">Ground Floor</option>
                              <option value="">Second Floor</option>
                              <option value="">Third Floor</option>
                              <option value="">Fourth Floor</option>
                              <option value="">Fifth Floor</option>

                       
                            </select></h4>
                             <h4 class="col-6"><b>Area:</b>&nbsp;<input type="text" name=""  class="form-control col-12">
                    </h4>
        </div>
        <div class="row">
                             <h4 class="col-6"><b>Date Started:</b>&nbsp;<input type="date" name=""  class="form-control col-12">
                    
                    </h4>
                             <h4 class="col-6"><b>Date Ended:</b>&nbsp;<input type="date" name=""  class="form-control col-12">
                    </h4>
        </div>
         <div class="row">
                             <h4 class="col-12"><b>Accomplish by:</b>&nbsp;<input type="text" name=""  class="form-control col-12"></h4>
        </div>
        <div class="row">
                <input style="padding:20px;" class="btn btn-success col-12" type="submit" value="Save">
        </div>





        </div>
        </div>

    