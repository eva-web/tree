<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require('db.php');
?>
<table width="100%">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>AGE</td>
    </tr>
<?php
    for ($x = 0; $show_data->num_rows > $x; $x++) {
    $row = $show_data->fetch_assoc();
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>  
        <td><?php echo $row['name']; ?></td>  
        <td><?php echo $row['age']; ?></td>  
    </tr>
    
<?php } ?>
</table>
<?php mysqli_close($connect); ?>
</body>
</html>