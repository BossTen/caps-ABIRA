<?php
require '../api/dbconNAPI.php';
require 'testadmin.php';
//echo $_SESSION['usr_type'];
if(isset($_POST['jos'])){

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
  After create it will be set its status as "for approval"

*/
// prepare and binds
$stmt = $conn->prepare("INSERT INTO joborder (NameOfOffice,
                                               SerialCode,
                                               DateRequestCreated,
                                               AirCondition,
                                               CarpentryMasonry,
                                               ElectricalWorks,
                                               Plumbing,
                                               Welding,
                                               Painting,
                                               RequestorSignature,
                                               RequestorName,
                                               RequestorDesignation,
                                               DateRequested,
                                               signatureOfInspector,
                                               InspectorName,
                                               InspectorDesignation,
                                               DateInspected,
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
                                               materialsNeeded12
                                              -- 32
                                               ) 
                                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssssssssssssssssssssssss",
                              $nameOfOffice,
                              $serialCode,
                              $date,
                              $airConditioning,
                              $masonryCarpentry,
                              $electrical,
                              $plumbing,
                              $welding,
                              $painting,
                              $requesterSignature,
                              $nameOfRequester,
                              $designationOfRequester,
                              $dateRequested,
                              $inspecterSignature,
                              $nameOfInspector,
                              $designationOfInspecter,
                              $dateInspected,
                              $priority,
                              $campus,
                              $jobRecommendation,
                              $inspectionReport,
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
                              $m12
                        );  
// Approved = $directorSignature
// set parameters and execute
 $nameOfOffice = $_POST['nameofoffice'];
 $serialCode = $_POST['serial'];
 $airConditioning = isset($_POST['air-conditioning']) ? "checked" : '';
 $masonryCarpentry = isset($_POST['masonary-carpentry']) ? "checked" : '';
 $electrical = isset($_POST['Electrical']) ? "checked" : '';
 $plumbing = isset($_POST['Plumbing']) ? "checked" : '';
 $painting = isset($_POST['Painting']) ? "checked" : '';
 $welding = isset($_POST['Welding']) ? "checked" : '';
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
 $statusId = 1;
 $m1 = $_POST['m1'];
 $m2 = $_POST['m2'];
 $m3 = $_POST['m3'];
 $m4 = $_POST['m4'];
 $m5 = $_POST['m5'];
 $m6 = $_POST['m6'];
 $m7 = $_POST['m7'];
 $m8 = $_POST['m8'];
 $m9 = $_POST['m9'];
 $m10 = $_POST['m10'];
 $m11 = $_POST['m11'];
 $m12 = $_POST['m12'];
$stmt->execute();
$stmt->close();
$conn->close();
}
require '../api/dbcon.php';

        date_default_timezone_set('Asia/Hong_Kong');
        $todaysSerialCode='';


            if($conn->connect_error){
                die("Connection Failed: " . $conn->connect_error);
            }
            /*GETTING LATEST SERIAL CODE LAST VALUE
                -query database
                -if no result is given/null then the assumption is the there are no serialcode created for that date
                -if there are no serial code then append int 01 else then add one to the latest value
            */
            $todaysSerialCode = substr($_SESSION['usr_campus'], 0, 2) . date('y') . date('m') . date('d');
            $stmt1=$conn->prepare("SELECT MAX( SerialCode ) AS max FROM joborder where SerialCode LIKE ?");
            $stmt1->bind_param('s',$searchForLatestSerialCode);
            $searchForLatestSerialCode= $todaysSerialCode . '__';
            $stmt1->execute();
            $stmt1->bind_result($latestSerialCode);
            if($stmt1->fetch()){
            // getting the last 2 digits of the serial code and adding 1
            $latestSerialNum = substr($latestSerialCode, 8,10)+1;
             /*
                in adding one for example
                04 + 1 the result would be 4
                so we need to append again a zero below
                so if the length of the value is less than or equal to one 
                we append a zero in front of it
             */
             if(strlen($latestSerialNum)<=1)
                $latestSerialNum = '0'.$latestSerialNum;
            //appending the latest number
                 $todaysSerialCode = $todaysSerialCode . $latestSerialNum;
            }else{
                $todaysSerialCode = $todaysSerialCode . '01';
            }
           

        $stmt1->close();
        $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job Order Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
require 'navbar.php';

