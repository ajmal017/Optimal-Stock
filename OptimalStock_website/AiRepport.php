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
          ['Year', 'Sales'],
          ['2004',  1000],
          ['2005',  1170],
          ['2006',  660],
          ['2007',  1030]
        ]);

        var options = {
          title: 'Company stock 1',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>



  </head>

  <body>

    <!-- navbar-->
    <?php include_once "Navbar.php"; ?>

      <h3>AI repport</h3>

      <br>
      <?php

      $YesterDayDate = date('d.m.Y',strtotime("-1 days"));
      echo $YesterDayDate;

      ?>

      <br>

      <div id="curve_chart" style="width: 900px; height: 500px"></div>

      <br>
      <br>

    </div>

  </body>
</html>
