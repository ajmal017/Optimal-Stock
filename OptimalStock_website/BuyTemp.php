<?php

  $user = 'root';
  $pass ='';
  $db = 'phpProjectdb';
  session_start();

if (isset($_SESSION['Nr'])) {

  $Server = new mysqli('localhost', $user, $pass, $db) or die("unable to conect");

  $NumberOfStock = $_SESSION['Nr'];
  $CompanyName = $_SESSION['taskOption']; // select option

  $stockKurentDbValue = "SELECT * FROM StockValues WHERE CompanyName = '$CompanyName'";
  $stockKurent = $Server->query($stockKurentDbValue);
  $stockKurent = $stockKurent->fetch_assoc();
  $stockKurent = $stockKurent['StockValue'];

  //$profitTot = $stockKurent * $NumberOfStock;
  $PortfolioUser = $_SESSION['userName'];


  $sql = "SELECT * FROM portfolio WHERE user = '$PortfolioUser' AND CompanyName = '$CompanyName'";
  $sql = $Server->query($sql);
  $sql = $sql->fetch_assoc();
  // check for update or add new
    if ($sql){
      $currentStocks = $sql['amountOfStock'];
      $newNumber = intval($currentStocks) +  intval($NumberOfStock);
      $sql = "UPDATE portfolio SET amountOfStock = '$newNumber' WHERE user = '$PortfolioUser' AND CompanyName = '$CompanyName'";
      $sql = $Server->query($sql);
      header('Location: Portfolio.php');

    }
    
    else {
      $sql = "INSERT INTO portfolio(user, CompanyName, amountOfStock, StockPriceAtePurchase)
              VALUES ('$PortfolioUser', '$CompanyName', '$NumberOfStock', $stockKurent)";
      $Server->query($sql);
      header('Location: Portfolio.php');
    }
}
else {
  echo "Error: 42";
}



// Old Code for look back
#----------------------------

/*
if (!$sql){
  $sql = "INSERT INTO portfolio(user, CompanyName, amountOfStock, StockPriceAtePurchase)
          VALUES ('$PortfolioUser', '$CompanyName', '$NumberOfStock', $stockKurent)";
  $Server->query($sql);
}

/*
$sqlComName = "SELECT * FROM portfolio WHERE user = '$PortfolioUser'";
$CompanyNameArray = $Server->query($sqlComName);

for ($i=0; $i < mysqli_num_rows($CompanyNameArray); $i++) {
  $CompanyNamearrayz = $CompanyNameArray->fetch_assoc();
  if ($CompanyNamearrayz['CompanyName'] == $CompanyName) {

    $PortfolioUser = $_SESSION['userName'];
    $newNumberOfStock = $userKurentNumberOfStocks - $NumberOfStock;
    $sqlUpdateAmount = "UPDATE portfolio SET amountOfStock = '$newNumberOfStock'";


  }
  var_dump($CompanyName);
  echo "-----------------------<br>";

}

for ($i=0; $i < count($CompanyNameArray); $i++) {
    var_dump($CompanyNameArray);

    var_dump($CompanyName);
    if ($CompanyNameArray[$i] == $CompanyName) {


    }
    else {

      $sql = "INSERT INTO portfolio(user, CompanyName, amountOfStock, StockPriceAtePurchase)
              VALUES ('$PortfolioUser', '$CompanyName', '$NumberOfStock', $stockKurent)";
      $Server->query($sql);
      #header('Location: Portfolio.php');
      echo "Else";
    }

}
*/


 ?>
