<?php

  
require '../api/dbcon.php';
    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE assessment='completed'");
    //$stmt->bind_param('s',$sId);
    //$sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($completed
                     );
    $stmt->fetch();
    //echo 'completed '. $completed;

    $stmt->close();
    $conn->close();

require '../api/dbcon.php';

    $stmt = $conn->prepare("select
                           Count(*)
                           FROM joborder WHERE assessment='notcompleted'");
    //$stmt->bind_param('s',$sId);
    //$sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($notCompleted
                     );

    $stmt->fetch();
   // echo 'notcompleted '. $notCompleted;

        $stmt->close();
    $conn->close();

    require '../api/dbcon.php';

    $stmt = $conn->prepare("select
                           SUM(ResponseTime)
                           FROM joborder WHERE statusId=6");
    //$stmt->bind_param('s',$sId);
    //$sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($ResponseTime
                     );

    $stmt->fetch();
   // echo 'notcompleted '. $notCompleted;

        $stmt->close();
    $conn->close();

    require '../api/dbcon.php';

    $stmt = $conn->prepare("select
                          SUM(AccuracyOfWork)
                          FROM joborder WHERE statusId=6");
    //$stmt->bind_param('s',$sId);
    //$sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($AccuracyOfWork
                     );

    $stmt->fetch();

    $stmt->close();
    $conn->close();

        require '../api/dbcon.php';

    $stmt = $conn->prepare("select
                          SUM(Courtesy)
                          FROM joborder WHERE statusId=6");
    //$stmt->bind_param('s',$sId);
    //$sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($Courtesy
                     );

    $stmt->fetch();

    $stmt->close();
    $conn->close();


        require '../api/dbcon.php';

    $stmt = $conn->prepare("select
                          SUM(QualityOfService)
                          FROM joborder WHERE statusId=6");
    //$stmt->bind_param('s',$sId);
    //$sId = isset($_GET['serial'])? $_GET['serial'] : '' ;
    $stmt->execute();
    $stmt->bind_result($QualityOfService
                     );

    $stmt->fetch();

    $stmt->close();
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chart</title>
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
        <div class="container">
            <div class="">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Bar Chart</strong>
                            </div>
                            <div class="card-body">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Line Chart</strong>
                            </div>
                            <div class="card-body">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Pie Chart</strong>
                            </div>
                            <div class="card-body">
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>




    <script src="js/mdb.js"></script>
    <script src="js/mdb.min.js"></script>
<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Response Time", "Accuracy of Work", "Courtesy", "Quality of Service"],
      datasets: [{
        label: 'Faculty Feedback',
        // data: [0, 0, 0, 0, 0, 0],
          data: [<?php echo $ResponseTime; ?>, <?php echo $AccuracyOfWork; ?>, <?php echo $Courtesy; ?>, <?php echo $QualityOfService; ?>],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          // 'rgba(153, 102, 255, 0.2)',
          // 'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          // 'rgba(153, 102, 255, 1)',
          // 'rgba(255, 159, 64, 1)'
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


</script>
<script>
  //line
  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
          label: "My First dataset",
          // data: [<?php echo $QualityOfService; ?>, <?php echo $QualityOfService; ?>,, <?php echo $QualityOfService; ?>,, <?php echo $QualityOfService; ?>, 0, 0, 0],
          data: [<?php echo $ResponseTime; ?>, <?php echo $AccuracyOfWork; ?>, <?php echo $Courtesy; ?>, <?php echo $QualityOfService; ?>, 0, 0, 0],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "My Second dataset",
          data: [0, 0, 0, 0, 0, 0, 0],
          backgroundColor: [
            'rgba(0, 137, 132, .2)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true
    }
  });

</script>
<script>
  //pie
  var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: ["Red", "Green"],
      datasets: [{
        data: [<?php echo $notCompleted;?>, <?php echo $completed;?>],
        backgroundColor: ["#F7464A", "#46BFBD"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
      }]
    },
    options: {
      responsive: true
    }
  });

</script>