<?php

    $conn = mysqli_connect("localhost", "root","","blogapp");
    
    if(!$conn){
        die("connection failed".mysqli_connection_error());
    } 
?>
