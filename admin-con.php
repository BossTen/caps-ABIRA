<?php
$host = "localhost";
$Username = "root";
$Password ="";
$db = "testing";

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'testing');

if (isset($_POST['username'])){
$Username = $_POST['username'];
$Password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' && password='$password'";
$res = $conn->query($sql);

if (mysql_num_rows($res)==1){
header ("location: index.php");

}
else {
echo '<scipt>alert("Worng username or Password")</scipt>';

}
}
?>