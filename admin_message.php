<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../api/dbcon.php';
//require '../testadmin.php';

 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  


if(isset($_REQUEST)){
date_default_timezone_set('Asia/Hong_Kong');
	
  $stmt = $conn->prepare("INSERT INTO messages (sender, serialCode, facultyId, adminId, message, dateCreated)
VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $sender, $serialCode, $facultyId, $adminId,$message, $dateCreated);
$sender = $_SESSION['usr_type'];
$serialCode = $_POST['mSCode'];
$facultyId = isset($_POST['mFId'])? $_POST['mFId'] : $_SESSION['usr_id'];
$adminId = isset($_POST['mAId'])? $_POST['mAId'] : $_SESSION['usr_id'];
$message = $_POST['message'];
$dateCreated = date("Y-m-d H:i:s");
  $stmt->execute();
 $stmt->close();
 $conn->close(); 
 if($_SESSION['usr_type']=="admin")
 echo "<script type='text/javascript'>
                alert ('Message sent'); 
                window.location.href='admin-notices.php';</script>";
 else if($_SESSION['usr_type']=="faculty")
  echo "<script type='text/javascript'>
                alert ('Message sent'); 
                window.location.href='faculty-notices.php';</script>";	
}
?>