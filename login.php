<?php
    $db =new mysqli("localhost", "root", "", "uthman");
    if(mysqli_connect_error()) {
        echo "Wrong connection";
    }
    echo "<br>";

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pw=$_POST['password'];
        
        // send to DB Table
        $insert="insert into login values('', '".$email."', '".$pw."')";

        $q=$db->query($insert);
        if($q){
            echo "Signup Successfully";
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin || Uthman</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/refinery.jpg">
</head>
<body>
    <div id="bar">
        <div> <img src="img/refinery.jpg" alt=""> Uthman</div>
    
    </div>
    
    <form action="index.php" method="POST">

<div id="bar2">Log in<br>
    <input type="email" id="text" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" id="text" placeholder="Password" required><br><br>
    <input type="submit" id="button" value="log in">
</div>
</form>
</body>
</html>