<?php
      require 'dbcon.php';
      $stmt =$conn->prepare("SELECT Name FROM capuses WHERE Id = ?");

      $stmt->bind_param("i",$campusId);
      $campusId = '3';

	$stmt->execute();
	$stmt->bind_result($Name);
	$stmt->close();
	$conn->close();
	echo $Name;


                                
?>