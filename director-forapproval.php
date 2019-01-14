<!DOCTYPE html>
<html lang="en">

<head>
    <title class="no-print">Director For Approval</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/custom.css">

   <style>
p {
  text-indent: 50px;
}
</style>

</head>

<body>
    <?php
require 'navbar.php';
?>

<br><br>

<div class="container" style="margin-bottom: 3%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body" style="margin-left: 3%;margin-right: 3%;">
          <h6 class="w3-text-red">Job Order Form - Inspection Order</h6>
          <div class="row">
            <p class="col-6">Serial: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-6">Priority: <input type="text" name="" class="form-control col-12" id="" value=""></p>
          </div>
          <div class="row">
            <p class="col-6">Status: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-6">Date: <input type="text" name="" class="form-control col-12" id="" value=""></p>
          </div>
          <div class="row">
            <p class="col-6">Campus: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-6">Name of Office: <input type="text" name="" class="form-control col-12" id="" value=""></p>
          </div>
          <h6 class="w3-text-red">Job Order Request</h6>
          <div class="row">
            <p class="col-12">Works: <input type="text" name="" class="form-control col-12" id="" value=""></p>
          </div>
          <div class="row">
            <p>Inspection Report:&nbsp;</p>
            <textarea name="" class="form-control col-12"  id="" placeholder="" rows="5" cols="100" required></textarea>
          </div>
          <br>
          <div class="row">
            <p>Job Recommendation:&nbsp;</p>
            <textarea name="" class="form-control col-12" id="" placeholder="" rows="5" cols="100" required></textarea>
          </div>
          <br>
          <div class="row">
            <p>Materials Needed:&nbsp;</p>
            <textarea name="" class="form-control col-12" id="" placeholder="" rows="5" cols="100" required></textarea>
          </div>
          <br>
          <div class="row">
            <p class="col-4">Requested by: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-4">Designation: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-4">Date: <input type="date" class="form-control col-12" name="" value=""></p>
          </div>
          <br>
          <div class="row">
            <p class="col-4">Inspected by: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-4">Designation: <input type="text" name="" class="form-control col-12" id="" value=""></p>
            <p class="col-4">Date: <input type="date" class="form-control col-12" name="" value=""></p>
          </div>

          <!--footer-->
          <div id="btn-container" class="container w3-center" style="margin-bottom: 5%">
            <input name="approve" style="padding:20px;" class="btn btn-success" type="submit" value="Approve">
          </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>

