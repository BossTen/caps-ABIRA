<?php

require 'dbcon.php';
	
	// $sql = "SELECT Id, Name FROM capuses";
	// $result = $conn->query($sql);
	// if($result->num_rows > 0){

	// 	while ($row =  $result->fetch_assoc()) {
	// 		echo "id:" . $row["Id"] . "Name: " . $row["Name"];
	// 	}
	// }else{
	// 		//create a log and display a custom error message
	// 	echo "error";
	// 	}
?>
	<html><body>
<select class="form-control form-control" name="campus" id="campus">
                              <?php
                                $sql = "SELECT Id, Name FROM capuses";
                                $result = $conn->query($sql);
        if($result->num_rows > 0){

          while ($row =  $result->fetch_assoc()) {
            echo "<option value='".$row['Id']."'>".$row['Name']."</option>";
          }
        }
      ?>



                       
                            </select>
                        </body>
                        </html>


	