?>
<br><br>

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
                        <h4 class="col-6"><b>Serial:</b>&nbsp;<input type="text" name="serial" class="form-control col-12" value="<?php echo $todaysSerialCode; ?>" readonly/></h4>
                        <h4 class="col-6"><b>Priority</b>&nbsp;
                            <select class="form-control form-control" name="priority" id="priority">
                                 <?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM priority";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  //$selected = $row['Id']==$statusId ? 'selected' : '';

                              echo "<option value='".$row['Id']."' ". 'selected' .">".$row['Name']."</option>";

                                  }
                                }
                              ?>
                            </select>
                    </div>

                    <div class="row ">
                      <h4 class="col-6"><b>Status</b>&nbsp;
                            
                            <select class="form-control form-control" name="status" id="status" disabled>
                                <?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM status WHERE Name = 'Pending For Approval'  ";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  //$selected = $row['Id']==$statusId ? 'selected' : '';

            echo "<option value='".$row['Id']."' ". 'selected' .">".$row['Name']."</option>";

                                  }
                                }
                              ?>
                            </select>

                        <h4 class="col-6"><b>Date:</b>&nbsp;
                            <input type="date" class="form-control col-12" name="date1" />
                        </h4>
                      </div>
                        <div class="row">
                        <h4 class="col-6"><b>Campus:</b>&nbsp;
                            <input type="text" class="form-control col-12" name="campus" value="<?php echo $_SESSION['usr_campus'] ?> "readonly/>
                            

                <h4 class="col-6"><b>Name of Office:</b>&nbsp;
                    <input type="text" name="nameofoffice" class="form-control col-12" id="nameofoffice" placeholder="Name of Office" required>
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
                  <div class="table-responsive">

                    <table class="table table-bordered w3-card w3-round">
                        <tbody>
                            <tr>
                                <th colspan="4">
                                    <center>Kindly put a check mark before the work<br> service and/or assistance to be done
                                </th>
                                <th colspan="4" >
                                    <center>Inspection report
                                </th>
                                <th colspan="4">
                                    <center>Material Needed
                                </th>
                            </tr>
                            <tr>
                                <th rowspan=2 colspan="4"><input class="w3-check" type="checkbox" name="air-conditioning" value="true">
                                    <label>Air-conditioning Works:</label></th>
                                <th rowspan="5" colspan="4">
                                    <div class="form-group"><textarea class="form-control" rows="15" name="inspect-report" id="inspectionReport" maxlength="450"></textarea>
                                        <p id="mlInspectionReport"></p>
                                    </div>
                                </th>
                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m1"></th>
                            </tr>
                            <tr>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m2"></th>
                            </tr>
                            <tr>
                                <th rowspan=2 colspan="4"><input class="w3-check" type="checkbox" name="masonary-carpentry">
                                    <label>
                                        <center>Carpentry/ Masonary Works:
                                    </label></th>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m3"></th>
                            </tr>
                            <tr>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m4"></th>
                            </tr>
                            <tr>
                                <th rowspan=2 colspan="4"><input class="w3-check" type="checkbox" name="Electrical">
                                    <label>Electrical Works:</label></th>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m5"></th>
                            </tr>
                            <tr>
                                <th colspan="4">
                                    <center>Job Recommendation
                                </th>
                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m6"></th>
                            </tr>
                            <tr>
                                <th rowspan=2 colspan="4"><input class="w3-check" type="checkbox" name="Painting">
                                    <label>
                                        <center>Painting Works:
                                    </label></th>
                                <th rowspan="6" colspan="4">
                                    <div class="form-group" ><textarea class="form-control" rows="15" name="job-recommendation" id="jobRecommendation" maxlength="450"></textarea>
                                        <p id="mlJobRecommendation"></p>
                                    </div>
                                </th>
                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m7"></th>
                            </tr>
                            <tr>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m8"></th>
                            </tr>
                            <tr>
                                <th rowspan=2 colspan="4"><input class="w3-check" type="checkbox" name="Welding">
                                    <label>
                                        <center>Plumbing Works:
                                    </label></th>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m9"></th>
                            </tr>
                            <tr>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m10"></th>
                            </tr>
                            <tr>
                                <th rowspan=2 colspan="4"><input class="w3-check" type="checkbox" name="Welding">
                                    <label>
                                        <center>Welding Works:
                                    </label></th>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m11"></th>
                            </tr>
                            <tr>

                                <th colspan=2 colspan="4"><input class="w3-input" type="text" name="m12"></th>
                            </tr>
                    </table>
            </div>
            </div>
            </div>
            </div>
          </div>
  <br>
    <div class="container" style="margin-top: ;">
        <!-- UPDATE form -->
        <form action="" method="POST">
            <!-- UPDATE card -->
            <div class="card">
                <div class="card-body" style="margin-left:2%;">
                  <div class="table-responsive">

                    <table class="table table-bordered w3-round">
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
                            <th><input class="w3-input" type="text" name="director-signature" placeholder="signature of director" readonly></th>
                        </tr>
                        <tr>
                            <th>Printed Name:</th>
                            <th><input class="w3-input" type="text" name="name-of-requester" placeholder="name of requester"></th>
                            <th><input class="w3-input" type="text" name="name-of-inspector" placeholder="name of inspecter"></th>
                            <th>
                                <center>Engr. VICTOR A. SEMIRA
                            </th>
                        </tr>
                        <tr>
                            <th>Designation:</th>
                            <th><input class="w3-input" type="text" name="designation-of-requester" placeholder="designation of requester"></th>
                            <th><input class="w3-input" type="text" name="designation-of-inspecter" placeholder="designation of inspecter"></th>
                            <th>
                                <center>Assistant Director of FMSO
                            </th>
                        </tr>
                        <tr>
                            <th>Date:</th>
                            <th><input type="date" class="form-control" name="date-requested"></th>
                            <th><input type="date" class="form-control" name="date-inspected"></th>
                            <th>
                                <center>GSO - GPB Main II
                            </th>
                        </tr>
                    </table>
