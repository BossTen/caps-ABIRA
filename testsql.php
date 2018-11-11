<?php
require '../api/dbcon.php';
    
    $stmt=$conn->prepare("INSERT INTO joborder (AirCondition,
                                               CarpentryMasonry,
                                               ElectricalWorks,
                                               Plumbing,
                                               Welding,
                                               Campus,
                                               priorityId, 
                                               RequestorName,
                                               UserJobDescription,
                                               SerialCode
                                               ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
                                                    
$stmt->bind_param('ssssssssss',
                    $airConditioning,
                    $masonryCarpentry,
                    $electrical,
                    $plumbing,
                    $welding,
                    $campus,
                    $priority,
                    $requester,
                    $userJobDescription,
                    $serialCode);

 $airConditioning = "check";
$masonryCarpentry = "check";
$electrical = "check";
$plumbing = "check";
$welding = "check";
$campus =  "NA";
$priority =  "1";
$requester = "magnaye";
$userJobDescription ="test";
//create serial code
$serialCode= "na12321";

?>