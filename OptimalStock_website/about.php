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

    <div class="" style="min-height: 5%; position: relative; padding: 5% 10%">
      <div>
        <br>
        <br>
      <!-- bread text -->
      <h3 class="breadTextHeadLine">Welcome to Optimal Stock.</h3>
      <p class="breadText">We can help you choose what stock to buy.</p>
      <p class="breadText">The way we choose stock is through machine learning.</p>
      <p class="breadText">This means that we <b>does not let you buy or sell stock</b> ate Optimal Stock. To day people don't trade on the stock market.
        To day computer makes the trades. But for the normal day Joe Blow that is not able to have the machines to trade for theme and to make predictions.
      </p>
      <p class="breadText">
        But what if you could get a leg up to everyday Joe Blow. Here is were Optimal Stock comes and is able to help you.
      </p>
      <p class="breadText">
        We offer tips on what stock to buy soe that you are able to maximise your profit on your stocks.
        There is always risk when you buy stocks but that is way.
        We offer three different risk levels soe that you can put your money ate the risk level that your comfortable with.
      </p>
      <p>let's get started!</p>
      <br>
      <button type="button" id="startButII" class="btn btn-warning"><a href="base.html"></a>Start</button>
      <br>
      <br>

      <!-- Socalmedia -->
      <div class="">
        <a href="#" class="fa fa-facebook"></a>
        <a href="https://twitter.com/optimal_stock" class="fa fa-twitter"></a>
        <a href="https://plus.google.com/u/0/115932849171117281867" class="fa fa-google"></a>
      </div>


      <br>
      <hr style="border-width: 4px;">
      <br>
      <!-- info for user about the stock market -->
      <h3 class="breadTextHeadLine">Whant to now more before you get started.</h3>
      <p class="breadText">We are able to make aour predictions with the help of machine learning.</p>
      <p class="breadText">Well what is machine learning? Machine learning is algorithms that give computer the ability to learn from data,and then make prediction and decisions.</p>
        <br>
      <h3 class="breadTextHeadLine">who am I?</h3>
      <p class="breadText">I am from stocholm täby. I am currently in high school studing info-media engineering at Åva Gymnasium. This website was created for my webserver programing corse. </p>
      <h3 class="breadTextHeadLine">In this project.</h3>
      <p class="breadText"> The stock predictions are made form machine learning AI. I have used quandl (<a href="https://www.quandl.com/search?query=">www.quandl.com</a>) for getting historical stock data. </p>

      <br>
      <p>Rekommendationerna revideras fortlöpande av Handelsbankens analytiker samt bevakas av ledningen för analysavdelningen samt uppdateras och/eller ses över regelbundet. Utförlig information om värdering och metod finns på Handelsbanken Capital Markets webbplats: https://reon.researchonline.se/desc/definitions och https://reon.researchonline.se/desc/dcfmodel. Handelsbanken Marknadsinformation är en tjänst utvecklad av Handelsbanken i samarbete med SIX Financial Information.
Kursinformationen presenteras med 15 minuters fördröjning. Handelsbanken står under tillsyn av Finansinspektionen. </p>
      <hr style="border-width: 4px;">
      <br>

      <h3 class="breadTextHeadLine">Do you now how the stock exchange works?</h3>
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

      <br>
      <hr style="border-width: 4px;">
      <br>

      <h3 class="breadTextHeadLine">Investing tips and a broder understanding of the market</h3>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/WEDIj9JBTC8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
      <h4 style="font-family: 'Nova Flat', cursive;">Video information</h4>
      <p><b>William Ackman:</b> Everything You Need to Know About Finance and Investing in Under an Hour.<br>
        WILLIAM ACKMAN, Activist Investor and Hedge-Fund Manager We all want to be financially stable and enjoy a well-funded retirement,
        and we don't want to throw out our hard earned money on poor investments.<br>
        But most of us don't know the first thing about finance and investing.
        Acclaimed value investor William Ackman teaches you what it takes to finance and
        grow a successful business and how to make sound investments that will get you to a cash-comfy retirement.</p>

        <br>
        <hr style="border-width: 4px;">
        <br>

      <h3 class="breadTextHeadLine">The latest in business, markets, U.S. and global news. <b>(LIVE)</b></h3>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Ga3maNZ0x0w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
      <h4 style="font-family: 'Nova Flat', cursive;">Stream information</h4>
      <p>Bloomberg TV brings you the latest in business, markets, U.S. and global news.<br>
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
