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
	$stmt = $conn->prepare("SELECT Count(*) FROM accounts WHERE username = ?");
	$stmt->bind_param('s',$username);
	$username = $_POST['username'];
	$stmt->execute();
	$stmt->bind_result($count);
	$stmt->fetch();
	$stmt->close();
	$conn->close();
	
	if($count!=0){
		echo 'username already exists';
	}else{
require '../../api/dbcon.php';
  $stmt1 = $conn->prepare("INSERT INTO accounts (username, password, designation, position, campus, NameOfOffice, Department)
VALUES (?,?,?,?,?,?,?)");
$stmt1->bind_param("sssssss", $username2, $password, $designation, $position, $campus, $nameOfOffice, $Department);
$username2 = $_POST['username'];
$password = md5($_POST['password']);
$designation = 'faculty';
$position = $_POST['designation'];
$campus = $_POST['campus'];
$nameOfOffice = $_POST['nameofoffice'];
$Department = $_POST['department'];
  $stmt1->execute();
 $stmt1->close();
 $conn->close(); 
  echo 'user successfully created';

 }
}

      

?>