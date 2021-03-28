<?php
$db= new mysqli("localhost", "root", "", "firstdb");
if(mysqli_connect_error()){
    echo "Wrong Connection";
}
    else{
        echo"Working Perfectly";
    }

?>