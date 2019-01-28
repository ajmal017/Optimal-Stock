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
    <title>Stats optimal-stock</title>
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

    <div id="MainPanel">

      <h3>Your statics</h3>
      <br>
              <!-- Your stocks -->
              <div class="FilterDIVIII">
                <h3>Your stocks :_</h3>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for company names.." title="Type in a name">

                <table id="myTable">

        <?php
          // print data table

                  #Sever
                  $user = 'root';
                  $pass ='';
                  $db = 'phpProjectdb';

                  $Server = new mysqli('localhost', $user, $pass, $db) or die ("unable to conect");

                  $KurentUser = $_SESSION['userName'];

                  $yearlyProfits = 0.0;
                  $profitCaounter = 0;
                  $amountSpent = 0.0;

                  $sql = "SELECT CompanyName, amountOfStock, StockPriceAtePurchase FROM portfolio WHERE user = '$KurentUser'";
                  $result = $Server->query($sql);



                  $heder = '<tr class="header"><th style="width:25%;">Company name</th><th style="width:45%;">Profet/Loss in %</th></tr>';
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

                          $yearlyProfits = $yearlyProfits + ($row["amountOfStock"] * $rowII["StockValue"]) / ($row["amountOfStock"] * $row["StockPriceAtePurchase"]);
                          $profitCaounter += 1;
                          $amountSpent = $amountSpent + $row["amountOfStock"] * $row["StockPriceAtePurchase"];
                          // if for color och %
                          if ($profitOfOneStock < 0) {
                            echo "<tr><td>" . $row["CompanyName"]. '</td><td style="color:red">' . round($profitOfOneStock, 3). " %</td></tr>";

                          }
                          elseif ($profitOfOneStock > 0) {
                            echo "<tr><td>" . $row["CompanyName"]. '</td><td style="color:green">' . round($profitOfOneStock, 3). " %</td></tr>";

                          }
                          else {
                            echo "<tr><td>" . $row["CompanyName"]. "</td><td>" . round($profitOfOneStock, 3). " %</td></tr>";

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
                // for filter table
                // -----------------
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

        <?php


            $yearlyProfits = ($yearlyProfits - $profitCaounter) * 100;

            $yearlyProfits = round($yearlyProfits, 2);
                if ($yearlyProfits < 0) {
                    echo '<h3> Yearly profits : <b style="color:red">'. $yearlyProfits . "%</b></h3>";
                }
                elseif ($yearlyProfits > 0) {
                    echo '<h3> Yearly profits : <b style="color:green"> +'. $yearlyProfits . "%</b></h3>";
                }
                else {
                    echo '<h3> Yearly profits : <b>'. $yearlyProfits . "%</b></h3>";
                }
              echo "<br><h3>Holding value : <b>$". $amountSpent ."</b></h3><br>";




            ?>



    </div>

  </body>
</html>
