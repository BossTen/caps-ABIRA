<?php
require 'dbcon.php';

//$sql = "SELECT Priority,SerialCode,CampusId,DateRequestCreated FROM joborder ";
$sql = "SELECT Id, Name FROM  priority";
$result = $conn->query($sql);
if($result->num_rows >0){
	while($row = $result->fetch_assoc()){
		/*echo $row['Priority'];
		echo $row['SerialCode'];
		echo $row['CampusId'];
		echo $row['DateRequestCreated'];*/
		echo $row['Id'];
		echo $row['Name'];
	}
}

?>