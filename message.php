<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../api/dbcon.php';
//require '../testadmin.php';

 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  


//if(isset($_REQUEST)){
date_default_timezone_set('Asia/Hong_Kong');
	//get serial code
  //verify serial code
  //send message to serial code
$stmt = $conn->prepare("SELECT RequestorName FROM joborder WHERE SerialCode = ?");
$stmt->bind_param('s',$serialCode);
$serialCode = $_POST['serialcode'];
$stmt->execute();
$stmt->bind_result($requestorName);
$stmt->fetch();
$stmt->close();
$conn->close();
 $requestorName;

require '../api/dbcon.php';
//, desgination, campus, NameOfOffice, Department
$stmt1 = $conn->prepare("SELECT Id FROM accounts WHERE username = ? ");
$stmt1->bind_param('s',$requestorName);
$stmt1->execute();
$stmt1->bind_result($uId);
$stmt1->fetch();
$stmt1->close();
$conn->close();
echo $uId;

require '../api/dbcon.php';
$stmt2 = $conn->prepare("INSERT INTO messages (sender, serialCode, facultyId, adminId, message, dateCreated)
VALUES (?,?,?,?,?,?)");
$stmt2->bind_param("ssssss", $sender, $serialCode, $facultyId, $adminId,$message, $dateCreated);
$sender = $_SESSION['usr_type'];
//$serialCode = $_POST['mSCode'];
$facultyId = $uId;
$adminId = $_SESSION['usr_id'];
 $message = $_POST['message'];
$dateCreated = date("Y-m-d H:i:s");
  $stmt2->execute(); 
 $stmt2->close();
 $conn->close();
 if($_SESSION['usr_type']=="admin")
 echo "<script type='text/javascript'>
                alert ('Message sent'); 
                window.location.href='admin-notices.php';</script>";
 else if($_SESSION['usr_type']=="faculty")
  echo "<script type='text/javascript'>
                alert ('Message sent'); 
                window.location.href='faculty-notices.php';</script>";  


//}
?>