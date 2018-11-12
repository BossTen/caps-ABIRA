<?php
$connect = mysqli_connect('localhost', 'root', '', 'abira');

if (isset($_POST['login'])) {
	if (empty($_POST['username']) && empty($_POST['password'])){
	echo '<script> alert("Both Field are required")</script>';
}

else{
$username=mysqli_escape_string($connect, $_POST['username']);
$password=mysqli_escape_string($connect, $_POST['password']);
$query = "SELECT * FROM admin WHERE password='$password' AND username='$username'";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result)> 0){

header('location:orders.php');
}
else {
header('location: error.php');
}
}
}
?>