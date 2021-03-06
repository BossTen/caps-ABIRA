<?php
require '../api/dbcon.php';
/*
  This form should only be accessible by usr_type admin and faculty\][






  ]
*/


if(isset($_POST['approve'])){
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and binds
$stmt = $conn->prepare("UPDATE joborder SET statusId = ?
                                                WHERE SerialCode = ?
                                               ");

$stmt->bind_param("ss",
                              $sIdu,

                              $serialCode

                        );

  $sIdu = 2;

 $serialCode = $_POST['serial'];

 $stmt->execute();
 $stmt->close();
 $conn->close();
           header('location: director-notif.php');
          exit();

}

if(isset($_POST['denied'])){
    //nameofoffice
    //serial

    //Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // prepare and binds
  $stmt = $conn->prepare("UPDATE joborder SET statusId = ?
                                                  WHERE SerialCode = ?
                                                 ");

  $stmt->bind_param("ss",
                                $sIdu,

                                $serialCode

                          );

    $sIdu = 3;

   $serialCode = $_POST['serial'];

   $stmt->execute();
   $stmt->close();
   $conn->close();
            header('location: director-notif.php');
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
                           Plumbing,
                           Painting,
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
                       $Plumbing,
                       $Painting,
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
                       $location
                     );

    while($stmt->fetch()){

      //code for checking if user is with the same campus as the requester
      if (!isset($_SESSION)) session_start();//one liner code to check if session has started
      if(strtolower($_SESSION['usr_campus'])!=trim(strtolower($Campus))){
          header('location: not-allowed.php');
          exit();
      }
      //code for checking if user is with the same campus as the requester

//        echo $NameOfOffice;
//        echo $DateRequestCreated;
//        echo $AirCondition;
//        echo $CarpentryMasonry;
//        echo $ElectricalWorks;
//        echo $Plumbing;
//        echo $Welding;
//        echo $RequestorSignature;
//        echo $RequestorName;
//        echo $RequestorDesignation;
//        echo $DateRequested;
//        echo $signatureOfInspector;
//        echo $InspectorName;
//        echo $InspectorDesignation;
//        echo $DateInspected;
//        echo $Approved;
//        echo $StartOfService;
//        echo $EndOfService;
//        echo $NoOfHours;
//        echo $Assessment;
//        echo $StartOfServiceTime;
//        echo $EndOfServiceTime;
//        echo $AccomplishedWork1;
//        echo $WorkDoneBy1;
//        echo $Signature1;
//        echo $AccomplishedWork2;
//        echo $WorkDoneBy2;
//        echo $Signature2;
//        echo $AccomplishedWork3;
//        echo $WorkDoneBy3;
//        echo $Signature3;
//        echo $AccomplishedWork4;
//        echo $WorkDoneBy4;
//        echo $Signature4;
//        echo $ConformeName;
//        echo $ConformeApproved;
//        echo $ConformeDateApproved;
//        echo $ResponseTime;
//        echo $AccuracyOfWork;
//        echo $Courtesy;
//        echo $QualityOfService;
//        echo $priorityId;
//        echo $CampusId;
//        echo $JobRecommendation;
//        echo $InspectionReport;

      //adding logic for setting if a field is editable
      $isEditable = '';
      //first checking if there is a $_SESSION['usr_type'] else do nothing
      if(isset($_SESSION['usr_type'])){
        //there is a usr_type so we shall proceed
        if($statusId ==7 && ($_SESSION['usr_type']=='admin' || $_SESSION['usr_type']=='faculty')){
          // if statusId equals to 7 which is 'For GSO Additional info' and usr_type is either admin or faculty then the field is editable
          $isEditable = '';
        }else{
          $isEditable = 'disabled';
        }
      }
      //adding logic for setting if a field is editable

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
require 'navbar-director.php';
?>

<br><br>
<form action="" method="POST">
<div class="container" style="margin-bottom: 1%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body" style="margin-left: 3%;margin-right: 3%;">
          <h5 class="w3-text-red">Job Order Form - Inspection Order</h5>
          <div class="row">
            <h6 class="col-6">Serial: <label><?php echo $SerialCode;?></label></h6>
            <input type="hidden" name="serial" value="<?php echo $SerialCode;?>">
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
                              ?></label> </h6>
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
            <h6 class="col-6">Name of Office: <label><?php echo $NameOfOffice; ?></label>
          </div>
          <h5 class="w3-text-red">Job Order Request</h5>
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
            <h6 class="col-12">Location: <label><?php echo $location; ?></label></h6>
          </div>
          <div class="row">
            <h6>Inspection Report:&nbsp; <label><?php echo $InspectionReport; ?></label></h6>
          </div>
          <br>
          <div class="row">
            <h6>Job Recommendation:&nbsp; <label><?php echo $JobRecommendation; ?></label></h6>
            
          </div>
          <br>
          <div class="row">
            <h6>Materials Needed:&nbsp; <label><?php 
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
