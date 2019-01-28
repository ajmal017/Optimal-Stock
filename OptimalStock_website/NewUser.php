<?php

// Server side
$user = 'root';
$pass ='';
$db = 'phpProjectdb';
$Server = new mysqli('localhost', $user, $pass, $db) or die("unable to conect");

// POST var
$newName =  $_POST["username"];
$newPassword =  $_POST["password"];
$password = '';


    // hashing
    $passwordHasht;
    $salt = rand(10000,99999);
    $randomNr = round($salt / strlen($newPassword));
    $password = $newPassword. $randomNr;
    $passwordHasht = sha1($password);

        // Add to Db
        $sql = "INSERT INTO users(username, password, randNr)
                VALUES ('$newName', '$passwordHasht', $salt)";
                header('Location: Is_index.php');
        $Server->query($sql);
        echo  $Server->error;


 ?>
