<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pagination</title>
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
<div class="container">      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>SR-Code</th>
        <th>Name</th>
        <th>Year Level</th>
         <th>Program</th>
      </tr>
    </thead>
    <tbody>
<?php
// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'ssmis');


// define how many results you want per page
$results_per_page = 10;


// find out the number of results stored in database
$sql = "SELECT * FROM graph_data";
$result = mysqli_query ($con,$sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;


// retrieve selected results from database and display them on page
$sql='SELECT * FROM graph_data LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['sr_code'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['year_level'] . "</td>";
	echo "<td>" . $row['program'] . "</td>";
}
// display the links to the pages
?>
</tbody>
</table>
</div>
<div class="container">
	<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  	echo '<li class="page-item"><a class="page-link" href="pagination.php?page=' . $page . '">' . $page . '</a> ';

}
?>
</ul>
</nav>
</div>
</body>
</html>