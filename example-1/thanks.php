<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>table,td{border:1px solid #ccc;}
        </style>
</head>

<body>
    <h3>Thank You for Submitting the Form.</h3>


    <!--Form PHP start Here -->

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

    echo "Connection Successfull <br>";

    if(!empty($_POST['name'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $insert_data_query = "insert into form (name, age, email, subject, message) values ('$name', $age, '$email', '$subject', '$message')";
    
    
    // if (mysqli_query($db_connect, $insert_data_query)) {
    //     echo "success";
    // } else {
    //     echo "error " .$insert_data_query."<br>". mysqli_error($db_connect);
    // }
}
    $show_data_query = "select * from form order by id desc";

    $show_data = mysqli_query($db_connect,$show_data_query);

    //print_r($show_data);

    ?>
<table>
    <tr>
        <td >ID</td>
        <td>NAME</td>
        <td>AGE</td>
        <td>EMAIL</td>
        <td>SUBJECT</td>
        <td>MESSAGE</td>
        <td>DATE</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
     for($i=0; $show_data->num_rows > $i; $i++){

        $rows = mysqli_fetch_assoc($show_data);
       
    ?>
    <tr >
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['age']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['subject']; ?></td>
        <td><?php echo $rows['message']; ?></td>
        <td><?php echo $rows['date']; ?></td>
        <td>
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <input type="submit" value="EDIT">
            </form>
        </td>
        <td>
            <form action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <input type="submit" value="DELETE">
            </form>
        </td>
    </tr>
    <?php } ?>
</table>

    <?php

    mysqli_close($db_connect);

    ?>

    <!--Form PHP end Here -->









</body>

</html>