<?php
	session_start();
	//if not admin redirect to no permission page
if(isset($_SESSION['usr_type'])){
    //echo $_SESSION['usr_type'];
    if($_SESSION['usr_type']!='faculty'){
    header('location: not-allowed.php');
    exit;
    }
    

}else{    
    header('location: not-allowed.php');
    exit;
}
?>