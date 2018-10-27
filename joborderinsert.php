<?php
$serial = $_POST['serial'];
$date1 = $_POST['date1'];
$campus = $_POST['campus'];
$nameofoffice = $_POST['nameofoffice'];

con = mysqli_connect('localhost','root','');
if(!$con)
{
 echo 'Not Connected To Server';
}
if (!mysqli_select_db ($con,'testing'))
{
 echo 'Database Not Selected';
}

$sql = "INSERT INTO `jobform`(`$serial`, `$date1`, `$campus`, `$nameofoffice`) VALUES (`$serial`,`$date1`,`$campus`,`$nameofoffice`)";

if (!mysqli_query($con,$sql))
{
 echo 'Not Inserted';
}

else
{
header("location: job-order-record.php");
	exit();
}
