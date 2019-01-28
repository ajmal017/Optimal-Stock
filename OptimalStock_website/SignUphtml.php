<?php

session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Nova+Flat|Quicksand" rel="stylesheet">

    <!--bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Import of athour script  -->
    <script src="javaScript.js"></script>
    <link href="css.css" rel="stylesheet" type="text/css">

  </head>
  <body style="background-color: #e6ffff;">
    <!-- navbar-->
    <?php include_once "Navbar.php"; ?>

      <!-- Login info -->
      <div id='login' style="height: 40%">
        <div class="inputLogin" >
        <form action="NewUser.php" method="post">
        <h2 style="font-size: 2em;">Sign Up</h2>
        <input  type="text" name="username" placeholder="Name" style="width: 40%;"><br>
        <br>
        <input  type="password" name="password" placeholder="Password" style="width: 40%;"><br>
        <br>

        <br>
        <input  type="submit" value="Sign up" style="background-color: #ff8000;border-style: none; color:white; height: 80%; width: 18%; font-family: 'Exo 2'">
        </form>
        </div>
      </div>


  </body>
</html>
