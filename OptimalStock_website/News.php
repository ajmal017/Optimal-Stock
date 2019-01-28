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
    <title>News optimal-stock</title>
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

  </head>

  <body>

    <!-- navbar-->
    <?php include_once "Navbar.php"; ?>

    <!-- News display-->
    <div class="" style="min-height: 5%; position: relative; padding: 5% 10%">
      <h3 class="breadTextHeadLine">The latest in business, markets, U.S. and global news. <b>(LIVE)</b></h3>
      <hr style="border-width: 4px;">
      <iframe width="1000" height="563" src="https://www.youtube.com/embed/Ga3maNZ0x0w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
      <h4 style="font-family: 'Nova Flat', cursive;">Stream information</h4>
      <p><b>Bloomberg TV</b> brings you the latest in business, markets, U.S. and global news.<br>
        C-suite executives and our in-house experts provide in-depth analysis on geopolitical events, the latest economic data, market moves, the U.S.<br>
        presidential campaign, Brexit, international politics (and more.) Watch Bloomberg on <a href="http://www.bloomberg.com">bloomberg.com</a>, on the Bloomberg Mobile App for iOS and Android, Bloomberg App for Apple TV, Roku, Samsung, Amazon Fire and Google. </p>

      <br>
      <hr style="border-width: 4px;">
      <br>



      </div>

      <br>
      <br>

    </div>

  </body>
</html>
lo