</div>
</div>
</div>
</div>

<!--asdasdas--><br><br>
    <div class="container" style="margin-top: ;">
        <!-- UPDATE form -->
        <form action="" method="POST">
            <!-- UPDATE card -->
            <div class="card">
                <div class="card-body" style="margin-left:2%;">
                  <div class="table-responsive">
                    <table class="table table-bordered w3-card w3-round">
                        <tr>
                            <th>Start of Service</th>
                            <th>End of Service</th>
                            <th>No. of hrs</th>
                            <th>Assessment</th>
                        </tr>
                        <br>
                        <tr>
                            <th id="con-startDate">Date: <input type="date" name="start-of-service" onchange="serviceCheckDate()" class="form-control" id="startOfService" readonly></th>
                            <th><input type="date" name="end-of-service" onchange="serviceCheckDate()" class="form-control" id="endOfService" readonly></th>
                            <th id="con-numhours" rowspan=2><input class="w3-input" type="text" name="no-of-hours" id="noOfHours" readonly>
                                <p class="error-message" id="assessmentErrorMessage"></p>
                            </th>
                            <th><input class="w3-check" type="radio" name="assessment" value="completed" disabled>Work completed upon agreed duration</th>
                        </tr>
                        <tr>
                            <th>Time:<input type="time" class="form-control" name="start-of-service-time" onchange="serviceCheckDate()" id="startOfServiceTime" readonly></th>
                            <th><input type="time" class="form-control" name="end-of-service-time" onchange="serviceCheckDate()" id="endOfServiceTime" readonly></th>
                            <th><input class="w3-check" type="radio" name="assessment" value="notcompleted" disabled>Work not completed upon agreed duration</th>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!---asdasd--><br><br>

<div class="container" style="margin-top: ;">
        <!-- UPDATE form -->
        <form action="" method="POST">
            <!-- UPDATE card -->
            <div class="card">
                <div class="card-body" style="margin-left:2%;">
                  <div class="table-responsive">
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
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work1" readonly></th>
                            <th><input class="w3-input" type="text" name="work-done-by1" readonly></th>
                            <th><input class="w3-input" type="text" name="signature1" readonly></th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work2" readonly></th>
                            <th><input class="w3-input" type="text" name="work-done-by2" readonly></th>
                            <th><input class="w3-input" type="text" name="signature2" readonly></th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work3" readonly></th>
                            <th><input class="w3-input" type="text" name="work-done-by3" readonly></th>
                            <th><input class="w3-input" type="text" name="signature3" readonly></th>
                        </tr>
                        <tr>
                            <th colspan=2><input class="w3-input" type="text" name="accomplished-work4" readonly></th>
                            <th><input class="w3-input" type="text" name="work-done-by4" readonly></th>
                            <th><input class="w3-input" type="text" name="signature4" readonly></th>
                        </tr>
                        <tr>
                            <th rowspan=2>
                                <center>Conforme:
                            </th>
                            <th><input class="w3-input" type="text" name="conforme-name" readonly></th>
                            <th><input class="w3-input" type="text" name="conforme-signature" readonly></th>
                            <th>
                                <center><input type="date" class="form-control" name="conforme-date-signed" readonly>
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
            </div>
          </div>
        </div>
      </div>


            <br><br>
            <div class="container" style="margin-top: ;">
                <!-- UPDATE form -->
                <!-- WHAT IS THIS FOR ? <form action="" method="POST"> -->
                <!-- UPDATE card -->
                <div class="card">
                    <div class="card-body" style="margin-left:2%;">
                        <div class="table-responsive">
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
                                    <th><input type="radio" value="5" class="form-control" name="cb1" disabled></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb1" disabled></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb1" disabled></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb1" disabled></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb1" disabled></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Accuracy of work and efficiency to save time</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb2" disabled></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb2" disabled></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb2" disabled></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb2" disabled></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb2" disabled></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Courtesy and professionalis of the attending personel</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb3" disabled></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb3" disabled></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb3" disabled></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb3" disabled></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb3" disabled></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Quality of service provided in performing the requested work, service and/or assistance</th>
                                    <th><input type="radio" value="5" class="form-control" name="cb4" disabled></th>
                                    <th><input type="radio" value="4" class="form-control" name="cb4" disabled></th>
                                    <th><input type="radio" value="3" class="form-control" name="cb4" disabled></th>
                                    <th><input type="radio" value="2" class="form-control" name="cb4" disabled></th>
                                    <th><input type="radio" value="1" class="form-control" name="cb4" disabled></th>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>

<div class="container" style="margin-bottom: 5%">
            <input name="jos" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Create">
          </div>
            

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
                        //TODO ADD TRUNCATION TO REMOVE DECIMAL VALUES  
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
