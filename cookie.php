<?php

$name = "foo";
$value = $_SERVER["PHP_SELF"];

setcookie($name, $value, time() + (86400 * 30), "/");

if (!isset($_COOKIE[$name])) {

    echo "cookiename " . $name . " notset";
} else {
    echo "cookiename " . $name . " is set - ";
    echo "value is " . $_COOKIE[$name];
}


// echo time();
