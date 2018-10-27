<?php
$host = "localhost";
$Username = "root";
$Password ="";
$db = "testing";

mysql_connect($host,$Username,$Password);
mysql_select_db ("$db");

if (isset($_POST['Username'])){
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$sql = "SELECT * FROM admin WHERE $Username = '".$username."' AND $Password ='".$password. "' LIMIT 1";
$res = mysql_query ($sql);

if (mysql_num_rows($res)==1){
header ("location: index.php");

}
else {
echo '<scipt>alert("Worng username or Password")</scipt>';

}
}
?>