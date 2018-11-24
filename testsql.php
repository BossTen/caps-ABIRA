<?php
require '../api/dbcon.php';
    
$o_stmt = $conn->prepare("UPDATE joborder SET  statusId=?,
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
                                               ConformeDateApproved=?
                                                WHERE SerialCode = ?
                                               ");

$o_stmt->bind_param("sssssssssssssssssssssss",
                              $o_statusId,
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
                            $o_serialCode
                        );  
 $o_statusId='5';
 echo $o_startOfService = date('h:i A', strtotime($_POST['start-of-service-time']));
 $o_endOfService = date('h:i A', strtotime($_POST['start-of-service-time']));
 $o_noOfHours = '0';
 $o_assessment = "1notcompleted";
 $o_startOfServiceTime = date('h:i A', strtotime($_POST['start-of-service-time']));
 $o_endOfServiceTime = date('h:i A', strtotime($_POST['end-of-service-time']));
 $o_accomplishedWork1 =  "1notcompleted";
 $o_workDoneBy1 = "1notcompleted";
 $o_signature1 ="1notcompleted";
 $o_accomplishedWork2 = "1notcompleted";
 $o_workDoneBy2 = "1notcompleted";
 $o_signature2 = "1notcompleted";
 $o_accomplishedWork3 = "1notcompleted";
 $o_workDoneBy3 = "1notcompleted";
 $o_signature3 = "1notcompleted";
 $o_accomplishedWork4 = "1notcompleted";
 $o_workDoneBy4 ="1notcompleted";
 $o_signature4 = "1notcompleted";
 $o_conformeName = "1notcompleted";
 $o_conformeSignature = "1notcompleted";
 $o_conformeDateSigned = "1notcompleted";
 $o_serialCode = "NA18111803";
 if($o_stmt){
  echo 'success';
 }else{
  echo 'not';
 }
 if($o_stmt->execute())
  echo 'success exe';
else
  echo 'not exe';
 $o_stmt->execute();
 $o_stmt->close();
 $conn->close(); 


?>