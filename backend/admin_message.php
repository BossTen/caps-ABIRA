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
  $stmt = $conn->prepare("INSERT INTO messages (sender, serialCode, facultyId, adminId, message, dateCreated)
VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $sender, $serialCode, $facultyId, $adminId, $nameOfOffice, $dateCreated);
$sender = "admin";
$serialCode = " ";
$facultyId = $_POST['message'];
$adminId = " ";
$message = $_POST['message'];
$dateCreated = " ";
  $stmt->execute();
 $stmt->close();
 $conn->close(); 
}
?>