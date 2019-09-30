<?php

// welcome $names
// your email is $email 

$file = fopen("test.txt", "a") or die("File Not Found!");

// echo fread($file, filesize("test.txt"));
fwrite($file, $_GET["name"] . "\n");
fwrite($file, $_GET["email"] . "\n");
fwrite($file, $_SERVER['REMOTE_ADDR'] . "\n");

fclose($file);

echo "Welcome " . $_GET["name"];
echo " Your email address is " . $_GET["email"];



$name = "form";
$value = $_SERVER["PHP_SELF"];

setcookie($name, $value, time() + (86400 * 30), "/");
