<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="0; url=/example-1/thanks.php">
    <title>Document</title>
</head>
<body>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



    $host = 'localhost';
    $user = 'eva';
    $password = '@eva@';
    $db = 'exm_php';

    $db_connect = mysqli_connect($host, $user, $password, $db);

    if (!$db_connect) {

     die("Connection Failed! " . mysqli_connect_error());
    }

    $id = $_POST['id'];

    //echo $id;

    $delete_data_query = "delete from form where id=$id";

    if(mysqli_query($db_connect,$delete_data_query)){
        echo "Respective ID deleted successfully.";
    } else {
        echo "something wrong? ". mysqli_error($db_connect);
    }

    mysqli_close($db_connect);
    ?>
</body>
</html>


