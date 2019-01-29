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
    <title>portfolio Optimal-stock</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Exo+2|Nova+Flat|Quicksand" rel="stylesheet">

  <!-- Botsratp -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script type="text/javascript">

  </script>

  <!-- filter for stocks  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--Import of athour script  -->
  <script src="javaScript.js"></script>
  <link href="css.css" rel="stylesheet" type="text/css">


  </head>

  <body style="background-color: #d9d9d9;">
<!-- navbar-->
<?php include_once "Navbar.php"; ?>

  <div class="MainPanel">

    <!-- User display name -->
    <h3 id="mainName">Portfolio : <?php
        if ($LoginCheck === true) {
        echo $_SESSION['userName'];
        }
        else {
          header('Location: InloggningHtml.php');
        }
        ?></h3>
        <hr style="border-width: 4px;">

      <!-- news widnow -->
      <div class="LiveNews">
        <h4 class="breadTextHeadLine">Business news. <b>(LIVE)</b></h4>
        <iframe width="360" height="215" src="https://www.youtube.com/embed/dp8PhLsUcFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <!-- refresh button -->
        <br>
        <br>
        <form class="" action="MovieDataToDb.php" method="post">
          <button type="submit" class="btn btn-info">Refresh stock values</button>
        </form>


        <!-- Stock Kurent values Filter -->
        <div class="FilterDIVII">
          <h3>Stocks kurent values: </h3>

          <input type="text" id="myInputII" onkeyup="myFunctionII()" placeholder="Search for stock names.." title="Type in a name">

        <table id="myTableII">

        <?php
        // print data table
        $user = 'root';
        $pass ='';
        $db = 'phpProjectdb';
        $Server = new mysqli('localhost', $user, $pass, $db) or die ("unable to conect");

        $sql = "SELECT CompanyName, StockValue FROM StockValues";
        $result = $Server->query($sql);

        $heder = '<tr class="header"><th style="width:50%;">Stock name</th><th style="width:25%;">value of one</th></tr>';
        if ($result->num_rows > 0) {
            // print heder
            echo $heder;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["CompanyName"]. "</td><td>" . $row["StockValue"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }


         ?>

         <script>
         // for filter table in JS
         //------------------
         function myFunctionII() {
           var input, filter, table, tr, td, i;
           input = document.getElementById("myInputII");
           filter = input.value.toUpperCase();
           table = document.getElementById("myTableII");
           tr = table.getElementsByTagName("tr");
           for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[0];
             if (td) {
               if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                 tr[i].style.display = "";
               } else {
                 tr[i].style.display = "none";
               }
             }
           }
         }
         </script>

      </div>

    </div>

    <br>
          <!-- BUY & SELL-->
          <form class="" action="CheckIfBuyOrSell.php" method="post">
            <?php include "OptionStock.php"; ?>
            <br>
            Number of stock to buy: <input type="int" name="Nr" >
            <br>
            <br>
            <input name="btnBuy"type="submit" class="btn btn-success btn-lg" id="BuyAndSellBtn" value="Buy"></input>
            <br>
            <br>
            <input name="btnSell" type="submit" class="btn btn-danger btn-lg" id="BuyAndSellBtn" value="Sell"></input>
          </form>

          <br>
          <br>
          <!-- buttons for BUY and SELL -->
          <div class="">
            <a href="PortfolioStatics.php"><button class="button buttonHower">Your statics </button></a>
            <a href="AiRepport.php"><button class="button buttonHower">Stock AI repport </button></a>
          </div>


          <br>
          <!-- Your stocks -->
          <div class="FilterDIV">
            <h3>Your stocks :_</h3>

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for company names.." title="Type in a name">

            <table id="myTable">

              <?php
              // print data table
              // ----------------
              $user = 'root';
              $pass ='';
              $db = 'phpProjectdb';

              $KurentUser = $_SESSION['userName'];

              $Server = new mysqli('localhost', $user, $pass, $db) or die ("unable to conect");

              $sql = "SELECT CompanyName, amountOfStock, StockPriceAtePurchase FROM portfolio WHERE user = '$KurentUser'";
              $result = $Server->query($sql);

              $heder = '<tr class="header"><th style="width:45%;">Company name</th><th style="width:25%;">Nr of stocks</th><th style="width:25%;">Profet/Loss in %</th></tr>';
              if ($result->num_rows > 0) {
                  // print heder
                  echo $heder;
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $tempComName = $row["CompanyName"];
                    $sqlII = "SELECT CompanyName, StockValue FROM StockValues WHERE CompanyName = '$tempComName'";
                    $resultII = $Server->query($sqlII);
                    $rowII = $resultII->fetch_assoc();

                      $profitOfOneStock = (($row["amountOfStock"] * $rowII["StockValue"]) / ($row["amountOfStock"] * $row["StockPriceAtePurchase"]) - 1) * 100;

                      #echo "<tr><td>" . $row["CompanyName"]. "</td><td>" . $row["amountOfStock"]. "</td><td>" . round($profitOfOneStock, 3). " %</td></tr>";
                      if ($profitOfOneStock < 0) {
                        echo "<tr><td>" . $row["CompanyName"]. "</td><td>" . $row["amountOfStock"]. '</td><td style="color:red">' . round($profitOfOneStock, 3). " %</td></tr>";

                      }
                      elseif ($profitOfOneStock > 0) {
                        echo "<tr><td>" . $row["CompanyName"]. "</td><td>" . $row["amountOfStock"]. '</td><td style="color:green"> +' . round($profitOfOneStock, 3). " %</td></tr>";

                      }
                      else {
                        echo "<tr><td>" . $row["CompanyName"]. "</td><td>" . $row["amountOfStock"]. "</td><td>" . round($profitOfOneStock, 3). " %</td></tr>";

                      }

                  }

                  echo "</table>";
                  //var_dump($rowII["StockValue"]);
              }
              else {
                  echo "0 results";
              }

               ?>

            <script>
            // for filter table in JS
            //------------------------
            function myFunction() {
              var input, filter, table, tr, td, i;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
            </script>

          </div>

          <br>
          <br>



      <!-- main ends -->
    </div>

  </body>
</html>
