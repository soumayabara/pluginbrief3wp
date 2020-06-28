<?php

    $conn = mysqli_connect("localhost", "root","","myblog");

    if(!$conn){

        die("connection failed".mysqli_connection_error());
    } 
?>

