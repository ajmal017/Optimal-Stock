<?php

session_start();
$LoginCheck = false;
if (isset($_SESSION['login'])) {
  $LoginCheck = $_SESSION['login'];
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ai repport optimal-stock</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Exo+2|Nova+Flat|Quicksand" rel="stylesheet">

  <!--Bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Socalmedia -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Import of athour script  -->
  <script src="javaScript.js"></script>
  <link href="css.css" rel="stylesheet" type="text/css">

  <!-- Google charts -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Mon', 28, 38, 45 1071.56773732],
      ['Tue', 1089.63114208, 38, 55, 66],
      ['Wed', 1109.41516552, 55, 77, 80],
      ['Thu', 1112.55013356, 77, 66, 50],
      ['Fri', 1120.13070431, 66, 22, 15],
      // Treat first row as data as well.
    ], true);

    /*

    ['Mon', 1129.39319012, 28, 38, 45],
    ['Tue', 1127.76593418, 38, 55, 66],
    ['Wed', 1146.79301035, 55, 77, 80],
    ['Thu', 1162.34453615, 77, 66, 50],
    ['Fri', 1134.94373258, 66, 22, 15],
    ['Mon', 1120.93437755, 28, 38, 45],
    ['Tue', 1087.15030742, 38, 55, 66],
    ['Wed', 1100.39985025, 55, 77, 80],
    ['Thu', 1111.70166399, 77, 66, 50],
    ['Fri', 1119.66924452, 66, 22, 15],
    ['Mon', 1132.46304084, 28, 38, 45],
    ['Tue', 1147.636393, 38, 55, 66],
    ['Wed', 1178.78763904, 55, 77, 80],
    ['Thu', 1183.83220331, 77, 66, 50],
    ['Fri', 1156.39337461, 66, 22, 15],
    ['Mon', 1166.66737744, 28, 38, 45],
    ['Tue', 1168.53649395, 38, 55, 66],
    ['Wed', 1152.08752619, 55, 77, 80],
    ['Thu', 1117.47358077, 77, 66, 50],
    ['Fri', 1113.46780555, 66, 22, 15],
    ['Mon', 1110.80936149, 28, 38, 45],
    ['Tue', 1068.98947321, 38, 55, 66],
    ['Wed', 1040.74605045, 55, 77, 80],
    ['Thu', 1071.37798707, 77, 66, 50],
    ['Fri', 1020.57590867, 66, 22, 15]

    */

    var options = {
      legend:'none'
    };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
    </script>


  </head>

  <body>

    <!-- navbar-->
    <?php include_once "Navbar.php"; ?>

      <h3>AI repport</h3>

      <br>

      <div id="chart_div" style="width: 1000px; height: 300px;"></div>

      <br>
      <br>

    </div>

  </body>
</html>
