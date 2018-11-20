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
            $todaysSerialCode = substr($_POST['campus'], 0, 2) . date('y') . date('m') . date('d');
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
            
            $stmt=$conn->prepare("INSERT INTO joborder (AirCondition,
                                                       CarpentryMasonry,
                                                       ElectricalWorks,
                                                       Plumbing,
                                                       Welding,
                                                       Campus,
                                                       priorityId, 
                                                       RequestorName,
                                                       UserJobDescription,
                                                       SerialCode,
                                                       statusId,
                                                       DateRequestCreated,
                                                       NameOfOffice
                                                       ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
            if($stmt){
            echo "<script type='text/javascript'>
                        alert ('Successful insertion of data'); 
                        window.location.href='faculty-job-order-form.php';</script>";
            }else{
            echo "<script type='text/javascript'>
                        alert ('Not Successful insertion of data'); 
                        window.location.href='faculty-job-order-form.php';</script>";
            }                                    
        $stmt->bind_param('sssssssssssss',
                            $airConditioning,
                            $masonryCarpentry,
                            $electrical,
                            $plumbing,
                            $welding,
                            $campus,
                            $priority,
                            $requester,
                            $userJobDescription,
                            $serialCode,
                            $statusId,
                            $DateRequestCreated,
                            $NameOfOffice);

         $airConditioning = isset($_POST['AirCondition']) ? "checked" : '';
         $masonryCarpentry = isset($_POST['CarpentryMasonary']) ? "checked" : '';
         $electrical = isset($_POST['ElectricalWorks']) ? "checked" : '';
         $plumbing = isset($_POST['Plumbing']) ? "checked" : '';
         $welding = isset($_POST['Welding']) ? "checked" : '';
         $campus =  $_POST['campus'];
         $priority =  $priorityId;
         $requester = $_SESSION['usr_fullname'];
         $userJobDescription = $_POST['user-job-description'];
        //create serial code
         $serialCode= $todaysSerialCode;
         $statusId = 7 ;
         $DateRequestCreated = date('y-m-d');
         $NameOfOffice = isset($_POST['college']) ? $_POST['college'] : '';
        $stmt->execute();
        $stmt->close();
        $conn->close();
        }


        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Faculty Job Order Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/navbar.css">
   <script src="js/search.js"></script>
</head>

<body>
<?php

require 'navbar-faculty.php';

?>

<br><br>

    <div class="container" style="margin-bottom: 5%; width: 80%">
        <form action="" method="POST">
          <h1>Good Day! What's the problem?</h1>
            <div class="card">
	<div class=" card-body  style="margin-left: 5%;">
        <div class="row ">
                        <h4 class="col-12"><b>Campus:</b>&nbsp;
                             <select class="form-control form-control" name="campus" id="campus">
                                <?php
                                require '../api/apiOnly.php';
                                  $campuses = json_decode($api->fetch_campuses(),true);
                                  foreach ($campuses as $campus) {
                                   echo "<option value='".$campus['code']."'>".$campus['code']."</option>";

                                  }

                              ?>
                            </select>
                          </div>
        <div class="row ">
        <!--COLLEGES-->
                             <h4 class="col-12"><b>Department:</b>&nbsp;
                             <select class="form-control form-control" name="college" id="college">
                                <option value="CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.">CEAFA (College of Engineering, Architecture  & Fine Arts) Bldg.
</option>
                              <option value="CICS (College of Informatics & Computing Sciences) Bldg.">CICS (College of Informatics & Computing Sciences) Bldg.
</option>
                              <option value="CIT (College of Industrial Technology) Bldg.">CIT (College of Industrial Technology) Bldg.</option>
                              <option value="RG RECTO Bldg. (RGR)">RG RECTO Bldg. (RGR)</option>
                              <option value="STUDENT Center Bldg. (SSC)">STUDENT Center Bldg. (SSC)</option>
                              <option value="FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office">FMSO/GSO Office, ME (Boiler room) & OSAS/GUIDANCE Office
</option>
                              <option value="RSFIHM (School of Food & International Hotel Management) Bldg.">RSFIHM (School of Food & International Hotel Management) Bldg.</option>
                              <option value="Gymnasium Area">Gymnasium Area</option>
                              <option value="Food Innovation Center Building">Food Innovation Center Building </option>
                            </select>
                          </div>
                            <!--COLLEGES-->
         <div class="row">
                            <h4 class="col-12"><b>Priority</b>&nbsp;
                <select class="form-control" name="priority" id="priority">
                    <option value="Low" id="Low" name="Low" class="w3-text-blue">Low</option>
                    <option value="Normal" name="Normal" id="Normal" class="w3-text-green">Normal</option>
                    <option value="Medium" name="Medium" id="Medium" class="w3-text-orange">Medium</option>
                    <option value="High" name="High" id="High" class="w3-text-red">High</option>
                </select>
            </h4>
        </div>

            <h4><b>Services</b></h4>
            <div class="card">
          <div class="card-body">
            <input class="w3-check" type="checkbox" name="AirCondition" id="AirCondition"><label>Air-conditioning Works</label><br>
            <input class="w3-check" type="checkbox" name="CarpentryMasonary" id="CarpentryMasonary"><label>Carpentry/Masonary Works</label><br>
            <input class="w3-check" type="checkbox" name="ElectricalWorks" id="ElectricalWorks"><label>Electrical Works</label><br>
            <input class="w3-check" type="checkbox" name="Plumbing" id="Plumbing"><label>Plumbing Works</label><br>
            <input class="w3-check" type="checkbox" name="Welding" id="Welding"><label>Welding Works</label><br>
            <br>
          </div>
        </div>
        <br />
        <h4><b>Report Description:</b>&nbsp;
            <div class="form-group col-12"><textarea class="form-control" rows="15" name="user-job-description" required=""></textarea></div>
            

        <input name="submit" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Submit">

    </form>
    </div>
