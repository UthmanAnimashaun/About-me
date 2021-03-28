<?php
$db = new mysqli("localhost","root", "","firstdb");
if (mysqli_connect_error()) {
    echo "Wrong connection";
}

if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];

    //send to DB Table
    $insert="insert into register values('', '".$fullname."', '".$email."')";

    $q=$db->query($insert);
    if($q){
        echo "Success";
    }


}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Base</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Login</h1>
        <label for="">Fullname</label><br>
        <input type="text" placeholder="Fullname" name="fullname"><br><br>
        <label for="">Email</label><br>
        <input type="email" placeholder="Email" name="email"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>