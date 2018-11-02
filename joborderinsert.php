<?php

$serial = $_POST['serial'];
$date1 = $_POST['date1'];
$campus = $_POST['campus'];
$nameofoffice = $_POST['nameofoffice'];


// Create connection

$con = mysqli_connect('localhost','root','');
if(!$con)
{
 echo 'Not Connected To Server';
}
if (!mysqli_select_db ($con,'testing'))
{
 echo 'Database Not Selected';
}

$sql = "INSERT INTO job-order-form (`serial`, `date1`, `campus`, `nameofoffice`)
VALUES (`$serial`, `$date1`, `$campus`, `$nameofoffice`)";

if (!mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>