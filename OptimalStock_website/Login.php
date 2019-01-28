<?php
session_start();

// Server
$user = 'root';
$pass ='';
$db = 'phpProjectdb';

$Server = new mysqli('localhost', $user, $pass, $db) or die("unable to conect");


$NameUser =  $_POST["username"];
$password =  $_POST["password"];

$sqlInfo = "SELECT * FROM `users` WHERE username ='$NameUser'";
$resultName = $Server->query($sqlInfo);
$resultName = $resultName ->fetch_assoc();

// hashing
// -------
$passwordHasht;
$salt = $resultName["randNr"];
$randomNr = round($salt / strlen($password));
$password = $password . $randomNr;
$passwordHasht = sha1($password);

// check if correct or not
if ($resultName['password'] === $passwordHasht) {
  $_SESSION['login'] = true;
  $_SESSION['userName'] = $NameUser;
  header('Location: Is_index.php');

}
elseif ($resultName['password'] != $passwordHasht) {
  header('Location: InloggningHtml.php');
}


 ?>
