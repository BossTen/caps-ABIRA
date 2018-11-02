<?php

require 'dbcon.php';
	

if(isset($_POST['submitform'])){
$formattedtime = date('h:i A', strtotime($_POST['time']));
echo $formattedtime;exit;
}
?>

<form action="" method="post" >
<input type="time" name="time" />
<input type="submit" name="submitform">
</form>
?>
