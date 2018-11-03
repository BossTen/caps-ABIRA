<?php
require 'dbcon.php';

$sql = "SELECT Priority,SerialCode,CampusId,DateRequestCreated FROM joborder ";
$result = $conn->query($sql);
if($result->num_rows >0){
	while($row = $result->fetch_assoc()){
		echo $row['Priority'];
		echo $row['SerialCode'];
		echo $row['CampusId'];
		echo $row['DateRequestCreated'];
	}
}

?>