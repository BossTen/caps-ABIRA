<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inventory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<?php
require'navbar.php';

?>

<!--body-->
<br>
<div class="container">
   <div class="form-row text-center">
      <div class="col-12"><h1 class="w3-text-red">Inventory</h1></div>
   </div>
</div>



<div class="container">
  <div class="table-responsive">     
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
    <tr>  
          <td><b>Plywood</b></td>
          <td><b>Screw</b></td>
          <td><b>500 pcs</b></td>
          </tr>
        </tbody>
      </table>

<div class="container ">
       <div class="float-right"><a href=""> <button type="button" class="btn btn-success">Add</button></a>
      </div>   
      </div>