<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php
require 'testfaculty.php';
require 'navbar-faculty.php';
require '../api/dbcon.php';

 if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
             session_start();
    }  

if(isset($_GET['id'])){
      $stmt = $conn->prepare("SELECT m.id, m.serialCode, m.facultyId, m.adminId, m.message, a.NameOfOffice, a.campus, a.Department, a.designation FROM messages as m INNER JOIN accounts AS a ON m.facultyId = a.Id WHERE a.Campus = ? AND m.id = ?");
      $stmt->bind_param('si', $sCampus, $sId);
      $sCampus = $_SESSION['usr_campus'];
      $sId = $_GET['id'];
      $stmt->execute();
      $stmt->bind_result($mId, $mSCode, $mFId, $mAId, $mMessage, $aNameOfOffice, $aCampus, $aDepartment, $aDesignation);
      $stmt->fetch();
      $stmt->close();
      $conn->close();
  echo "good";

}else{
//redirect back to notices
  echo "not so good";
}
?>
<br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
        <div class="card card-signin my-7">
          <div class="card-body">
              <form id="form-register" action="admin_message.php" method="POST">
            <center>

            <h1 class="w3-text-red">Send Message</h1>
          </center>
            <h5 class="col-12"><b>Faculty Message :</b>
  <textarea class="form-control" rows="5" id="f-message" readonly><?php echo $mMessage; ?></textarea>
              <input type="hidden" id="" name="mId" value="<?php echo $mId; ?>">
              <input type="hidden" id="" name="mAId" value="<?php echo $mAId; ?>">
              <input type="hidden" id="" name="mSCode" value="<?php echo $mSCode; ?>">

            <h5 class="col-12"><b>Department:</b>&nbsp;
              <input type="text" name="username" class="form-control col-12" id="" placeholder="" value="<?php echo $aDepartment; ?>" readonly>
                     
            <h5 class="col-12"><b>Name Of Office: </b>&nbsp;
                  <input type="text" name="nameofoffice" class="form-control col-12" id="nameofoffice" placeholder="Name of Office" value="<?php echo $aNameOfOffice; ?>" readonly>
            <h4 class="col-12"><b>Designation: </b>&nbsp;
                   <input type="text" name="username" class="form-control col-12" id="" placeholder="" value="<?php echo $aDesignation; ?>" readonly> 

            <div class="form-group">
  <label for="comment">Message:</label>
  <textarea class="form-control" rows="5" id="a-message" name="message" required></textarea>
</div>  
            <center>
            <input name="submit" style="padding:20px;" id='save' class="btn btn-success col-md-4" type="submit" value="Send">
          </form>

            <script>


//                 $("#save").click(function() {

 
//     // no more clicks until timer expires
//     $(this).attr("disabled", "disabled");

//     // do whatever you want on the click here
//                     var data = $("#form-register").serialize();
//   $.ajax({
    
//          data: data,
//          type: "post",
//          url: "backend/admin_message.php",
//          success: function(data){
//               alert("Account Created
//                 ");
             
//          }
// });
//     // set timer to re-enable the button 
//     setTimeout(function() {
//         $("#save").removeAttr("disabled");
//     }, 5 *  1000);
// });
            </script>
