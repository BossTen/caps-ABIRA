<?php
require 'dbcon.php';


if(isset($_POST['jos'])){
  //nameofoffice
  //serial

  //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("INSERT INTO joborder (NameOfOffice,
                                               SerialCode,

                                               DateRequestCreated,
                                               AirCondition,
                                               CarpentryMasonry,
                                               ElectricalWorks,
                                               
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
                                               Assesment,
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
                                               CampusId,
                                               JobRecommendation,
                                               InspectionReport 
                                               -- ApprovedBy,
                                      
                                               ) 
                                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");

$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssiss", $nameOfOffice,
                              $serialCode,
                              $date,
                              $airConditioning,
                              $masonryCarpentry,
                              $electrical,
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
                              $campus,
                              $jobRecommendation,
                              $inspectionReport   
                        );  
// Approved = $directorSignature
// set parameters and execute
 $nameOfOffice = $_POST['nameofoffice'];
 $serialCode = $_POST['serial'];
 $airConditioning = isset($_POST['air-conditioning']) ? "checked" : 'off';
 $masonryCarpentry = isset($_POST['masonary-carpentry']) ? "checked" : 'off';
 $electrical = isset($_POST['Electrical']) ? "checked" : 'off';
 $plumbing = isset($_POST['Plumbing']) ? "checked" : 'off';
 $welding = isset($_POST['Welding']) ? "checked" : 'off';
 $date = $_POST['date1'];
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
 $campus = $_POST['campus'];
 $jobRecommendation = $_POST['job-recommendation'];
 $inspectionReport = $_POST['inspect-report'];
}

    //echo $sId;
    $stmt = $conn->prepare("select
                           NameOfOffice,
                           SerialCode,
                           DateRequestCreated,
                           AirCondition,
                           CarpentryMasonry,
                           ElectricalWorks,
                           Plumbing,Welding,
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
                           CampusId,
                           JobRecommendation,
                           InspectionReport 
                           FROM joborder WHERE SerialCode=?");
    $stmt->bind_param('s',$sId);
    $sId = $_GET['serial'];
    $stmt->execute();
    $stmt->bind_result($NameOfOffice,
                       $SerialCode,
                       $DateRequestCreated,
                       $AirCondition,
                       $CarpentryMasonry,
                       $ElectricalWorks,
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
                       $CampusId,
                       $JobRecommendation,
                       $InspectionReport);

    while($stmt->fetch()){
        echo $NameOfOffice;
        echo $DateRequestCreated;
        echo $AirCondition;
        echo $CarpentryMasonry;
        echo $ElectricalWorks;
        echo $Plumbing;
        echo $Welding;
        echo $RequestorSignature;
        echo $RequestorName;
        echo $RequestorDesignation;
        echo $DateRequested;
        echo $signatureOfInspector;
        echo $InspectorName;
        echo $InspectorDesignation;
        echo $DateInspected;
        echo $Approved;
        echo $StartOfService;
        echo $EndOfService;
        echo $NoOfHours;
        echo $Assessment;
        echo $StartOfServiceTime;
        echo $EndOfServiceTime;
        echo $AccomplishedWork1;
        echo $WorkDoneBy1;
        echo $Signature1;
        echo $AccomplishedWork2;
        echo $WorkDoneBy2;
        echo $Signature2;
        echo $AccomplishedWork3;
        echo $WorkDoneBy3;
        echo $Signature3;
        echo $AccomplishedWork4;
        echo $WorkDoneBy4;
        echo $Signature4;
        echo $ConformeName;
        echo $ConformeApproved;
        echo $ConformeDateApproved;
        echo $ResponseTime;
        echo $AccuracyOfWork;
        echo $Courtesy;
        echo $QualityOfService;
        echo $priorityId;
        echo $CampusId;
        echo $JobRecommendation;
        echo $InspectionReport;




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Job Order Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
require 'navbar.php';
?>

    <center>
        <h1 class="w3-text-red">Job Order Form - Inspection Order</h1>
    </center>
    <div class="container" style="margin-top: ;">
        <!-- UPDATE form -->
        <form action="" method="POST">
            <!-- UPDATE card -->
            <div class="card">
                <div class="card-body" style="margin-left: 2%;">

                    <div class="row">
                        <h4 class="col-6"><b>Serial:</b>&nbsp;<input type="text" name="serial" class="form-control col-7" placeholder="YearMonthDate ex.20180924" value="<?php echo $SerialCode;?>" Disabled/></h4>
                        <h4 class="col-3"><b>Priority</b>&nbsp;
                            <select class="form-control form-control" name="priority" id="priority">
                                <?php
                                $sql = "SELECT Id, Name FROM priority";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
            echo "<option value='".$row['Id']."'>".$row['Name']."</option>";

                                  }
                                }
                              ?>
                            </select>
                    </div>

                    <div class="row ">
                        
                        <h4 class="col-6"><b>Date:</b>&nbsp;
                            <input type="date" class="form-control col-7" name="date1" />
                        </h4>
                        <h4 class="col-3"><b>Campus:</b>&nbsp;
                            <select class="form-control form-control" name="campus" id="campus">
                                <?php
                                $sql = "SELECT Id, Name FROM capuses";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){

                                  while ($row =  $result->fetch_assoc()) {
            echo "<option value='".$row['Id']."'>".$row['Name']."</option>";

                                  }
                                }
                              ?>
                            </select>

                    </div>
                    
            <div class="row">
                <h4 class="col-10"><b>Name of Office:</b>&nbsp;
                    <input type="text" name="nameofoffice" class="form-control col-30" id="nameofoffice" placeholder="Name of Office" value="<?php echo $NameOfOffice; ?>"required>
            </div>
    </div>
    </div>
    <br>
    <center>
        <h1 class="w3-text-red">Job Order Request</h1>
    </center>
    <div class="container" style="margin-top: ;">
        <!-- UPDATE form -->
        <form action="" method="POST">
            <!-- UPDATE card -->
            <div class="card">
                <div class="card-body" style="margin-left:2%;">

                    <table class="table table-bordered w3-card w3-round">
                        <tbody>
                            <tr>
                                <th colspan="col-5">
                                    <center>Kindly put a check mark before the work<br> service and/or assistance to be done
                                </th>
                                <th colspan="2.5">
                                    <center>Inspection report
                                </th>
                                <th colspan="2.5">
                                    <center>Material Needed
                                </th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="air-conditioning" <?php echo $AirCondition; ?>>
                                    <label>Air-conditioning Works:</label></th>
                                <th rowspan="5">
                                    <div class="form-group"><textarea class="form-control" rows="15" name="inspect-report" id="inspectionReport" maxlength="450"></textarea>
                                        <p id="mlInspectionReport"></p>
                                    </div>
                                </th>
                                <th colspan=2><input class="w3-input" type="text" name="tb2"></th>
                            </tr>
                            <tr>

                                <th colspan=2><input class="w3-input" type="text" name="tb4"></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="masonary-carpentry" <?php echo $CarpentryMasonry; ?>>
                                    <label>
                                        <center>Carpentry/ Masonary Works:
                                    </label></th>

                                <th colspan=2><input class="w3-input" type="text" name="tb6"></th>
                            </tr>
                            <tr>

                                <th colspan=2><input class="w3-input" type="text" name="tb8"></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Electrical" <?php echo $ElectricalWorks; ?>>
                                    <label>Electrical Works:</label></th>

                                <th colspan=2><input class="w3-input" type="text" name="tb10"></th>
                            </tr>
                            <tr>
                                <th>
                                    <center>Job Recommendation
                                </th>
                                <th colspan=2><input class="w3-input" type="text" name="tb11"></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Plumbing" <?php echo $Plumbing; ?>>
                                    <label>
                                        <center>Plumbing Works:
                                    </label></th>
                                <th rowspan="5">
                                    <div class="form-group"><textarea class="form-control" rows="15" name="job-recommendation" id="jobRecommendation" maxlength="450"></textarea>
                                        <p id="mlJobRecommendation"></p>
                                    </div>
                                </th>
                                <th colspan=2><input class="w3-input" type="text" name="tb13"></th>
                            </tr>
                            <tr>

                                <th colspan=2><input class="w3-input" type="text" name="tb14"></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Welding" <?php echo $Welding; ?>>
                                    <label>
                                        <center>Welding Works:
                                    </label></th>

                                <th colspan=2><input class="w3-input" type="text" name="16"></th>
                            </tr>
                            <tr>

                                <th colspan=2><input class="w3-input" type="text" name="tb18"></th>
                            </tr>
                    </table>
                    <br>

                    <table class="table table-bordered w3-card w3-round">
                        <tr>
                            <th></th>
                            <th>
                                <center>Requested by:
                            </th>
                            <th>
                                <center>Inspected by:
                            </th>
                            <th>
                                <center>Approved by:
                            </th>
                        </tr>
                        <tr>
                            <th>Signature:</th>
                            <th><input class="w3-input" type="text" name="requester-signature" placeholder="requester signature"></th>
                            <th><input class="w3-input" type="text" name="inspecter-signature" placeholder="inspecter signature"></th>
                            <th><input class="w3-input" type="text" name="director-signature" placeholder="signature of director"></th>
                        </tr>
                        <tr>
                            <th>Printed Name:</th>
                            <th><input class="w3-input" type="text" name="name-of-requester" placeholder="name of requester" value="<?php echo  $RequestorName;?>"></th>
                            <th><input class="w3-input" type="text" name="name-of-inspector" placeholder="name of inspecter" value="<?php echo  $InspectorName;?>"></th>
                            <th>
                                <center>Engr. VICTOR A. SEMIRA
                            </th>
                        </tr>
                        <tr>
                            <th>Designation:</th>
                            <th><input class="w3-input" type="text" name="designation-of-requester" placeholder="designation of requester" value="<?php echo  $RequestorDesignation;?>"></th>
                            <th><input class="w3-input" type="text" name="designation-of-inspecter" placeholder="designation of inspecter" value="<?php echo  $InspectorDesignation;?>"></th>
                            <th>
                                <center>Assistant Director of FMSO
                            </th>
                        </tr>
                        <tr>
                            <th>Date:</th>
                            <th><input type="date" class="form-control" name="date-requested" value="<?php echo  $DateRequested;?>"></th>
                            <th><input type="date" class="form-control" name="date-inspected" value="<?php echo  $DateInspected;?>"></th>
                            <th>
                                <center>GSO - GPB Main II
                            </th>
                        </tr>
                    </table>
                    <table class="table table-bordered w3-card w3-round">
                        <tr>
                            <th>Start of Service</th>
                            <th>End of Service</th>
                            <th>No. of hrs</th>
                            <th>Assessment</th>
                        </tr>
                        <br>
                        <tr>
                            <th id="con-startDate">Date: <input type="date" name="start-of-service" onchange="serviceCheckDate()" class="form-control" id="startOfService" value="<?php echo $StartOfService; ?>"></th>
                            <th><input type="date" name="end-of-service" onchange="serviceCheckDate()" class="form-control" id="endOfService"></th>
                            <th id="con-numhours" rowspan=2 value="<?php echo $EndOfService; ?>"><input class="w3-input" type="text" name="no-of-hours" id="noOfHours" value="<?php echo $NoOfHours; ?>" disabled>
                                <p class="error-message" id="assessmentErrorMessage"></p>
                            </th>
                            <th><input class="w3-check" type="radio" name="assessment" value="completed" <?php echo $Assessment == 'completed'? 'checked' : '' ?>>Work completed upon agreed duration</th>
                        </tr>
                        <tr>
                            <th>Time:<input type="time" class="form-control" name="start-of-service-time" onchange="serviceCheckDate()" id="startOfServiceTime" value="<?php echo $StartOfServiceTime;?>"></th>
                            <th><input type="time" class="form-control" name="end-of-service-time" onchange="serviceCheckDate()" id="endOfServiceTime" value="<?php echo $EndOfServiceTime; ?>"></th>
                            <th><input class="w3-check" type="radio" name="assessment" value="notcompleted" <?php echo $Assessment != 'completed'? 'checked' : '' ?>>Work not completed upon agreed duration</th>
                        </tr>
                    </table>
                    <br>
                    <table class="table table-bordered w3-card w3-round">
                        <tr>
                            <th colspan=2>
                                <center>Accomplished Works
                            </th>
                            <th>
                                <center>Work done by:
                            </th>
                            <th>
                                <center>Signature
                            </th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work1" value=" <?php echo $AccomplishedWork1; ?>"></th>
                            <th><input class="w3-input" type="text" name="work-done-by1" value="<?php echo $WorkDoneBy1; ?>"></th>
                            <th><input class="w3-input" type="text" name="signature1" value="<?php echo $Signature1?>"></th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work2" value=" <?php echo $AccomplishedWork2; ?>"></th>
                            <th><input class="w3-input" type="text" name="work-done-by2" value="<?php echo $WorkDoneBy2; ?>"></th>
                            <th><input class="w3-input" type="text" name="signature2" value="<?php echo $Signature2?>"></th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work3" value="<?php echo $AccomplishedWork3; ?>"></th>
                            <th><input class="w3-input" type="text" name="work-done-by3" value="<?php echo $WorkDoneBy3; ?>"></th>
                            <th><input class="w3-input" type="text" name="signature3" value="<?php echo $Signature3?>"></th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work4" value="<?php echo $AccomplishedWork4; ?>"></th>
                            <th><input class="w3-input" type="text" name="work-done-by4" value="<?php echo $WorkDoneBy4; ?>"></th>
                            <th><input class="w3-input" type="text" name="signature4" value="<?php echo $Signature4; ?>"></th>
                        </tr>
                        <tr>
                            <th rowspan=2>
                                <center>Conforme:
                            </th>
                            <th><input class="w3-input" type="text" name="conforme-name" value="<?php echo $ConformeName?>"></th>
                            <th><input class="w3-input" type="text" name="conforme-signature"></th>
                            <th>
                                <center><input type="date" class="form-control" name="conforme-date-signed" value="<?php echo $ConformeDateApproved?>">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <center>Name
                            </th>
                            <th>
                                <center>Signature
                            </th>
                            <th>
                                <center>Date signed
                            </th>
                    </table>
                </div>
            </div>
            <br>
            <div class="container" style="margin-top: ;">
                <!-- UPDATE form -->
                <!-- WHAT IS THIS FOR ? <form action="" method="POST"> -->
                <!-- UPDATE card -->
                <div class="card">
                    <div class="card-body" style="margin-left:2%;">

                        <table class="table table-bordered">
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
                                    <th colspan="4">Accuracy of work and efficiency to save time</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb1" <?php echo $ResponseTime == 5 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb1" <?php echo $ResponseTime == 4 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb1" <?php echo $ResponseTime == 3 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb1" <?php echo $ResponseTime == 2 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb1" <?php echo $ResponseTime == 1 ? 'checked' : '' ?> ></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Accuracy of work and efficiency to save time</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb2" <?php echo $AccuracyOfWork == 5 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb2" <?php echo $AccuracyOfWork == 4 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb2" <?php echo $AccuracyOfWork == 3 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb2" <?php echo $AccuracyOfWork == 2 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb2" <?php echo $AccuracyOfWork == 1 ? 'checked' : '' ?> ></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Courtesy and professionalis of the attending personel</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb3" <?php echo $Courtesy == 5 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb3" <?php echo $Courtesy == 4 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb3" <?php echo $Courtesy == 3 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb3" <?php echo $Courtesy == 2 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb3" <?php echo $Courtesy == 1 ? 'checked' : '' ?> ></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Quality of service provided in performing the requested work, service and/or assistance</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb4" <?php echo $QualityOfService == 5 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb4" <?php echo $QualityOfService == 4 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb4" <?php echo $QualityOfService == 3 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb4" <?php echo $QualityOfService == 2 ? 'checked' : '' ?> ></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb4" <?php echo $QualityOfService == 1 ? 'checked' : '' ?> ></th>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>


            <input name="jos" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">
               <?php 
            }
$stmt->execute();
$stmt->close();
$conn->close();
                ?>
            <script src="js/jquery-3.3.1.js"></script>
            <script>
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

            </script>
</body>

</html>
