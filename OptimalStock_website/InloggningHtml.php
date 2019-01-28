<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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

      <div id='login'>
        <div class="inputLogin" >
        <form action="Login.php" method="post">
        <h2 style="font-size: 2em;">Login</h2>
        <!-- Info input -->
        <input  type="text" name="username" placeholder="Name" style="width: 40%;" style="font-family: 'Exo 2', sans-serif;"><br>
        <br>
        <input  type="password" name="password" placeholder="Password" style="width: 40%;" style="font-family: 'Exo 2', sans-serif;"><br>
        <br>
        <input  type="submit" name="sub" value="Login" style="background-color: #ff8000;border-style: none; color:white; height: 80%; width: 18%; font-family: 'Exo 2'">
        <!-- <button name="NewAcc" style="background-color: #ff8000;border-style: none; color:white; height: 80%; width: 18%; font-family: 'Exo 2'" ><a href="SignUphtml.php">Sign up</a></button> -->
        <a href="SignUphtml.php" style="color: white;">Sign up</a>
        </form>
        </div>
      </div>

  </body>
</html>
