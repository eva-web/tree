<?php
$host =  "localhost";
$user = "eva";
$pass = "@eva@";
$db = "learn_php";
$tname = "pass";
$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect) {
    die("Connection Failed! " . mysqli_connect_error());
}
$name = $_POST['name'];
$age = $_POST['age'];
$query_two = "select * from user";
$show_data = mysqli_query($connect, $query_two);
?> 