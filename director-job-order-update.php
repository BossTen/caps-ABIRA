<?php
require '../api/dbcon.php';


 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  



if(isset($_POST['accept'])){
    //Check connection
  require '../api/dbcon.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt1 = $conn->prepare("UPDATE joborder SET statusId = ?
                                                WHERE SerialCode = ?
                                               ");

$stmt1->bind_param("ss",
                              $statusId1,
                              $serialCode1
                        );  



 $serialCode1 = $_POST['serial'];
//2 approve 3 denied
 $statusId1 =  2;

 $stmt1->execute();
 $stmt1->close();
 $conn->close(); 

     header('location: director-job-order-view.php');
    exit();

}
 if (isset($_POST['denied'])){
  require '../api/dbcon.php';
    //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("UPDATE joborder SET statusId = ?
                                                WHERE SerialCode = ?
                                               ");

$stmt->bind_param("ss",
                              $statusId1,
                              $serialCode1

                        );  



 $serialCode2 = $_POST['serial'];
//2 approve 3 denied
 $statusId2 =  3 ;

 $stmt->execute();
 $stmt->close();
 $conn->close(); 
     header('location: director-job-order-view.php');
    exit();
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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title class="no-print">Job Order Form</title>
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

</head>

<body>
    <?php
require 'navbar-director.php';
?>

    <center>
        <h1 class="w3-text-red">Job Order Form - Inspection Order</h1>
    </center>
            <!-- UPDATE form -->
        <form action="" method="post">
            <!-- UPDATE card -->
    <div class="container" style="margin-top: ;">



            <div class="card">
                <div class="card-body" style="margin-left: 2%;">

                    <div class="row">
                        <h4 class="col-6"><b>Serial:</b>&nbsp;<small><?php echo $SerialCode;?></small>
                          <input type="hidden" name="serial" value="<?php echo $SerialCode; ?>"></small>
                        <h4 class="col-6"><b>Priority</b>
                          <small>
                            <!-- <select class="form-control form-control" name="priority" id="priority"> -->
                                <?php
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
                              ?>
                            <!-- </select> -->
                          </small>
                          </div>
                          <div class="row">

                             <h4 class="col-6"><b>Status</b>&nbsp;
                            
                            <!-- <select class="form-control form-control" name="status" id="status" disabled> -->
                                <small><?php
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
                              ?></small>
                            <!-- </select> -->
                        
                        <h4 class="col-6"><b>Date:</b>&nbsp;
                            <!-- <input type="date" class="form-control col-12" name="date1" value="" disabled/> -->
                            <small><?php echo $DateRequestCreated ?><small/>
                        </h4>
                        <h4 class="col-6"><b>Campus:</b>&nbsp;
                            <small><?php echo $Campus; ?></small>
                <h4 class="col-6"><b>Name of Office:</b>&nbsp;
                    <!-- <input type="text" name="nameofoffice" class="form-control col-30" id="nameofoffice" placeholder="Name of Office" value=""disabled> -->
                    <small><?php echo $NameOfOffice; ?>"</small>

            </div>
    </div>
    </div>
    <br>
    <center>
        <h1 class="w3-text-red">Job Order Request</h1>
    </center>
    <div class="container" style="margin-top: ;">
        <!-- UPDATE form -->

            <!-- UPDATE card -->
            <div class="card">
                <div class="card-body" style="margin-left:2%;">



                  <div class="table-responsive">
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
                                <th rowspan=2><input class="w3-check" type="checkbox" name="air-conditioning" <?php echo $AirCondition; ?> >
                                    <label>Air-conditioning Works:</label></th>
                                <th rowspan="5">
                                    <div class="form-group"><big><?php echo $InspectionReport; ?></big></textarea>
                                        <p id="mlInspectionReport"></p>
                                    </div>
                                </th>
                                <th colspan=2><big><?php echo $m1 ?></big></th>
                            </tr>
                            <tr>

                                <th colspan=2><big><?php echo $m2 ?></big></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="masonary-carpentry" <?php echo $CarpentryMasonry; ?>>
                                    <label>
                                        <center>Carpentry/ Masonary Works:
                                    </label></th>

                                <th colspan=2><big><?php echo $m3 ?></big></th>
                            </tr>
                            <tr>

                                <th colspan=2><big><?php echo $m4 ?></big></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Electrical" <?php echo $ElectricalWorks; ?>>
                                    <label>Electrical Works:</label></th>

                                <th colspan=2><big><?php echo $m5 ?></big></th>
                            </tr>
                            <tr>
                                <th>
                                    <center>Job Recommendation
                                </th>
                                <th colspan=2><big><?php echo $m6 ?></big></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Painting" <?php echo $Painting; ?>>
                                    <label>
                                        <center>Painting Works:
                                    </label></th>
                                <th rowspan="6">
                                    <div class="form-group"><big><?php echo $JobRecommendation; ?></big>
                                        <p id="mlJobRecommendation"></p>
                                    </div>
                                </th>
                                <th colspan=2><big><?php echo $m7 ?></big></th>
                            </tr>
                            <tr>
                              <th colspan=2><big><?php echo $m8 ?></big></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Plumbing" <?php echo $Plumbing; ?>>
                                    <label>
                                        <center>Plumbing Works:
                                    </label></th>
                            
                                </th>
                                <th colspan=2><big><?php echo $m9 ?></big></th>
                            </tr>
                            <tr>

                                <th colspan=2><big><?php echo $m10 ?></big></th>
                            </tr>
                            <tr>
                                <th rowspan=2><input class="w3-check" type="checkbox" name="Welding" <?php echo $Welding; ?>>
                                    <label>
                                        <center>Welding Works:
                                    </label></th>

                                <th colspan=2><big><?php echo $m11 ?></big></th>
                            </tr>
                            <tr>

                                <th colspan=2><big><?php echo $m12 ?></big></th>
                            </tr>
                    </table>
                  </div>

                    <h4 class="no-print"><b>Report Description:</b>&nbsp;
            <div class="form-group"><big>
              <?php echo $userJobDescription ?>
            </big></div>
                    <br>

                    <div class="table-responsive">
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
                            <th><input class="w3-input" type="hidden" name="requester-signature" placeholder="requester signature"></th>
                            <th><input class="w3-input" type="hidden" name="inspecter-signature" placeholder="inspecter signature"></th>
                            <th><input class="w3-input" type="hidden" name="director-signature" placeholder="signature of director"></th>
                        </tr>
                        <tr>
                            <th>Printed Name:</th>
                            <th><medium><?php echo  $RequestorName;?></medium></th>
                            <th><medium><?php echo  $InspectorName;?></medium></th>
                            <th>
                                <center>Engr. VICTOR A. SEMIRA</center>
                            </th>
                        </tr>
                        <tr>
                            <th>Designation:</th>
                            <th><medium><?php echo  $RequestorDesignation;?></medium></th>
                            <th><medium><?php echo  $InspectorDesignation;?></medium></th>
                            <th>
                                <center>Assistant Director of FMSO</center>
                            </th>
                        </tr>
                        <tr>
                            <th>Date:</th>
                            <th><medium><?php echo  $DateRequestCreated;?></medium></th>
                            <th><medium><?php echo  $DateInspected;?></medium></th>
                            <th>
                                <center>GSO - GPB Main II</center>
                            </th>
                        </tr>
                    </table>
                  </div>
                    
            
            <div class="container" style="margin-bottom: 5%">

            <input name="accept" style="padding:20px;" class="no-print btn btn-success" type="submit" value="Approve">
            <input name="denied" style="padding:20px;" class="no-print btn btn-danger"  type="submit" value="Deny">
            <input name="btn-print" style="padding:20px;" onClick="window.print()" class="no-print btn btn-warning" id="print-button" type="button" value="Print">
          
          </form>
          </div>


               <?php 
            }
