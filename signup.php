<?php

include 'conn.php';
$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "INSERT INTO signup(name,pass)
    values('$name', '$pass')";
    $result = $conn -> query($sql);
    header("location:index.php");
        
?>
