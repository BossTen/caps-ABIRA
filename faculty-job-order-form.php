<?php
        require  '../api/dbcon.php';



        require 'testfaculty.php';

        if(isset($_POST['submit'])){

        date_default_timezone_set('Asia/Hong_Kong');
        $todaysSerialCode='';


            if($conn->connect_error){
                die("Connection Failed: " . $conn->connect_error);
            }
            /*GETTING LATEST SERIAL CODE LAST VALUE
                -query database
                -if no result is given/null then the assumption is the there are no serialcode created for that date
                -if there are no serial code then append int 01 else then add one to the latest value
            */
            $todaysSerialCode = substr($_SESSION['usr_campus'], 0, 2) . date('y') . date('m') . date('d');
            $stmt1=$conn->prepare("SELECT MAX( SerialCode ) AS max FROM joborder where SerialCode LIKE ?");
            $stmt1->bind_param('s',$searchForLatestSerialCode);
            $searchForLatestSerialCode= $todaysSerialCode . '__';
            $stmt1->execute();
            $stmt1->bind_result($latestSerialCode);
            if($stmt1->fetch()){
            // getting the last 2 digits of the serial code and adding 1
            $latestSerialNum = substr($latestSerialCode, 8,10)+1;
             /*
                in adding one for example
                04 + 1 the result would be 4
                so we need to append again a zero below
                so if the length of the value is less than or equal to one 
                we append a zero in front of it
             */
             if(strlen($latestSerialNum)<=1)
                $latestSerialNum = '0'.$latestSerialNum;
            //appending the latest number
                 $todaysSerialCode = $todaysSerialCode . $latestSerialNum;
            }else{
                $todaysSerialCode = $todaysSerialCode . '01';
            }

        $stmt1->close();
        $conn->close();
            

        require '../api/dbcon.php';
            $stmt2=$conn->prepare("SELECT Id FROM priority where Name = ?");
            $stmt2->bind_param('s', $priority);
            $priority = $_POST["priority"];
            //echo $priority;
            $stmt2->execute();
            $stmt2->bind_result($priorityId);
            $stmt2->fetch();

        $stmt2->close();
        $conn->close();
            
            

              $priorityId;
            //now inserting data
        require '../api/dbcon.php';
            
            $stmt=$conn->prepare("INSERT INTO joborder (location,
                                                       AirCondition,
                                                       CarpentryMasonry,
                                                       ElectricalWorks,
                                                       Plumbing,
                                                       Painting,
                                                       Welding,
                                                       Campus,
                                                       priorityId, 
                                                       RequestorName,
                                                       UserJobDescription,
                                                       SerialCode,
                                                       statusId,
                                                       DateRequestCreated,
                                                       NameOfOffice,
                                                       requestorDesignation
                                                       ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
                                                
        $stmt->bind_param('ssssssssssssssss',
                           $location,
                            $airConditioning,
                            $masonryCarpentry,
                            $electrical,
                            $plumbing,
                            $welding,
                            $painting,
                            $campus,
                            $priority,
                            $requester,
                            $userJobDescription,
                            $serialCode,
                            $statusId,
                            $DateRequestCreated,
                            $NameOfOffice,
                            $requestorDesignation);
        $location = $_POST['location'];
         $airConditioning = isset($_POST['AirCondition']) ? "checked" : '';
         $masonryCarpentry = isset($_POST['CarpentryMasonary']) ? "checked" : '';
         $electrical = isset($_POST['ElectricalWorks']) ? "checked" : '';
         $plumbing = isset($_POST['Plumbing']) ? "checked" : '';
         $welding = isset($_POST['Welding']) ? "checked" : '';
         $painting =  isset($_POST['Painting']) ? "checked" : '';
         echo $campus =   $_SESSION['usr_campus'];
        
         $priority =  $_POST['priority'];
         $requester = $_SESSION['usr_fullname'];
         $userJobDescription = $_POST['user-job-description'];
         $requestorDesignation = $_SESSION['usr_position'] ;
        //create serial code
         $serialCode= $todaysSerialCode;
         $statusId = 7 ;
         $DateRequestCreated = date('y-m-d');
         $NameOfOffice = isset($_SESSION['usr_nameOfOffice']) ? $_SESSION['usr_nameOfOffice'] : '';
         
        $stmt->execute();
        $stmt->close();
        $conn->close();
        if($stmt){
            echo "<script type='text/javascript'>
                        alert ('Successful insertion of data'); 
                        window.location.href='faculty-job-order-view.php';</script>";
            }else{
            echo "<script type='text/javascript'>
                        alert ('Not Successful insertion of data'); 
                        window.location.href='faculty-job-order-form.php';</script>";
            }
            
        }


        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Faculty Job Order Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <style>
      p {
        color: gray;
      }
  </style>

</head>

<body>
<?php

require 'navbar-faculty.php';
echo $_SESSION['usr_campus'];
?>

<br><br>

    <div class="container" style="margin-bottom: 5%; width: 80%">
        <form action="" method="POST">
          <h1>Good Day! What's the problem?</h1>
            <div class="card">
	<div class=" card-body  style="margin-left: 5%;">

         <div class="row">
                            <h4 class="col-12"><b>Priority</b>&nbsp;
                <select class="form-control" name="priority" id="priority" placeholder="asdasdasdsa" required>
                    <?php
                                require '../api/dbcon.php';
                                $sql = "SELECT Id, Name FROM priority";
                                $result = $conn->query($sql);
                                if($result->num_rows > 0){
                                  while ($row =  $result->fetch_assoc()) {
                                  //$selected = $row['Id']==$statusId ? 'selected' : '';
                                      
                              echo "<option value='".$row['Id']."' ". 'selected' .">".$row['Name']."</option>";

                                  }
                                }
                              ?>
                </select>
            </h4>
        </div>

            <h4><b>Services</b></h4>
            <div class="card">
          <div class="card-body">
            <input class="w3-check" type="checkbox" name="AirCondition" id="AirCondition"><label>Air-conditioning Works</label><br>
            <input class="w3-check" type="checkbox" name="CarpentryMasonary" id="CarpentryMasonary"><label>Carpentry/Masonary Works</label><br>
            <input class="w3-check" type="checkbox" name="ElectricalWorks" id="ElectricalWorks"><label>Electrical Works</label><br>
            <input class="w3-check" type="checkbox" name="Painting" id=""><label>Painting Works</label><br>
            <input class="w3-check" type="checkbox" name="Plumbing" id="Plumbing"><label>Plumbing Works</label><br>
            <input class="w3-check" type="checkbox" name="Welding" id="Welding"><label>Welding Works</label><br>
            <br>
          </div>
        </div>
        <br />
        <h4><b>Location:</b></h4>
            <input type="text" name="location" class="form-control" required placeholder="**Indicate the location of the issue for inspection**">
        <br>
        <h4><b>Description of Concern:</b>&nbsp
<div class="form-group col-12"><textarea class="form-control" rows="15" name="user-job-description" placeholder="**please make a detailed description of your concern based on your understanding of the situation**" required></textarea></div>

            
            <center>
                <h6 style="color: green;">I hereby to certify that the above information are true to my knowledge. </h6>
            </center>
        <input name="submit" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Submit">

    </form>
    </div>
