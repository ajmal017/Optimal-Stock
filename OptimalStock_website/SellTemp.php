<?php

// Server side
$user = 'root';
$pass ='';
$db = 'phpProjectdb';
session_start();
$Server = new mysqli('localhost', $user, $pass, $db) or die("unable to conect");

// if nr of stock input == true
if (isset($_SESSION['Nr'])) {
  $NumberOfStock = $_SESSION['Nr'];
  $PortfolioUser = $_SESSION['userName'];

  $CompanyName = $_SESSION['taskOption']; // select option
  // Get to days stock value
  $stockKurentDbValue = "SELECT * FROM StockValues WHERE CompanyName = '$CompanyName'";
  $stockKurent = $Server->query($stockKurentDbValue);
  $stockKurent = $stockKurent->fetch_assoc();
  $stockKurent = $stockKurent['StockValue'];

  // Get amount of stock
  $sqlIII = "SELECT * FROM portfolio WHERE user = '$PortfolioUser'  AND CompanyName = '$CompanyName'";
  $userKurentNumberOfStocks = $Server->query($sqlIII);
  $userKurentNumberOfStocks = $userKurentNumberOfStocks->fetch_assoc();
  $userKurentNumberOfStocks = $userKurentNumberOfStocks['amountOfStock'];

  $PortfolioUser = $_SESSION['userName'];
  $newNumberOfStock = $userKurentNumberOfStocks - $NumberOfStock;

  $sql = "UPDATE portfolio SET amountOfStock = '$newNumberOfStock'  WHERE user = '$PortfolioUser' AND CompanyName = '$CompanyName'";
  //$sql = "INSERT INTO portfolio(user, CompanyName, amountOfStock, StockPriceAtePurchase)
          //VALUES ('$PortfolioUser', '$CompanyName', '$NumberOfStock', $stockKurent)";
  $Server->query($sql);

  $sqlIV = "SELECT amountOfStock FROM portfolio WHERE user = '$PortfolioUser' AND CompanyName = '$CompanyName'";
  $checkForZero = $Server->query($sqlIV);
  #mysqli_free_result($checkForZero);
  $checkForZero = $checkForZero->fetch_assoc();
  $checkForZero = $checkForZero['amountOfStock'];
  $checkForZero = floatval($checkForZero);
  #var_dump($checkForZero);


  // check for zero
  // --------------

  if ($checkForZero <= 0.0) {

    $sqlV = "DELETE FROM portfolio WHERE user = '$PortfolioUser' AND CompanyName = '$CompanyName'";
    $Server->query($sqlV);

    header('Location: Portfolio.php');

  }
  else {

    header('Location: Portfolio.php');

  }


  //echo $Server->error;
}

 ?>
