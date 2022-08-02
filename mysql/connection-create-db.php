<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";

$conn = new mysqli($servername,$usernam,$pasword);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}

    $sql = "CREATE DATABASE mynewdb1";
if ($conn->query($sql) === true) {
    echo "Database created successfully";
}
else {
    echo "Error in creating database" .$conn->error;
}

$conn->close();
?>