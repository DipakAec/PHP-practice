<?php
$servername="localhost";
$usernamer="root";
$password="";
$dbname="uploaddb";

$conn= new mysqli($servername,$usernamer,$password,$dbname);
if ($conn->connect_error) {
    die ("Connection error".$conn->connect_error);
}

?>