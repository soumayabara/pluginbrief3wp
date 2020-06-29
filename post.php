<?php

session_start();

$username = $_SESSION['name'];

include 'conn.php';
$title = $_POST['title'];
$des = $_POST['des'];


$sql = "INSERT INTO posts (name, title, post, CreatedBy) values ('$username','$title','$des', '$posting')";

$result = $conn->query($sql);

$_SESSION['name'] = $_POST['name'];

header("location:home.php");



?>
