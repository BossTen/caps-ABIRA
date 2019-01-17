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
  $stmt = $conn->prepare("INSERT INTO accounts (username, password, designation, position, campus, NameOfOffice, Department)
VALUES (?,?,?,?,?,?)");
$stmt->bind_param("sssssss", $username, $password, $designation, $position, $campus, $nameOfOffice, $Department);
$username = $_POST['username'];
$password = md5($_POST['password']);
$designation = 'faculty';
$position = $_POST['designation'];
$campus = $_POST['campus'];
$nameOfOffice = $_POST['nameofoffice'];
$Department = $_POST['department'];
  $stmt->execute();
 $stmt->close();
 $conn->close(); 
}

      

?>