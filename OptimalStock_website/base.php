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
    <title>optimal-stock</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Exo+2|Nova+Flat|Quicksand" rel="stylesheet">

  <!-- Botsratp -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Google graph -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Mon', 20, 28, 38, 45],
    ['Tue', 31, 38, 55, 66],
    ['Wed', 50, 55, 77, 80],
    ['Thu', 77, 77, 66, 50],
    ['Fri', 68, 66, 22, 15],
    ['Mon', 20, 28, 38, 45],
    ['Tue', 31, 38, 55, 66],
    ['Wed', 50, 55, 77, 80],
    ['Thu', 77, 77, 66, 50],
    ['Fri', 68, 66, 22, 15],
    ['Mon', 20, 28, 38, 45],
    ['Tue', 31, 38, 55, 66],
    ['Wed', 50, 55, 77, 80],
    ['Thu', 77, 77, 66, 50],
    ['Fri', 68, 66, 22, 15]

    // Treat first row as data as well.
  ], true);

  var options = {
    legend:'none'
  };

  var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
  var chart2 = new google.visualization.CandlestickChart(document.getElementById('chart_div_2'));
  var chart3 = new google.visualization.CandlestickChart(document.getElementById('chart_div_3'));
  chart.draw(data, options);
  chart2.draw(data, options);
  chart3.draw(data, options);


  }
  </script>



  <!--bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--Import of athour script  -->
  <script src="javaScript.js"></script>
  <link href="css.css" rel="stylesheet" type="text/css">

  </head>

  <body style="background-color: #d9d9d9;">

    <!-- navbar-->
    <?php include_once "Navbar.php"; ?>

  <div>
    <div class="LeftSidePanel">
        <p>Left Side panel</p>
        <h3>Company name 1</h3>
        <div id="chart_div" style="width: 100%; height: 40%;"></div>
        <h3>Company name 2</h3>
        <div id="chart_div_2" style="width: 100%; height: 40%;"></div>
        <h3>Company name 3</h3>
        <div id="chart_div_3" style="width: 100%; height: 40%;"></div>
    </div>
  </div>


<div class="rightPanel">
  <p>Main panel</p>


    <!-- choose industris -->
    <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Industris</button>
      <div class="dropdown-menu dropdown-menu-right">
            <form action="/action_page.php" method="get">
              <p><b>Defrent industris </b></p>
              <input type="checkbox" name="vehicle" value="Bike" checked="checked">Financials<br>
              <input type="checkbox" name="vehicle" value="Utilities">Utilities<br>
              <input type="checkbox" name="vehicle" value="Consumer Discretionary">Consumer Discretionary<br>
              <input type="checkbox" name="vehicle" value="Consumer Staples">Consumer Staples<br>
              <input type="checkbox" name="vehicle" value="Energy">Energy<br>
              <input type="checkbox" name="vehicle" value="Health Care">Health Care<br>
              <input type="checkbox" name="vehicle" value="Industrials">Industrials<br>
              <input type="checkbox" name="vehicle" value="Technology">Technology<br>
              <input type="checkbox" name="vehicle" value="Telecom">Telecom<br>
              <input type="checkbox" name="vehicle" value="Materials">Materials<br>

              <input type="submit" value="Submit" style="background-color: #ff8000;border-style: none; color:white; height: 80%; width: 18%; font-family: 'Exo 2'">
      </div>
    </div>

          <div id="LiveStockQuotes">
              <h4 class="h2II">Company current stock value</h4>
              <script src="http://markets.financialcontent.com/stocks?Module=snapshot&Ticker=$COMP+$SPX+GOOG+FB+MCD&Output=JS">
              </script>
          </div>

          <br>







</div>


    </div>




  </body>
</html>
