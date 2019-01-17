<!DOCTYPE html>
<html lang="en">

<head>
    <title class="no-print">Director For Approval</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/custom.css">

   <style>
p {
  text-indent: 50px;
}
</style>

</head>

<body>
    <?php
require 'navbar.php';
?>

<br><br>

<div class="container" style="margin-bottom: 3%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body" style="margin-left: 3%;margin-right: 3%;">
          <h6 class="w3-text-red">Job Order Form - Inspection Order</h6>
          <div class="row">
            <p class="col-6">Serial: <input type="text" name="serial" class="form-control col-12" placeholder="YearMonthDate ex.20180924" value="<?php echo $SerialCode;?>" readonly/></p>
            <p class="col-6">Priority: <select class="form-control form-control" name="priority" id="priority" readonly>
                                <?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM priority";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  $selected = $row['Id']==$priorityId ? 'selected' : '';

            echo "<option value='".$row['Id']."' ". $selected .">".$row['Name']."</option>";

                                  }
                                }
                              ?>
                            </select></p>
          </div>
          <div class="row">
            <p class="col-6">Status: <select class="form-control form-control" name="status" id="status" readonly>
                                <?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM status WHERE Name <> 'Approved' AND Name <> 'Denied'  ";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  $selected = $row['Id']==$statusId ? 'selected' : '';

            echo "<option value='".$row['Id']."' ". $selected .">".$row['Name']."</option>";

                                  }
                                }
                              ?>
                            </select></p>
            <p class="col-6">Date: <input type="date" class="form-control col-12" name="date1" value="<?php echo $DateRequestCreated ?>" readonly/></p>
          </div>
          <div class="row">
            <p class="col-6">Campus: <select class="form-control form-control" name="campus" id="campus" readonly>
                                <?php
                                require_once '../api/apiOnly.php';
                                $campuses = json_decode($api->fetch_campuses(),true);
                                  foreach ($campuses as $campus) {
                                    $selected = $campus['code'] == $Campus? 'selected' : '';
                                   echo "<option value='".$campus['code']."'". $selected .">".$campus['code']."</option>";

                                  }

                              ?>
                            </select></p>
            <p class="col-6">Name of Office: <input type="text" name="nameofoffice" class="form-control col-12" id="nameofoffice" placeholder="Name of Office" value="<?php echo $NameOfOffice; ?>"disabled></p>
          </div>
          <h6 class="w3-text-red">Job Order Request</h6>
          <div class="row">
            <p class="col-12">Works: <input type="text" name="" class="form-control col-12" id="" value="" readonly></p>
          </div>
          <div class="row">
            <p>Inspection Report:&nbsp;</p>
            <textarea class="form-control" rows="5" cols="100" name="inspect-report" id="inspectionReport" readonly="" ><?php echo $InspectionReport; ?></textarea>
          </div>
          <br>
          <div class="row">
            <p>Job Recommendation:&nbsp;</p>
            <textarea class="form-control" rows="5" cols="100"name="job-recommendation" id="jobRecommendation" readonly><?php echo $JobRecommendation; ?></textarea></textarea>
          </div>
          <br>
          <div class="row">
            <p>Materials Needed:&nbsp;</p>
            <textarea class="form-control col-12" id=""  placeholder="" rows="5" cols="100" name="m1" value="<?php echo $m1 ?>" readonly></textarea>
          </div>
          <br>
          <div class="row">
            <p class="col-4">Requested by: <input class="form-control" type="text" name="name-of-requester" placeholder="name of requester" value="<?php echo  $RequestorName;?>" readonly></p>
            <p class="col-4">Designation: <input class="form-control" type="text" name="designation-of-requester" placeholder="designation of requester" value="<?php echo  $RequestorDesignation;?>" readonly></p>
            <p class="col-4">Date: <input type="date" class="form-control" name="date-requested" value="<?php echo  $DateRequestCreated;?>"  readonly></p>
          </div>
          <br>
          <div class="row">
            <p class="col-4">Inspected by: <input class="form-control" type="text" name="name-of-inspector" placeholder="name of inspecter" value="<?php echo  $InspectorName;?>" readonly></p>
            <p class="col-4">Designation: <input class="form-control" type="text" name="designation-of-inspecter" placeholder="designation of inspecter" value="<?php echo  $InspectorDesignation;?>" readonly></p>
            <p class="col-4">Date: <input type="date" class="form-control" name="date-inspected" value="<?php echo  $DateInspected;?>"readonly ></p>
          </div>

          <!--footer-->
          <div id="btn-container" class="container w3-center" style="margin-bottom: 5%">
            <input name="approve" style="padding:20px;" class="btn btn-success" type="submit" value="Approve">
          </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>

