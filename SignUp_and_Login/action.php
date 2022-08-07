<?php
include("conn.php");
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO `singup`(`name`, `username`, `email`, `pass`) 
VALUES ('$name','$username','$email','$password')";

if (mysqli_query($conn,$sql)) {
    echo "Data inserted successfully </br>";
    echo "<a href='login.php'> Click here </a>";
}

else{
    echo "Error in insertiong data";
}

mysqli_close($conn);
?>

