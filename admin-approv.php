<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../api/dbcon.php';
require 'testadmin.php';

 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  



if(isset($_POST['jos'])){

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("UPDATE joborder SET statusId = ?,
                                              
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
                                                WHERE SerialCode = ?
                                               ");

$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssss",
                              $sIdu,
                              
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
  $sIdu = 5;
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
  header('location: scheduling.php');
  exit();
 }
 $stmt->close();
 $conn->close(); 

}

require '../api/dbcon.php';
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
                           UserJobDescription 
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
                       $r_JobRecommendation,
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
                       $userJobDescription
                     );

    while($stmt->fetch()){
     
      //code for checking if user is with the same campus as the requester
      if (!isset($_SESSION)) session_start();//one liner code to check if session has started
      if(strtolower($_SESSION['usr_campus'])!=strtolower($Campus)){
         // header('location: not-allowed.php');
         // exit();
       strtolower($_SESSION['usr_campus']). strtolower($Campus);
      }

      if($statusId!=2){
        //if status is not equals to approved
        header('location: job-order-view.php');
      }


      //code for checking if user is with the same campus as the requester
      

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title class="no-print">Job Order Approved</title>
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
    <?php
require 'navbar.php';
?>

<br><br>
<form action="" method="POST">
<div class="container" style="margin-bottom: 3%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body" style="margin-left: 3%;margin-right: 3%;">
          <h5 class="w3-text-red">Job Order Form - Inspection Order</h5>
          <div class="row">
            <h6 class="col-6">Serial: <label><?php echo $SerialCode;?></label></h6>
            <h6 class="col-6">Priority: <label></label></h6>
          </div>
          <div class="row">
            <h6 class="col-6">Status: <label></label></h6>
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
            <h6 class="col-12">Works: <label></label></h6>
          </div>
          <div class="row">
            <h6>Inspection Report:&nbsp; <label><?php echo $InspectionReport; ?></label></h6>
           
          </div>
          <br>
          <div class="row">
            <h6>Job Recommendation:&nbsp; <label><?php echo $r_JobRecommendation ?></label></h6>   
          </div>
          <br>
          <div class="row">
            <h6>Materials Needed:&nbsp;<label><?php echo $m1 ?></label></h6>
            
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
            <h6 class="col-3">Start Date: <input type="date" name="start-of-service" onchange="serviceCheckDate()" class="form-control onNapprove" id="startOfService" value="<?php echo $StartOfService; ?>" required></h6>
            <h6 class="col-3">Start Time: <input type="time" class="form-control onNapprove" name="start-of-service-time" onchange="serviceCheckDate()" id="startOfServiceTime" value="<?php echo $StartOfServiceTime;?>" required></h6>
            <h6 class="col-3">End Date: <input type="date" name="end-of-service" onchange="serviceCheckDate()" class="form-control onNapprove" id="endOfService" required></h6>
            <h6 class="col-3">End Time: <input type="time" class="form-control onNapprove" name="end-of-service-time" onchange="serviceCheckDate()" id="endOfServiceTime" value="<?php echo $EndOfServiceTime; ?>" required></h6>
          </div>
          <br>

          <!--footer-->
          <br>
          <center>
          <h6 id="message-bottom" class="w3-text-green"></h6>
          </center>
          <div id="btn-container" class="container w3-center" style="margin-bottom: 5%">
            <input name="jos" style="padding:20px;" class=" onNapprove no-print btn btn-success" type="submit" value="Update" id="custom-button">
            <input name="print-button" style="padding:20px;" class="onNapprove no-print btn btn-warning" type="button" value="Print">
          </div>
          </div>

          <div class="container ">
  <div class="float-right"><a href="">
    <a href="" class="nav-link" data-toggle="modal" data-target="#write" ><button type="button" class="btn btn-success">Write a message</button></a>
  </div>
</div>

<!--modal write a message-->
<div class="modal fade" id="write" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <form action="message.php" method="post">
        <input class="form-control col-12" name="serialcode" id="" placeholder="Enter Serial Code" value="<?php echo $SerialCode;?>" readonly>

        <br>
        <input type="text" name="message" class="form-control col-12" id="" placeholder="Enter your message"><br>
        <button type="submit" name="send" class="btn btn-success">Send</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--modal reply-->
<div class="modal fade" id="reply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <input type="text" name="" class="form-control col-12" id="" placeholder="Enter your message" value= ""><br>
        <button type="button" class="btn btn-success">Send</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



        </div>
      </div>
    </div>
  </div>
</div>
</form>

 <?php 
            }
$stmt->execute();
$stmt->close();
$conn->close();
                ?>

            <script>
  $('#print-button').on('click', function() {  
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

              if(<?php echo $statusId ?> == 2 ){
                //fields are now set for this status so we aint going to readonly any fields here
                //but we need to add a text
                //change button name for server side script
                $('#message-bottom').text('Submitting would set this as for On-going');
                      //           $(":input").not("[class=onNapprove]")
                      // .prop("disabled", true);
                      

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



