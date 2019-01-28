<?php


$user = 'root';
$pass ='';
$db = 'phpProjectdb';
session_start();

$command = escapeshellcmd('cd /opt/lampp/htdocs/code/PhpProjekt/GetData.py');
shell_exec($command);


// Stock array
$CompanyNameArray = array("LME_Copper", "LME_Aluminium", "LME_Zinc", "LME_Tin", "LME_Nickel", "EDS_US_CocaCola", "EDS_US_Walmart", "EDS_US_Verizon_Com", "EDS_US_JpMorganChaseCo", "EDS_US_Intel", "EDS_US_Apple");
// , "EDS_US_CocaCola", "EDS_US_Walmart", "EDS_US_Verizon_Com", "EDS_US_JpMorganChaseCo", "EDS_US_Intel", "EDS_US_Apple"

$stockValueArray = array();

$Server = new mysqli('localhost', $user, $pass, $db) or die("unable to conect");

$Valuefile = fopen("middleMan.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file

//Put value and stock name to correct
while(!feof($Valuefile)){
$dataValue = fgets($Valuefile);
if($dataValue){
$floatDataValue = floatval($dataValue);
array_push($stockValueArray, $floatDataValue);
}
}
fclose($Valuefile);
var_dump($stockValueArray);

#$CompanyNameForSql = $CompanyNameArray[feof($Valuefile)];
#$sqlII = "SELECT * FROM portfolio WHERE StockValue = '$dataValue' AND WHERE CompanyName = '$CompanyName'";

//add new stock values to Db
for ($i=0; $i < sizeof($CompanyNameArray); $i++) {
$StockName = $CompanyNameArray[$i];
$CompanyStockVlaue = $stockValueArray[$i];

//Use when DB is emty
#$sql = "INSERT INTO StockValues(CompanyName, StockValue) VALUES ('$StockName', '$CompanyStockVlaue')";

$sql = "UPDATE StockValues SET StockValue = '$CompanyStockVlaue' WHERE CompanyName='$StockName'";
$Server->query($sql);

}
header('Location: Portfolio.php');
 ?>
