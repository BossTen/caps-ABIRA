<?php
require  '../api/dbconNApi.php';
session_start();
if(isset($_SESSION['usr_type'])){
    //echo $_SESSION['usr_type'];
}else{    
    header('location: not-allowed.php');
    exit;
}

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
    $stmt=$conn->prepare("SELECT MAX( SerialCode ) AS max FROM joborder where SerialCode LIKE ?");
    $stmt->bind_param('s',$searchForLatestSerialCode);
    echo $searchForLatestSerialCode= $todaysSerialCode . '__';
    $stmt->execute();
    $stmt->bind_result($latestSerialCode);
    if($stmt->fetch()){
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
        echo $todaysSerialCode = $todaysSerialCode . $latestSerialNum;
    }else{
        $todaysSerialCode = $todaysSerialCode . '01';
    }
    

require '../api/dbcon.php';
        $stmt=$conn->prepare("SELECT Id FROM priority where Name = ?");
    $stmt->bind_param('s', $priority);
    $priority = $_POST["priority"];
    //echo $priority;
    $stmt->execute();
    $stmt->bind_result($priorityId);
    $stmt->fetch();

    
    

    echo  $priorityId;
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
                                               statusId
                                               ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );
                                                    
$stmt->bind_param('sssssssssss',
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
                    $statusId);

$airConditioning = isset($_POST['air-conditioning']) ? "checked" : '';
$masonryCarpentry = isset($_POST['masonary-carpentry']) ? "checked" : '';
$electrical = isset($_POST['Electrical']) ? "checked" : '';
$plumbing = isset($_POST['Plumbing']) ? "checked" : '';
$welding = isset($_POST['Welding']) ? "checked" : '';
$campus =  $_POST['campus'];
$priority =  $priorityId;
$requester = $_SESSION['usr_fullname'];
$userJobDescription = $_POST['user-job-description'];
//create serial code
$serialCode= $todaysSerialCode;
$statusId = '1';

$stmt->execute();
$stmt->close();
$conn->close();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Job Order Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>  
    <img src="logo.png" width="100%" height="20%">
    <br><br>

    <div class="container" style="margin-bottom: 5%;">
        <form action="" method="POST">
            <div class="card">
	<div class=" card-body">
        <h3>Good Day! </h3>
                            <div class="row ">
                        <h4 class="col-3"><b>Campus:</b>&nbsp;
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
            <input class="w3-check" type="checkbox" name="Air-conditioning"><label>Air-conditioning Works</label><br>
            <input class="w3-check" type="checkbox" name="Carpentry/Masonary"><label>Carpentry/Masonary Works</label><br>
            <input class="w3-check" type="checkbox" name="Electrical"><label>Electrical Works</label><br>
            <input class="w3-check" type="checkbox" name="Plumbing"><label>Plumbing Works</label><br>
            <input class="w3-check" type="checkbox" name="Welding"><label>Welding Works</label><br>
            <br>
            <div class="form-group"><textarea class="form-control" rows="15" name="user-job-description"></textarea></div>
            <h4 class="col-3"><b>Priority</b>&nbsp;
                <select class="form-control" name="priority" id="priority">
                    <option value="Low" id="Low" name="Low" class="w3-text-blue">Low</option>
                    <option value="Normal" name="Normal" id="Normal" class="w3-text-green">Normal</option>
                    <option value="Medium" name="Medium" id="Medium" class="w3-text-orange">Medium</option>
                    <option value="High" name="High" id="High" class="w3-text-red">High</option>
                </select>
            </h4>
        </div>

        <input name="submit" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="submit">
    </form>
    </div>
