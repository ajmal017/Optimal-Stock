<?php
session_start();
$_SESSION['Nr'] = $_POST['Nr'];
$_SESSION['taskOption'] = $_POST['taskOption'];

// BUY
if (isset($_POST["btnBuy"])){
  header('Location: BuyTemp.php');
}
// SELL
else if (isset($_POST["btnSell"])){
  header('Location: SellTemp.php');
}

 ?>
