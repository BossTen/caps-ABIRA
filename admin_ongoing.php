<?php

  if(isset($_POST['ongoing'])){
  require '../api/dbcon.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo ' ongoing ';
// prepare and binds
$o_stmt = $conn->prepare("UPDATE joborder SET statusId = ?,
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

$o_stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
                              $o_sIdu,
                              $o_airConditioning,
                              $o_masonryCarpentry,
                              $o_electrical,
                              $o_painting,
                              $o_plumbing,
                              $o_welding,
                              $o_requesterSignature,
                              $o_nameOfRequester,
                              $o_designationOfRequester,
                              $o_dateRequested,
                              $o_inspecterSignature,
                              $o_nameOfInspector,
                              $o_designationOfInspecter,
                              $o_dateInspected,
                              $o_directorSignature,
                              $o_startOfService,
                              $o_endOfService,
                              $o_noOfHours,
                              $o_assessment,
                              $o_startOfServiceTime,
                              $o_endOfServiceTime,
                              $o_accomplishedWork1,
                              $o_workDoneBy1,
                              $o_signature1,
                              $o_accomplishedWork2,
                              $o_workDoneBy2,
                              $o_signature2,
                              $o_accomplishedWork3,
                              $o_workDoneBy3,
                              $o_signature3,
                              $o_accomplishedWork4,
                              $o_workDoneBy4,
                              $o_signature4,
                              $o_conformeName,
                              $o_conformeSignature,
                              $o_conformeDateSigned,
                              $o_responseTime,
                              $o_accuracyOfWork,
                              $o_courtesy,
                              $o_qualityOfService,
                              $o_priority,
                              //$campus,
                              $o_jobRecommendation,
                              $o_inspectionReport,
                              $o_m1get,
                              $o_m2get,
                              $o_m3get,
                              $o_m4get,
                              $o_m5get,
                              $o_m6get,
                              $o_m7get,
                              $o_m8get,
                              $o_m9get,
                              $o_m10get,
                              $o_m11get,
                              $o_m12get,
                              $o_serialCode

                        );  

 $o_sIdu = 6;
 $o_painting = isset($_POST['Painting']) ? "checked" : 'off';
 $o_airConditioning = isset($_POST['air-conditioning']) ? "checked" : 'off';
 $o_masonryCarpentry = isset($_POST['masonary-carpentry']) ? "checked" : 'off';
 $o_electrical = isset($_POST['Electrical']) ? "checked" : 'off';
 $o_plumbing = isset($_POST['Plumbing']) ? "checked" : 'off';
 $o_welding = isset($_POST['Welding']) ? "checked" : 'off';
 $o_requesterSignature = $_POST['requester-signature']; 
 $o_inspecterSignature = $_POST['inspecter-signature'];
 $o_directorSignature = $_POST['director-signature'];
 $o_nameOfRequester = $_POST['name-of-requester'];
 $o_nameOfInspector = $_POST['name-of-inspector'];
 $o_designationOfRequester = $_POST['designation-of-requester'];
 $o_designationOfInspecter = $_POST['designation-of-inspecter'];
 $o_dateRequested = $_POST['date-requested'];
 $o_dateInspected = $_POST['date-inspected'];
 $o_startOfService = $_POST['start-of-service'];
 $o_endOfService = $_POST['end-of-service'];
 $o_noOfHours = $_POST['no-of-hours'];
 $o_assessment = isset($_POST['assessment'])? $_POST['assessment'] : "notcompleted"  ;
 $o_startOfServiceTime = date('h:i A', strtotime($_POST['start-of-service-time']));
 $o_endOfServiceTime = date('h:i A', strtotime($_POST['end-of-service-time']));
 $o_accomplishedWork1 = $_POST['accomplished-work1'];
 $o_workDoneBy1 = $_POST['work-done-by1'];
 $o_signature1 = $_POST['signature1'];
 $o_accomplishedWork2 = $_POST['accomplished-work2'];
 $o_workDoneBy2 = $_POST['work-done-by2'];
 $o_signature2 = $_POST['signature2'];
 $o_accomplishedWork3 = $_POST['accomplished-work3'];
 $o_workDoneBy3 = $_POST['work-done-by3'];
 $o_signature3 = $_POST['signature3'];
 $o_accomplishedWork4 = $_POST['accomplished-work4'];
 $o_workDoneBy4 = $_POST['work-done-by4'];
 $o_signature4 = $_POST['signature4'];
 $o_conformeName = $_POST['conforme-name'];
 $o_conformeSignature = $_POST['conforme-signature'];
 $o_conformeDateSigned = $_POST['conforme-date-signed'];
 $o_responseTime = isset($_POST['cb1'])? $_POST['cb1'] : "0" ;
 $o_accuracyOfWork = isset($_POST['cb2'])? $_POST['cb2'] : "0" ;
 $o_courtesy = isset($_POST['cb3'])? $_POST['cb3'] : "0";
 $o_qualityOfService = isset($_POST['cb4'])? $_POST['cb4'] : "0";
 $o_priority = $_POST['priority'];
 $o_jobRecommendation = $_POST['job-recommendation'];
 $o_inspectionReport = $_POST['inspect-report'];
 $o_m1get = isset($_POST['m1']) ? $_POST['m1'] : '';
 $o_m2get = isset($_POST['m2']) ? $_POST['m2'] : '';
 $o_m3get = isset($_POST['m3']) ? $_POST['m3'] : '';
 $o_m4get = isset($_POST['m4']) ? $_POST['m4'] : '';
 $o_m5get = isset($_POST['m5']) ? $_POST['m5'] : '';
 $o_m6get = isset($_POST['m6']) ? $_POST['m6'] : '';
 $o_m7get = isset($_POST['m7']) ? $_POST['m7'] : '';
 $o_m8get = isset($_POST['m8']) ? $_POST['m8'] : '';
 $o_m9get = isset($_POST['m9']) ? $_POST['m9'] : '';
 $o_m10get =isset($_POST['m10']) ? $_POST['m10'] : '';
 $o_m11get =isset($_POST['m11']) ? $_POST['m11'] : '';
 $o_m12get =isset($_POST['m12']) ? $_POST['m12'] : '';
 $o_serialCode = $_POST['serial'];

 $o_stmt->execute();
 $o_stmt->close();
 $conn->close(); 
}else{
  echo 'not onfoing';
}

?>