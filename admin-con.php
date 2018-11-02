<?php
$host = "localhost";
$Username = "root";
$Password ="";
$db = "testing";

mysql_connect($host,$username,$password);
mysql_select_db ("$db");

if (isset($_POST['username'])){
$Username = $_POST['username'];
$Password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE $username = '".$username."' AND $password ='".$password. "' LIMIT 1";
$res = mysql_query ($sql);

if (mysql_num_rows($res)==1){
header ("location: index.php");

}
else {
echo '<scipt>alert("Worng username or Password")</scipt>';

}
}
?>