<?php

    if(isset($_POST['submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        // send to DB Table
        $insert="insert into navbar_signup values('', '".$first_name."', '".$last_name."', '".$email."', '".$password."', now())";

        $q=$db->query($insert);
    }
?>