$stmt->execute();
$stmt->close();
$conn->close();
                ?>

            <script>
              //disabling of fields
              if(<?php echo $statusId ?> != 1){
                console.log('not for approval');
                $(":input").not("[name=btn-print]")
                      .prop("disabled", true);
              }else if(<?php echo $statusId ?> == 1){
                console.log('for approval');
                $(":input").not("[name=accept],[name=denied],[name=btn-print],[name=serial]")
                      .prop("disabled", true);
              }
              //disabling of fields

              //disable all fields except btn approve and deny
              // $(document).ready(function () {
              //     $(":input").not("[name=accept],[name=denied],[name=btn-print],[name=serial]")
              //         .prop("disabled", true);
              // });
              //disable all fields except btn approve and deny



              //print
                // $('#print-button').on('click', function() {  
                //   window.print();  
                //   return false; // why false?
                // });


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
                /*
                  1 - For Approval
                  2 - Approved
                  3 - Denied
                  4 - Pending
                  4 - On - Going
                  6 - Done
                  7 - For CSO Additional Info
                  USER TYPE CONDITIONS
                */
                

                //fields and buttons logic
                if(status==7){
                  console.log("status is 7");
                  select_priority.disabled = true;
                }

                  



                // switch(s_usr_type){
                //   case "admin":
                //   console.log("admin - switch");
                //         if(status !=  7){
                            
                //             select_priority.disabled = true;

                //             console.log("disabled");
                //           }else{
                //             update_button.disabled = false;
                //             console.log("not disabled");
                //             }
                //         break;

                //   case "director":
                //   console.log("director");
                //           if(status == 7)
                //             update_button.disabled = true;
                //           else
                //             update_button.disabled = false;
                //         break;

                //   case "faculty":
                //   console.log("faculty");
                //             update_button.disabled = true;
                //         break;

                // }
                
            </script>
</body>

</html>
