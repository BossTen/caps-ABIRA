<?php
require '../api/dbcon.php';
$stmt1 = $conn->prepare("UPDATE joborder SET statusId = ?
                                                WHERE SerialCode = ?
                                               ");

$stmt1->bind_param("ss",
                              $statusId1,
                              $serialCode1

                        );  



 echo $serialCode1 = 'AL18120706';
//2 approve 3 denied
 $statusId1 =  2;

 $stmt1->execute();
 $stmt1->close();
 $conn->close(); 

?>