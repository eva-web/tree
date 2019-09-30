<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>

<body style="padding: 10em;">
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

    $edit_data_query = "select * from form where id= $id";
    $edit_data = mysqli_query($db_connect,$edit_data_query);

    $row = mysqli_fetch_assoc($edit_data);


    ?>
    <form action="/example-1/update.php" method="POST">
        <label>ID</label>
        <input type="text" name="id" value="<?php echo $row['id']; ?> " readonly> <br><br>
        <label>NAME</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"> <br><br>
        <label>AGE</label>
        <input type="number" name="age" value="<?php echo $row['age']; ?>"> <br><br>
        <label>EMAIL</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"> <br><br>
        <label>SUBJECT</label>
        <input type="text" name="subject" value="<?php echo $row['subject']; ?>"> <br><br>
        <label>MESSAGE</label>
        <textarea name="message" ><?php echo $row['message']; ?> </textarea><br><br>
        <label>DATE</label>
        <input type="text" name="date" value="<?php echo $row['date']; ?>"> <br><br>
        <input type="submit" value="SUBMIT">

    </form>







</body>

</html>