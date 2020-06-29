<?php

session_start();

include 'conn.php';
$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "SELECT * FORM signup WHERE name ='$name' AND pass = '$pass'";

$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
    //    echo "Name: " . $row["name"]. "<br>";
       $_SESSION['name'] = $row['name'];
    }
} else {
    echo "0 results";
}

// $_SESSION['name']=$_POST['name'];

header("location:home.php");



?>

