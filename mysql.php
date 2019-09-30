<?php require('db.php'); ?>
<?php
// echo "connection Successful";

// $query = "create table " . $tname . " (
//     id int(6) unsigned auto_increment primary key,
//     name varchar(255) not null)";

// if (mysqli_query($connect, $query)) {
//     echo $tname . "table created";
// } else {
//     echo "Table cannot be created!" . mysqli_error($connect);
// }

//$name = substr(md5(microtime()), rand(0, 26), 10);
$name = $_POST['name'];
$age = $_POST['age'];

$xname = !empty($name) ? "'$name'" : "NULL";
$xage = !empty($age) ? $age : "NULL";


$query = "insert into user (name,age) values ($xname,$xage)";

if (mysqli_query($connect, $query)) {
    echo "user inserted ";
} else {
    echo "User cannot be  created! " . mysqli_error($connect);
}

$query_two = "select * from user";

$show_data = mysqli_query($connect, $query_two);
// print_r($show_data);

// if ($show_data->num_rows > 0) {

//     while ($row = $show_data->fetch_assoc()) {
//          echo "id " . $row['id'] . " name " . $row [ 'name'] . "<br>";
//         // var_dump($row);
//     }
// }


for ($x = 0; $show_data->num_rows > $x; $x++) {
    $row = $show_data->fetch_assoc();
    echo "id " . $row['id'] . " name " . $row['name'] . " age ". $row['age'] . " age type ". var_dump($row['age']) ."<br><br>";
}


// $query_alt_table = "alter table user add age varchar(3) null after name";

// mysqli_query($connect, $query_alt_table);



mysqli_close($connect);
