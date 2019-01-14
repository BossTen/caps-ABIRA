<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../api/dbcon.php';
//require '../testadmin.php';

 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  


if(isset($_REQUEST)){
  $stmt = $conn->prepare("INSERT INTO accounts (username, password, designation, campus, NameOfOffice, Department)
VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $username, $password, $designation, $campus, $nameOfOffice, $Department);
$username = $_POST['username'];
$password = $_POST['password'];
$designation = $_POST['designation'];
$campus = $_POST['campus'];
$nameOfOffice = $_POST['nameofoffice'];
$Department = $_POST['department'];
  $stmt->execute();
 $stmt->close();
 $conn->close(); 
}

      

?>