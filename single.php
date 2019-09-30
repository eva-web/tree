<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name" />
        <input type="text" name="email" />
        <input type="submit" />
    </form>
    <?php

    $name = $_POST["name"];
    $email = $_POST["email"];

    if ($name) {
        echo "Welcome " . $name;
    }
    if ($email) {
        echo " Your email address is " . $email;
    }
    echo "<br>";
    echo $name + $email;


    ?>
</body>

</html>