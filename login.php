<?php

session_start();

include 'conn.php';
$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "SELECT * FORM signup WHERE name ='$name' AND pass = '$pass'";

$result = $conn->query($sql);

$_SESSION['name']=$_POST['name'];

header("location:home.php");



?>

