<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//require 'testadmin.php';

 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }



require '../api/dbcon.php';

if(isset($_POST['evaluation'])){
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("UPDATE joborder SET statusId = ?,

                                               ResponseTime=?,
                                               AccuracyOfWork=?,
                                               Courtesy=?,
                                               QualityOfService=?


                                               -- ApprovedBy,

                                                WHERE SerialCode = ?
                                               ");

$stmt->bind_param("ssssss",
                              $sIdu,

                              $responseTime,
                              $accuracyOfWork,
                              $courtesy,
                              $qualityOfService,

                              $serialCode

                        );
// Approved = $directorSignature
// set parameters and execute
  $sIdu = 6;
// $nameOfOffice = $_POST['nameofoffice'];

 $responseTime = isset($_POST['cb1'])? $_POST['cb1'] : "0" ;
 $accuracyOfWork = isset($_POST['cb2'])? $_POST['cb2'] : "0" ;
 $courtesy = isset($_POST['cb3'])? $_POST['cb3'] : "0";
 $qualityOfService = isset($_POST['cb4'])? $_POST['cb4'] : "0";


 $serialCode = $_POST['serial'];

if($stmt->execute()){
  echo "<script type='text/javascript'>
                alert ('Update Successful!');
                window.location.href='faculty-notif.php';</script>";
}
 $stmt->close();
 $conn->close();
}

if(isset($_POST['jos'])){

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("UPDATE joborder SET statusId = ?,
                                               AirCondition=?,
                                               CarpentryMasonry=?,
                                               ElectricalWorks=?,
                                               Painting=?,
                                               Plumbing=?,
                                               Welding=?,
                                               RequestorSignature=?,
                                               RequestorName=?,
                                               RequestorDesignation=?,
                                               DateRequested=?,
                                               signatureOfInspector=?,
                                               InspectorName=?,
                                               InspectorDesignation=?,
                                               DateInspected=?,
                                               Approved=?,
                                               StartOfService=?,
                                               EndOfService=?,
                                               NoOfHours=?,
                                               Assessment=?,
                                               StartOfServiceTime=?,
                                               EndOfServiceTime=?,
                                               AccomplishedWork1=?,
                                               WorkDoneBy1=?,
                                               Signature1=?,
                                               AccomplishedWork2=?,
                                               WorkDoneBy2=?,
                                               Signature2=?,
                                               AccomplishedWork3=?,
                                               WorkDoneBy3=?,
                                               Signature3=?,
                                               AccomplishedWork4=?,
                                               WorkDoneBy4=?,
                                               Signature4=?,
                                               ConformeName=?,
                                               ConformeApproved=?,
                                               ConformeDateApproved=?,
                                               ResponseTime=?,
                                               AccuracyOfWork=?,
                                               Courtesy=?,
                                               QualityOfService=?,
                                               priorityId=?,
                                               JobRecommendation=?,
                                               InspectionReport=?,
                                               materialsNeeded1=?,
                                               materialsNeeded2=?,
                                               materialsNeeded3=?,
                                               materialsNeeded4=?,
                                               materialsNeeded5=?,
                                               materialsNeeded6=?,
                                               materialsNeeded7=?,
                                               materialsNeeded8=?,
                                               materialsNeeded9=?,
                                               materialsNeeded10=?,
                                               materialsNeeded11=?,
                                               materialsNeeded12=?
                                               -- ApprovedBy,

                                                WHERE SerialCode = ?
                                               ");

$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
                              $sIdu,
                              $airConditioning,
                              $masonryCarpentry,
                              $electrical,
                              $painting,
                              $plumbing,
                              $welding,
                              $requesterSignature,
                              $nameOfRequester,
                              $designationOfRequester,
                              $dateRequested,
                              $inspecterSignature,
                              $nameOfInspector,
                              $designationOfInspecter,
                              $dateInspected,
                              $directorSignature,
                              $startOfService,
                              $endOfService,
                              $noOfHours,
                              $assessment,
                              $startOfServiceTime,
                              $endOfServiceTime,
                              $accomplishedWork1,
                              $workDoneBy1,
                              $signature1,
                              $accomplishedWork2,
                              $workDoneBy2,
                              $signature2,
                              $accomplishedWork3,
                              $workDoneBy3,
                              $signature3,
                              $accomplishedWork4,
                              $workDoneBy4,
                              $signature4,
                              $conformeName,
                              $conformeSignature,
                              $conformeDateSigned,
                              $responseTime,
                              $accuracyOfWork,
                              $courtesy,
                              $qualityOfService,
                              $priority,
                              //$campus,
                              $jobRecommendation,
                              $inspectionReport,
                              $m1get,
                              $m2get,
                              $m3get,
                              $m4get,
                              $m5get,
                              $m6get,
                              $m7get,
                              $m8get,
                              $m9get,
                              $m10get,
                              $m11get,
                              $m12get,
                              $serialCode

                        );
// Approved = $directorSignature
// set parameters and execute
  $sIdu = 6;
// $nameOfOffice = $_POST['nameofoffice'];
 $painting = isset($_POST['Painting']) ? "checked" : 'off';
 $airConditioning = isset($_POST['air-conditioning']) ? "checked" : 'off';
 $masonryCarpentry = isset($_POST['masonary-carpentry']) ? "checked" : 'off';
 $electrical = isset($_POST['Electrical']) ? "checked" : 'off';
 $plumbing = isset($_POST['Plumbing']) ? "checked" : 'off';
 $welding = isset($_POST['Welding']) ? "checked" : 'off';
 // $date = $_POST['date1'];
 $requesterSignature = $_POST['requester-signature'];
 $inspecterSignature = $_POST['inspecter-signature'];
 $directorSignature = $_POST['director-signature'];
 $nameOfRequester = $_POST['name-of-requester'];
 $nameOfInspector = $_POST['name-of-inspector'];
 $designationOfRequester = $_POST['designation-of-requester'];
 $designationOfInspecter = $_POST['designation-of-inspecter'];
 $dateRequested = $_POST['date-requested'];
 $dateInspected = $_POST['date-inspected'];
 $startOfService = $_POST['start-of-service'];
 $endOfService = $_POST['end-of-service'];
 $noOfHours = $_POST['no-of-hours'];
 $assessment = isset($_POST['assessment'])? $_POST['assessment'] : "notcompleted"  ;
 $startOfServiceTime = date('h:i A', strtotime($_POST['start-of-service-time']));
 $endOfServiceTime = date('h:i A', strtotime($_POST['end-of-service-time']));
 $accomplishedWork1 = $_POST['accomplished-work1'];
 $workDoneBy1 = $_POST['work-done-by1'];
 $signature1 = $_POST['signature1'];
 $accomplishedWork2 = $_POST['accomplished-work2'];
 $workDoneBy2 = $_POST['work-done-by2'];
 $signature2 = $_POST['signature2'];
 $accomplishedWork3 = $_POST['accomplished-work3'];
 $workDoneBy3 = $_POST['work-done-by3'];
 $signature3 = $_POST['signature3'];
 $accomplishedWork4 = $_POST['accomplished-work4'];
 $workDoneBy4 = $_POST['work-done-by4'];
 $signature4 = $_POST['signature4'];
 $conformeName = $_POST['conforme-name'];
 $conformeSignature = $_POST['conforme-signature'];
 $conformeDateSigned = $_POST['conforme-date-signed'];
 $responseTime = isset($_POST['cb1'])? $_POST['cb1'] : "0" ;
 $accuracyOfWork = isset($_POST['cb2'])? $_POST['cb2'] : "0" ;
 $courtesy = isset($_POST['cb3'])? $_POST['cb3'] : "0";
 $qualityOfService = isset($_POST['cb4'])? $_POST['cb4'] : "0";
 $priority = $_POST['priority'];
 $jobRecommendation = $_POST['job-recommendation'];
 $inspectionReport = $_POST['inspect-report'];
 $m1get = isset($_POST['m1']) ? $_POST['m1'] : '';
 $m2get = isset($_POST['m2']) ? $_POST['m2'] : '';
 $m3get = isset($_POST['m3']) ? $_POST['m3'] : '';
 $m4get = isset($_POST['m4']) ? $_POST['m4'] : '';
 $m5get = isset($_POST['m5']) ? $_POST['m5'] : '';
 $m6get = isset($_POST['m6']) ? $_POST['m6'] : '';
 $m7get = isset($_POST['m7']) ? $_POST['m7'] : '';
 $m8get = isset($_POST['m8']) ? $_POST['m8'] : '';
 $m9get = isset($_POST['m9']) ? $_POST['m9'] : '';
 $m10get =isset($_POST['m10']) ? $_POST['m10'] : '';
 $m11get =isset($_POST['m11']) ? $_POST['m11'] : '';
 $m12get =isset($_POST['m12']) ? $_POST['m12'] : '';

 $serialCode = $_POST['serial'];

if($stmt->execute()){
  echo "<script type='text/javascript'>
                alert ('Update Successful!');
                window.location.href='faculty-notif.php';</script>";
}
 $stmt->close();
 $conn->close();

}

require '../api/dbcon.php';
    //echo $sId;
    $stmt = $conn->prepare("select
                           NameOfOffice,
                           SerialCode,
                           DateRequestCreated,
                           AirCondition,
                           CarpentryMasonry,
                           ElectricalWorks,
                           Painting,
                           Plumbing,
                           Welding,
                           RequestorSignature,
                           RequestorName,
                           RequestorDesignation,
                           DateRequested,
                           signatureOfInspector,
                           InspectorName,
                           InspectorDesignation,
                           DateInspected,
                           Approved,
                           StartOfService,
                           EndOfService,
                           NoOfHours,
                           Assessment,
                           StartOfServiceTime,
                           EndOfServiceTime,
                           AccomplishedWork1,
                           WorkDoneBy1,
                           Signature1,
                           AccomplishedWork2,
                           WorkDoneBy2,
                           Signature2,
                           AccomplishedWork3,
                           WorkDoneBy3,
                           Signature3,
                           AccomplishedWork4,
                           WorkDoneBy4,
                           Signature4,
                           ConformeName,
                           ConformeApproved,
                           ConformeDateApproved,
                           ResponseTime,
                           AccuracyOfWork,
                           Courtesy,
                           QualityOfService,
                           priorityId,
                           Campus,
                           JobRecommendation,
                           InspectionReport,
                           statusId,
                           materialsNeeded1,
                           materialsNeeded2,
                           materialsNeeded3,
                           materialsNeeded4,
                           materialsNeeded5,
                           materialsNeeded6,
                           materialsNeeded7,
                           materialsNeeded8,
                           materialsNeeded9,
                           materialsNeeded10,
                           materialsNeeded11,
                           materialsNeeded12,
                           UserJobDescription,
                           location
                           FROM joborder WHERE SerialCode=?");
    $stmt->bind_param('s',$sId);
    $sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($NameOfOffice,
                       $SerialCode,
                       $DateRequestCreated,
                       $AirCondition,
                       $CarpentryMasonry,
                       $ElectricalWorks,
                       $Painting,
                       $Plumbing,
                       $Welding,
                       $RequestorSignature,
                       $RequestorName,
                       $RequestorDesignation,
                       $DateRequested,
                       $signatureOfInspector,
                       $InspectorName,
                       $InspectorDesignation,
                       $DateInspected,
                       $Approved,
                       $StartOfService,
                       $EndOfService,
                       $NoOfHours,
                       $Assessment,
                       $StartOfServiceTime,
                       $EndOfServiceTime,
                       $AccomplishedWork1,
                       $WorkDoneBy1,
                       $Signature1,
                       $AccomplishedWork2,
                       $WorkDoneBy2,
                       $Signature2,
                       $AccomplishedWork3,
                       $WorkDoneBy3,
                       $Signature3,
                       $AccomplishedWork4,
                       $WorkDoneBy4,
                       $Signature4,
                       $ConformeName,
                       $ConformeApproved,
                       $ConformeDateApproved,
                       $ResponseTime,
                       $AccuracyOfWork,
                       $Courtesy,
                       $QualityOfService,
                       $priorityId,
                       $Campus,
                       $JobRecommendation,
                       $InspectionReport,
                       $statusId,
                       $m1,
                       $m2,
                       $m3,
                       $m4,
                       $m5,
                       $m6,
                       $m7,
                       $m8,
                       $m9,
                       $m10,
                       $m11,
                       $m12,
                       $userJobDescription,
                       $location
                     );

    while($stmt->fetch()){

      //code for checking if user is with the same campus as the requester
      if (!isset($_SESSION)) session_start();//one liner code to check if session has started
      if(strtolower($_SESSION['usr_campus'])!=strtolower($Campus)){
         // header('location: not-allowed.php');
         // exit();
       // echo strtolower($_SESSION['usr_campus']). strtolower($Campus);
      }

      // if($statusId==4||$statusId==5||$statusId==2||$statusId==8){
      //   //if status is equals to approved, ongoing, for inspection
      //   header('location: job-order-view.php');
      //   exit();
      // }


      //code for checking if user is with the same campus as the requester


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title class="no-print">Print Job Order</title>
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
h6 {
  text-indent: 50px;
  color: gray;
}
label {
  text-indent: 0px;
  color: black;
}
</style>

</head>

<body>
<br><br>
<form action="" method="POST">

<div class="container" style="margin-bottom: 3%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body">
          <h1 class="w3-center">BatStateU General Services Office</h5>
          <h5 class="w3-text-red">Job Order Form - Inspection Order</h5>
          <div class="row">
            <h6 class="col-6">Serial: <label><?php echo $SerialCode;?></label></h6>
            <input type="hidden" name="serial" value="<?php echo $SerialCode;?>"/>
            <h6 class="col-6">Priority: <label><?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM priority where Id = $priorityId";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  $selected = $row['Id']==$priorityId ? 'selected' : '';

            echo $row['Name'];
            // echo "<option value='".$row['Id']."' ". $selected .">".$row['Name']."</option>";

                                  }
                                }
                              ?></label></h6>
          </div>
          <div class="row">
            <h6 class="col-6">Status: <label><?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM status where Id = $statusId";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  //$selected = $row['Id']==$statusId ? 'selected' : '';

            //echo "<option value='".$row['Id']."' ". $selected .">".$row['Name']."</option>";
            echo $row['Name'];

                                  }
                                }
                              ?></label></h6>
            <h6 class="col-6">Date: <label><?php echo $DateRequestCreated ?></label></h6>
          </div>
          <div class="row">
            <h6 class="col-6">Campus: <label><?php echo $Campus; ?></label></h6>
            <h6 class="col-6">Name of Office: <label><?php echo $NameOfOffice; ?></label></h6>
          </div>
          <h5 class="w3-text-red">Job Order Request</h5>
          <div class="row">
            <h6 class="col-12">Report Description: <label><?php echo $userJobDescription ?></label></h6>
          </div>
          <div class="row">
            <h6 class="col-12">Location: <label><?php echo $location; ?></label></h6>
          </div>
          <div class="row">
            <h6 class="col-12">Works: <label><?php 
            $works = array();
            
              if($AirCondition=="checked")
                array_push($works,'Air Condition');
              if($CarpentryMasonry=="checked")
                array_push($works, 'Carpentry Masonry');
              if($ElectricalWorks=="checked")
                array_push($works, 'Electrical Works');
              if($Painting=="checked")
                array_push($works, 'Painting');
              if($Plumbing=="checked")
                array_push($works, 'Plumbing');
              if($Welding=="checked")
                array_push($works, 'Welding');


            
            echo implode(", ", $works); ?></label></h6>
          </div>
          <div class="row">
            <h6>Inspection Report:&nbsp; <label><?php echo $InspectionReport; ?></label></h6>
           
          </div>
          <br>
          <div class="row">
            <h6>Job Recommendation:&nbsp; <label><?php echo $JobRecommendation ?></label></h6>   
          </div>
          <br>
          <div class="row">
            <h6>Materials Needed:&nbsp;<label><?php 
            $materials = array();
            for ($i=1; $i <= 12; $i++) { 
              $m = "m".$i;
              if($$m!=null){
                array_push($materials,$$m);
              }
            }
            echo implode(", ", $materials); ?></label></h6>
            
          </div>
          <br>
          <div class="row">
            <h6 class="col-4">Requested by: <label><?php echo  $RequestorName;?></label></h6>
            <h6 class="col-4">Designation: <label><?php echo  $RequestorDesignation;?></label></h6>
            <h6 class="col-4">Date: <label><?php echo  $DateRequestCreated;?></label></h6>
          </div>
          <br>
          <div class="row">
            <h6 class="col-4">Inspected by: <label><?php echo  $InspectorName;?></label></h6>
            <h6 class="col-4">Designation: <label><?php echo  $InspectorDesignation;?></label></h6>
            <h6 class="col-4">Date: <label><?php echo  $DateInspected;?></label></h6>
          </div>
          <br>
          <div class="row">
            <h6 class="col-3">Start Date: <label><?php echo $StartOfService; ?></label></h6>
            <h6 class="col-3">Start Time: <label><?php $date = date("H:i", strtotime($StartOfServiceTime)); echo "$date"; ?></label></h6>
            <h6 class="col-3">End Date: <label><?php echo $EndOfService; ?></label></h6>
            <h6 class="col-3">End Time: <label><?php $date = date("H:i", strtotime($EndOfServiceTime)); echo "$date"; ?></label></h6>
          </div>
          <br>
          <div class="row">
            <h6 class="col-4">No. of hrs: <label><?php echo $NoOfHours; ?></label></h6>
            <h6 class="col-4"><input class="w3-check onNapprove" type="radio" name="assessment" value="completed" <?php echo $Assessment == 'completed'? 'checked' : '' ?> ><label>*Work completed upon agreed duration*</label></h6>
            <h6 class="col-4"><input class="w3-check onNapprove" type="radio" name="assessment" value="notcompleted" <?php echo $Assessment != 'completed'? 'checked' : '' ?>  required><label>*Work not completed upon agreed duration*</label></h6>
        </div>
        <br>

        <div class="row">
          <h6 class="col-7">Accomplished Works: 
            <input class="form-control onNapprove" type="text" name="accomplished-work1" value=" <?php echo $AccomplishedWork1; ?>" placeholder="** **"><br>
            <input class="form-control onNapprove" type="text" name="accomplished-work2" value=" <?php echo $AccomplishedWork2; ?>" ><br>
            <input class="form-control onNapprove" type="text" name="accomplished-work3" value="<?php echo $AccomplishedWork3; ?>" ><br>
            <input class="form-control onNapprove" type="text" name="accomplished-work4" value="<?php echo $AccomplishedWork4; ?>" ><br>
          </h6>
          <h6 class="col-3">Work done by:
            <input class="form-control onNapprove" type="text" name="work-done-by1" value="<?php echo $WorkDoneBy1; ?>" placeholder="** **"><br>
            <input class="form-control onNapprove" type="text" name="work-done-by2" value="<?php echo $WorkDoneBy2; ?>"><br>
            <input class="form-control onNapprove" type="text" name="work-done-by3" value="<?php echo $WorkDoneBy3; ?>"><br>
            <input class="form-control onNapprove" type="text" name="work-done-by4" value="<?php echo $WorkDoneBy4; ?>"><br>
          </h6>
          <h6 class="col-2">Signature:
            <input class="form-control onNapprove" type="text" name="work-done-by1"><br>
            <input class="form-control onNapprove" type="text" name="work-done-by2"><br>
            <input class="form-control onNapprove" type="text" name="work-done-by3"><br>
            <input class="form-control onNapprove" type="text" name="work-done-by4"><br>
          </h6>
                        <table class="table table-bordered table-responsive">
                            <tbody>
                                <tr>
                                    <th colspan="12">Thank you for giving us the opportunity to serve you better. Please help us by taking a few minutes to inform us about the technical assistance/service that you have just been provided. Put check in the colun that corresponds to your of satisfaction.</th>
                                </tr>
                                <tr>
                                    <th rowspan="2" colspan="4">
                                        <center>EVALUATION STATEMENTS
                                    </th>
                                    <th>Outstanding</th>
                                    <th>Very Satisfactory</th>
                                    <th>Satisfactory</th>
                                    <th>Unsatisfactory</th>
                                    <th>Poor</th>
                                </tr>
                                <tr>
                                    <center>
                                        <th>
                                            <center>5</center>
                                        </th>
                                        <th>
                                            <center>4</center>
                                        </th>
                                        <th>
                                            <center>3</center>
                                        </th>
                                        <th>
                                            <center>2</center>
                                        </th>
                                        <th>
                                            <center>1</center>
                                        </th>
                                </tr>

                                <tr>
                                    <th colspan="4">Response time for the initial call for service</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb1" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($ResponseTime == 5 ? 'checked' : 'disabled') : ($ResponseTime == 5 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb1" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($ResponseTime == 4 ? 'checked' : 'disabled') : ($ResponseTime == 4 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb1" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($ResponseTime == 3 ? 'checked' : 'disabled') : ($ResponseTime == 3 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb1" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($ResponseTime == 2 ? 'checked' : 'disabled') : ($ResponseTime == 2 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb1" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($ResponseTime == 1 ? 'checked' : 'disabled') : ($ResponseTime == 1 ? 'checked' : '')    ?> ></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Accuracy of work and efficiency to save time</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb2" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($AccuracyOfWork == 5 ? 'checked' : 'disabled') : ($AccuracyOfWork == 5 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb2" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($AccuracyOfWork == 4 ? 'checked' : 'disabled') : ($AccuracyOfWork == 4 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb2" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($AccuracyOfWork == 3 ? 'checked' : 'disabled') : ($AccuracyOfWork == 3 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb2" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($AccuracyOfWork == 2 ? 'checked' : 'disabled') : ($AccuracyOfWork == 2 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb2" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($AccuracyOfWork == 1 ? 'checked' : 'disabled') : ($AccuracyOfWork == 1 ? 'checked' : '');    ?> ></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Courtesy and professionalis of the attending personel</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb3" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($Courtesy == 5 ? 'checked' : 'disabled') : ($Courtesy == 5 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb3" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($Courtesy == 4 ? 'checked' : 'disabled') : ($Courtesy == 4 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb3" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($Courtesy == 3 ? 'checked' : 'disabled') : ($Courtesy == 3 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb3" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($Courtesy == 2 ? 'checked' : 'disabled') : ($Courtesy == 2 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb3" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($Courtesy == 1 ? 'checked' : 'disabled') : ($Courtesy == 1 ? 'checked' : '');    ?> ></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Quality of service provided in performing the requested work, service and/or assistance</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb4" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($QualityOfService == 5 ? 'checked' : 'disabled') : ($QualityOfService == 5 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb4" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($QualityOfService == 4 ? 'checked' : 'disabled') : ($QualityOfService == 4 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb4" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($QualityOfService == 3 ? 'checked' : 'disabled') : ($QualityOfService == 3 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb4" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($QualityOfService == 2 ? 'checked' : 'disabled') : ($QualityOfService == 2 ? 'checked' : '');    ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb4" <?php echo ($_SESSION['usr_type'] == 'admin' || $_SESSION['usr_type']  == 'director')? ($QualityOfService == 1 ? 'checked' : 'disabled') : ($QualityOfService == 1 ? 'checked' : '');    ?> ></th>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
              <!-- ADD -->
              <!-- only display message if status is set as for gso and disable submit button if status is not for gso additional info -->
              <center>
            <input name="print-button" style="padding:20px;" class="onNapprove no-print btn btn-warning print-active" type="submit" value="Print">
          </div>
</form>


               <?php
            }
$stmt->execute();
$stmt->close();
$conn->close();
                ?>
            <script src="js/jquery-3.3.1.js"></script>
            <script>
  $('[name=print-button]').on('click', function() {
    //debugger;
    console.log("print");
                window.print();
                return false; // why false?
              });
                /*
                  1 - For Approval
                  2 - Approved
                  3 - Denied
                  5 - On - Going
                  6 - Done
                  7 - For Inspection
                  USER TYPE CONDITIONS
                */
              //disabling of fields
                console.log('statusId '+<?php echo $statusId ?>);
                var user_type = "<?php echo $_SESSION['usr_type'] ?>";
              if(<?php echo $statusId ?> == 1){
                console.log('for approval');
                //$('#message-bottom').remove();
                $(":input").not("[name=accept],[name=denied],[name=btn-print],[name=serial],[name=designation-of-requester],[name=designation-of-inspecter]")
                      .prop("disabled", true);
                      $('#con-eval-form').css('display', 'none');


              }else if(<?php echo $statusId ?> == 2 ){
                //fields are now set for this status so we aint going to readonly any fields here
                //but we need to add a text
                //change button name for server side script
                $("#custom-button").attr('name', 'ongoing');
                $('#message-bottom').text('Submitting would set this as for On-going');
                                $(":input").not("[class=onNapprove]")
                      .prop("disabled", true);
                      $(".onNapprove").removeAttr("disabled");
                      $(".onNapprove").removeAttr("readonly");

              }else if(<?php echo $statusId ?> == 3){
                //denied
                //but we need to add a text
                $('#message-bottom').text('This Request is denied');
                //add button draft to only save as draft and not change status
                $(":input").not("")
                      .prop("disabled", true);

              }else if(<?php echo $statusId ?> == 5){
                //on going
                //but we need to add a text
                $("#custom-button").attr('name', 'ongoing');
                $('#message-bottom').text('Submitting would change the status to Done!, click draft if you only want to save');
                //add button draft to only save as draft and not change status
                var $input = $('<input name="draft" style="padding:20px;" class="no-print btn onNapprove btn-success" type="submit" value="draft" id="">');
                $input.appendTo($("#btn-container"));
                $(":input").not("[class=onNapprove]")
                      .prop("disabled", true);
                      $(".onNapprove").removeAttr("disabled");
                      $(".onNapprove").removeAttr("readonly");

              }else if(<?php echo $statusId ?> == 6||<?php echo $statusId ?> == 3){

                $('#message-bottom').text('Uneditable');
                
                $(":input").not(':input[name="print-button"]')
                      .prop("disabled", true);

              }else if(<?php echo $statusId ?> == 7){
                //fields are now set for this status so we aint going to readonly any fields here
                //but we need to add a text
                $('#message-bottom').text('Submitting would change the status of this form to "for approval" this is for the director to approve');

              }else if(<?php echo $statusId ?> == 8){
                console.log("for eval");
                if(user_type == 'faculty'){
                  console.log("faculty");
              $(".faculty-for-eval-disabled").attr("disabled", true);
                //document.getElementById("custom-button").value = "Submit Evaluation";
                $("#custom-button").attr({
                  name: 'evaluation',
                  value: 'Submit Evaluation'
                })
              }
              }
              //disabling of fields

              //approve logic
              /*readonly all fields except the fields given by bi*/
              //approve logic

              // add script that is status is approved then remove disable in fields
                $("#inspectionReport").keyup(function() {
                    $("#mlInspectionReport").text("Characters left: " + (450 - $(this).val().length));
                });
                $("#jobRecommendation").keyup(function() {
                    $("#mlJobRecommendation").text("Characters left: " + (450 - $(this).val().length));
                });

                function hrsToMins(hours) {
                    return hours * 60;
                }

                function minsToHour(mins) {
                    return mins / 60;
                }


                function serviceCheckDate() {
                    // Time Check

                    var stime = $('#startOfServiceTime').val();
                    var etime = $('#endOfServiceTime').val();
                    //checking if #startOfService and #endOfService has values -- NOTE still need more checking
                    if ($('#startOfService').val() && $('#endOfService').val() && stime && etime) {
                        //TimeCheck
                        //splitting time to minutes and hours
                        var eTimeHours = parseInt(etime.split(":")[0]);
                        var eTimeMinutes = parseInt(etime.split(":")[1]);
                        var sTimeHours = parseInt(stime.split(":")[0]);
                        var sTimeMinutes = parseInt(stime.split(":")[1]);

                        /*convert hours to minutes
                          add converted hours to minutes
                          convert back to hours
                        */
                        var eTimeMinutes = hrsToMins(eTimeHours) + eTimeMinutes;
                        var sTimeMinutes = hrsToMins(sTimeHours) + sTimeMinutes;
                        var min = eTimeMinutes - sTimeMinutes;
                        console.log("eTimeMinutes " + eTimeMinutes);
                        console.log("sTimeMinutes " + sTimeMinutes);
                        console.log("min " + min);

                        var convertedToHours = minsToHour(min) > 0 ? minsToHour(min) : 0;
                        console.log("convertedtohours " + parseInt(convertedToHours));
                        //Time Check

                        //checks if start and end has different values

                        var sdate = new Date($('#startOfService').val());
                        var edate = new Date($('#endOfService').val());
                        var sTime = $('#startOfServiceTime').val();
                        var eTime = $('#endOfServiceTime').val();

                        //error messages
                        var EMEdateIsLessThanSDate = ' End date must not be less that Start date';
                        var ZeroErrorMessages = 'Opps, you have zero hours rendered? Are you sure? If you think this is a system bug, kindly report it immediatly'
                        //if End Date is Lesser than Start Date

                        if (edate < sdate) {
                            //changing the text value but not the html code itself
                            $('#assessmentErrorMessage').append(EMEdateIsLessThanSDate);
                            console.log('wholeErrorMessage ' + wholeErrorMessage);
                        } else {
                            //removing the error message
                            $("#assessmentErrorMessage").html("");
                        }

                        //subtract 2 dates
                        var msDiff = subtractTwoDates(sdate, edate);
                        //convert ms to hour
                        // subtract 24
                        // add stime etime

                        var hourDif = convertToHour(msDiff);

                        console.log("start day" + sdate);
                        console.log("end day" + edate);
                        console.log(msDiff);
                        //console.log("hours difference" + hourDif);

                        var totalRenderedHours = hourDif + convertedToHours > 0 ? hourDif + convertedToHours : 0;
                        console.log("totalRenderedHours" + totalRenderedHours);

                        //noOfHours

                        $("#noOfHours").val(totalRenderedHours);


                        if (totalRenderedHours === 0) {
                            $('#assessmentErrorMessage').append(ZeroErrorMessages);
                            $('#startOfService, #endOfService, #endOfServiceTime, #startOfServiceTime').addClass('error-border');
                        } else {
                            $('#startOfService, #endOfService, #endOfServiceTime, #startOfServiceTime').removeClass('error-border');
                            //removing the error message
                            $('assessmentErrorMessage').html("");

                        }

                    }
                }

                function assessmentErrorMessage() {

                }
                //takes two dates and returns the miliseconds
                //lastDate  minus firstDate
                function subtractTwoDates(d1, d2) {
                    // I dont know why but the end date must be first to not produce a negative answer
                    return (d2 - d1) > -1 ? d2 - d1 : 0;
                }
                //converts the miliseconds to hour
                function convertToHour(ms) {
                    return ms / 1000 / 60 / 60;
                }

                  var s_usr_type = "<?php echo $_SESSION['usr_type']; ?>";
                  var status = document.getElementsByName("status")[0].value;
                  var update_button = document.getElementById("update");
                  var select_priority = document.getElementById("priority");

                  // input fields
                  var director_signature = document.getElementById("director-signature");

                console.log(document.getElementsByName("status")[0].value);
                console.log(s_usr_type);



            </script>
</body>

</html>
