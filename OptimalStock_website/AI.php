<?php

echo shell_exec("Ai.py");
$myfile = fopen("middleMan.txt", "r") or die("Unable to open file!");
fclose($myfile);



 ?>
