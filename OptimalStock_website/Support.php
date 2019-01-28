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

    <div class="" style="min-height: 5%; position: relative; padding: 5% 10%">
      <h1>Support</h1>
      <!-- bread text -->
      <img src="https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F265%2F265668.png&f=1" alt="SupportImg" id="IconImgForMain" style="width: 20%;">
      <p>We are sorry that awry thing is not working for you.</p>
      <p>We whant to help you. However right now the over <u>phone support is down</u>. But you can contact us on aouer <b>Gmail for support</b>.</p>
      <p>Do remeber that most comen problems can be solved by refresing the page or turning the computer off and on again. </p>
      <p>Email : <b>optimal.stock@gmail.com</b> </p>
      </div>

      <br>
      <br>

    </div>

  </body>
</html>
lo
