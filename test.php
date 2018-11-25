<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
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
<table id="results" width="360" border="1">
    <thead>
      <tr>
        <th scope="col" width="120">Date Created</th>
        <th scope="col" width="120">Name</th>
        <th scope="col" width="120">Tests</th>
      </tr>
    </thead>
    <tbody>
       <tr>
        <td><a href='job-order-ongoing.php?serial=SANDKJANKDSA'>Test Name 2</td>
        <td>04-04-2015</td>
        <td>1</td>
      </tr>
      <tr>
        <td><a href='job-order-ongoing.php?serial=SANDKJANKDSA'>Test Name 5</td>
        <td>09-08-2017</td>
        <td>2</td>
      </tr>
      <tr>
        <td><a href='job-order-ongoing.php?serial=SANDKJANKDSA'>Test Name 4</td>
        <td>07-08-2015</td>
        <td>3</td>
      </tr>
      <tr>
        <td><a href='job-order-ongoing.php?serial=SANDKJANKDSA'>Test Name 3</td>
        <td>05-04-2015</td>
        <td>4</td>
      </tr>
      <tr>
        <td><a href='job-order-ongoing.php?serial=SANDKJANKDSA'>Test Name 6</td>
        <td>12-08-2017</td>
        <td>5</td>
      </tr>
      <tr>
        <td><a href='job-order-ongoing.php?serial=SANDKJANKDSA'>Test Name 1</td>
        <td>21-03-2014</td>
        <td>6</td>
      </tr>
    </tbody>
</table>
<button>Sort by date</button>
</body>

<!-- <script>
function convertDate(d) {
  var p = d.split("-");
  return +(p[2]+p[1]+p[0]);
}


  var tbody = document.querySelector("#results tbody");
  // get trs as array for ease of use
  var rows = [].slice.call(tbody.querySelectorAll("tr"));
  
  rows.sort(function(a,b) {
    return convertDate(b.cells[1].innerHTML) - convertDate(a.cells[1].innerHTML);
  });
  
  rows.forEach(function(v) {
    tbody.appendChild(v); // note that .appendChild() *moves* elements
  });


// document.querySelector("button").addEventListener("click", sortByDate);
</script> -->