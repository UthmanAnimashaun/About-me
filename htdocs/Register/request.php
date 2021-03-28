<?php

    // Checking the database connection

$db= new mysqli("localhost", "root", "", "firstdb");
if(mysqli_connect_error()){
    echo "Wrong Connection";
}
    else{
        echo "<h1>Working <i>Perfectly</i></h1>";
    }

        // to Display  numbers of ID
    $select ="select * from register";
    $query= $db->query($select);
    $no =mysqli_num_rows($query);
    echo "<h1>$no</h1>";
    echo "<br>";

        // to Display  Fullname
    $rows = mysqli_fetch_assoc($query);
    echo $rows['fullname'];
    // echo "<h1>$no</h1>";
    echo "<br>";

    // to Display  Email
    $rows = mysqli_fetch_assoc($query);
    echo $rows['email'];
    // echo $no;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requesting From the DB </title>
</head>
<body>
    <header class="row">

    </header>
    
</body>
</html>