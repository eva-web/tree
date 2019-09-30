<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1; url=/example-1/thanks.php">
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
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo $name;

    $update_data_query = "update form set name='$name',age='$age',email='$email',subject='$subject',message='$message' where id=$id";
    
    $update_data = mysqli_query($db_connect,$update_data_query);

    if($update_data){
        echo "success";
    } else {
        echo "error ". mysqli_error($db_connect);
    }

    print_r($update_data);


   mysqli_close($db_connect);

    ?>
 







</body>

</html>