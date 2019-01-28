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

  <!-- Socalmedia -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--Import of athour script  -->
  <script src="javaScript.js"></script>
  <link href="css.css" rel="stylesheet" type="text/css">

  </head>

  <body>
    <!-- navbar-->
    <?php include_once "Navbar.php"; ?>

    <div id="StartImg">
      <div class="main">
        <div class="mainOne">
            <h2>Optimal Stock</h2>
            <p id="main-text">We can help you choose what stock to buy.</p>
            <p id="main-text">The way we choose stock is through machine learning.</p>
            <a href="Portfolio.php"><button type="button" id="mainBut" class="btn btn-warning">Start</button></a>
        </div>
            <!-- http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Graph-Magnifier-icon.png -->
            <img src="http://pimg.p30download.com/APK_IMG/r/com.rk.worldstock/icon/icon_5_small.png" alt="icon" id="IconImgForMain">
      </div>
    </div>

    <br>
    <br>

    <!-- choose teer -->

    <!-- High -->
    <div style="position: relative;">
      <div id="ExtremImg">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Emoji_u1f4b0.svg/1024px-Emoji_u1f4b0.svg.png" alt="Extream" id="moneyImg" style="width: 40%;">
        <p style="font-size: 130%">High risk high reward</p>
        <button type="button" id="chouseBut" class="btn btn-info">Extreme</button>
      </div>
      <!-- Low -->
      <div id="simpleMoneyImg">
        <!-- https://icon-icons.com/icons2/550/PNG/512/business-color_coins_icon-icons.com_53461.png -->
        <img src="https://robsobers.com/wp-content/uploads/2013/08/coins.png" alt="simpleMoneyImg" id="moneyImg">
        <p style="font-size: 130%">Slow and steady</p>
        <button type="button" id="chouseBut" class="btn btn-info">secure</button>
      </div>
      <!-- Mid -->
      <div id="MidMoneyImg">
        <img src="http://www.civiccanopy.org/wp-content/uploads/sites/9/2017/06/wallet.png" alt="medium money" id="moneyImg">
        <p style="font-size: 130%">Growing steady</p>
        <button type="button" id="chouseBut" class="btn btn-info">Simple</button>
      </div>
    </div>

    <br>
    <br>

    <!-- basics of the stock market -->

    <div class="" style="min-height: 440px; position: relative; padding: 410px 300px">
      <hr style="border-width: 4px;">
      <br>
      <h3 class="breadTextHeadLine">Do you now how the stock exchange works?</h3>
      <br>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/F3QpgXBtDeo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
      <br>
      <h4 style="font-family: 'Nova Flat', cursive;">Video information</h4>
      <p>
        Why are there stocks at all?<br>
        Everyday in the news we hear about the stock exchange, stocks and money moving around the globe.
        Still, a lot of people don't have an idea why we have stock markets at all, because the topic is usually very dry.
        We made a short video about the basics of the stock exchanges. With robots.
        Robots are kewl! Short videos, explaining things.<br>
        For example Evolution, the Universe, the Stock Market or controversial topics like Fracking.
        Because we love science.<br>
        We would love to interact more with you, our viewers to figure out what topics you want to see.
        If you have a suggestion for future videos or feedback, drop us a line! :) <br>
        We're a bunch of Information designers from munich, visit us on facebook or behance to say hi!
        <br> <a href="https://www.facebook.com/Kurzgesagt">facebook.com/Kurzgesagt</a>
        and <a href="https://www.behance.net/kurzgesagt">behance.net/kurzgesagt</a>.
      </p>
      </div>

      <br>
      <br>
      <!-- Socalmedia -->
      <div class="">
        <a href="#" class="fa fa-facebook"></a>
        <a href="https://twitter.com/optimal_stock" class="fa fa-twitter"></a>
        <a href="https://plus.google.com/u/0/115932849171117281867" class="fa fa-google"></a>
      </div>

  </body>
</html>


<!--

color theme

<canvas id="one" width="300" height="300" style="background-color: #1e3f62;"></canvas>
<canvas id="one" width="300" height="300" style="background-color: #ff8533;"></canvas>
<canvas id="one" width="300" height="300" style="background-color: #f2f2f2;"></canvas>
<canvas id="one" width="300" height="300" style="background-color: #ff4d4d;"></canvas>
<canvas id="one" width="300" height="300" style="background-color: #00cc99;"></canvas>


_______________________

old stuff



-->
