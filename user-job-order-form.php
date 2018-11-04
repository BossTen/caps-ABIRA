<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Job Order Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img src="logo.png" width="100%" height="20%">
<br><br>

<div class="container" style="margin-bottom: 5%;">
<div class="card"">
	<div class="card-body">
		<input class="w3-check" type="checkbox" name="Air-conditioning Works"><label>Air-conditioning Works</label><br>
		<input class="w3-check" type="checkbox" name="Carpentry/Masonary Works"><label>Carpentry/Masonary Works</label><br>
		<input class="w3-check" type="checkbox" name="Electrical Works"><label>Electrical Works</label><br>
		<input class="w3-check" type="checkbox" name="Plumbing Works"><label>Plumbing Works</label><br>
		<input class="w3-check" type="checkbox" name="Welding Works"><label>Welding Works</label><br>
		<br>
    <div class="form-group"><textarea class="form-control" rows="15" name="user-textarea"></textarea></div>
	<h4 class="col-3"><b>Priority</b>&nbsp;
                <select class="form-control" name="priority" id="priority">
                  <option value="High" id="High" class="w3-text-red">High</option>
                  <option value="Medium" id="Medium" class="w3-text-orange">Medium</option>
                  <option value="Normal" id="Normal" class="w3-text-green">Normal</option>
                  <option value="Low" id="Low" class="w3-text-blue">Low</option>
                  
                </select>
            </h4>
        </div>

<input name ="jos" style="padding:20px;" class="btn btn-success offset-md-4 col-md-4" type="submit" value="Submit">
</div>