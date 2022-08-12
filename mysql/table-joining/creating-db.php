<?php
include("connection.php");
$sql="CREATE DATABASE OfficeDB";

$res = mysqli_query($conn,$sql);
if($res == true){
    echo "Database created Successfully";
}
else {
    echo "Failed to create Database";
}


?>