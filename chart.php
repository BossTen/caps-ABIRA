<?php

  
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE ResponseTime=5");

    $stmt->execute();
    $stmt->bind_result($R5
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE ResponseTime=4");

  $stmt->execute();
  $stmt->bind_result($R4
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();

require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE ResponseTime=3");

    $stmt->execute();
    $stmt->bind_result($R3
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE ResponseTime=2");

  $stmt->execute();
  $stmt->bind_result($R2
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE ResponseTime=1");

    $stmt->execute();
    $stmt->bind_result($R1
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();


  
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE AccuracyOfWork=5");

    $stmt->execute();
    $stmt->bind_result($a5
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE AccuracyOfWork=4");

  $stmt->execute();
  $stmt->bind_result($a4
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();

require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE AccuracyOfWork=3");

    $stmt->execute();
    $stmt->bind_result($a3
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE AccuracyOfWork=2");

  $stmt->execute();
  $stmt->bind_result($a2
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE AccuracyOfWork=1");

    $stmt->execute();
    $stmt->bind_result($a1
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

// courtesy



require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE Courtesy=5");

    $stmt->execute();
    $stmt->bind_result($c5
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE Courtesy=4");

  $stmt->execute();
  $stmt->bind_result($c4
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();

require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE Courtesy=3");

    $stmt->execute();
    $stmt->bind_result($c3
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE Courtesy=2");

  $stmt->execute();
  $stmt->bind_result($c2
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE Courtesy=1");

    $stmt->execute();
    $stmt->bind_result($c1
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

// Quality Service Chart


require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE QualityOfService=5");

    $stmt->execute();
    $stmt->bind_result($q5
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE QualityOfService=4");

  $stmt->execute();
  $stmt->bind_result($q4
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();

require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE QualityOfService=3");

    $stmt->execute();
    $stmt->bind_result($q3
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();

require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE QualityOfService=2");

  $stmt->execute();
  $stmt->bind_result($q2
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE QualityOfService=1");

    $stmt->execute();
    $stmt->bind_result($q1
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();


    require '../api/dbcon.php';
  $stmt = $conn->prepare("select
                         Count(*)
                         FROM joborder WHERE Assessment='completed'");

  $stmt->execute();
  $stmt->bind_result($completed
                   );
  $stmt->fetch();
  $stmt->close();
  $conn->close();

require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE Assessment='notcompleted'");

    $stmt->execute();
    $stmt->bind_result($notcompleted
                     );
    $stmt->fetch();
    $stmt->close();
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GSO Performance View</title>
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
<?php
require 'navbar.php';
?>
<br><br>

<div class="container" style="margin-bottom: 3%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body" style="margin-left: 3%;margin-right: 3%;">

          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <strong>Response Time Chart</strong>
                </div>
                <div class="card-body">
                  <canvas id="responsetime"></canvas>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <strong>Accuracy of Work Chart</strong>
                </div>
                <div class="card-body">
                   <canvas id="accuracy"></canvas>
                </div>
              </div>
            </div>
            <br>
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <strong>Courtesy Chart</strong>
                </div>
                <div class="card-body">
                  <canvas id="courtesy"></canvas>
                </div>
              </div>
          </div>
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <strong>Quality Service Chart</strong>
                </div>
                <div class="card-body">
                  <canvas id="quality"></canvas>
                </div>
              </div>
            </div>
          </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<center>
<div class="container" style="margin-bottom: 3%;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-12">
        <div class="card-body" style="margin-left: 3%;">
          <div class="row w3-center">
            <div class="col-lg-10">
              <div class="card">
                <div class="card-header">
                  <strong>Compliance to scheduled project duration</strong>
                </div>
                <div class="card-body">
                  <canvas id="pieChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</center>





    <script src="js/mdb.js"></script>
    <script src="js/mdb.min.js"></script>

<script>
  //bar

  //ResponseTime
  var R5 = <?php echo $R5; ?> ;
  var R4 = <?php echo $R4; ?> ;
  var R3 = <?php echo $R3; ?> ;
  var R2 = <?php echo $R2; ?> ;
  var R1 = <?php echo $R1; ?> ;
  var rLabel = "Response Evaluation";
  //ResponseTime 

  // 
  var ctxB = document.getElementById("responsetime").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["Outstanding", "Very Satisfactory", "Satisfactory", "Unsatisfactory", "Poor"],
      datasets: [{
        label: rLabel,
        data: [R5, R4, R3, R2, R1],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 20 6, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });




  //AccuracyOfWork
  var a5 = <?php echo $a5; ?> ;
  var a4 = <?php echo $a4; ?> ;
  var a3 = <?php echo $a3; ?> ;
  var a2 = <?php echo $a2; ?> ;
  var a1 = <?php echo $a1; ?> ;
  var aLabel = "Accuracy Of Work Evaluation";
  //AccuracyOfWork

  // 
  var ctxB = document.getElementById("accuracy").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["Outstanding", "Very Satisfactory", "Satisfactory", "Unsatisfactory", "Poor"],
      datasets: [{
        label: aLabel,
        data: [a5, a4, a3, a2, a1],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 20 6, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


  //AccuracyOfWork
  var c5 = <?php echo $c5; ?> ;
  var c4 = <?php echo $c4; ?> ;
  var c3 = <?php echo $c3; ?> ;
  var c2 = <?php echo $c2; ?> ;
  var c1 = <?php echo $c1; ?> ;
  var cLabel = "Courtesy";
  //AccuracyOfWork

  // 
  var ctxB = document.getElementById("courtesy").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["Outstanding", "Very Satisfactory", "Satisfactory", "Unsatisfactory", "Poor"],
      datasets: [{
        label: cLabel,
        data: [c5, c4, c3, c2, c1],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 20 6, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


  //Quality
  var q5 = <?php echo $q5; ?> ;
  var q4 = <?php echo $q4; ?> ;
  var q3 = <?php echo $q3; ?> ;
  var q2 = <?php echo $q2; ?> ;
  var q1 = <?php echo $q1; ?> ;
  var cLabel = "Quality Service";
  //Quality

  // 
  var ctxB = document.getElementById("quality").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: ["Outstanding", "Very Satisfactory", "Satisfactory", "Unsatisfactory", "Poor"],
      datasets: [{
        label: cLabel,
        data: [q5, q4, q3, q2, q1],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 20 6, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


  var completed = <?php echo $completed; ?> ;
  var not_completed = <?php echo $notcompleted; ?> ;
  //pie
  var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: ["Not Completed on time "+not_completed, "Completed on time "+completed],
      datasets: [{
        data: [not_completed, completed],
        backgroundColor: ["#F7464A", "#46BFBD"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
      }]
    },
    options: {
      responsive: true
    }
  });




</script>

