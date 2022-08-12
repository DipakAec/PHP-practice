<?php
include("connection.php");

$sql = "INSERT INTO `dept`(`dpt_name`) 
        VALUES ('Database'),
        ('Blockchain'),('Web'),('Android'),('HR')
        ";

$res = mysqli_query($conn,$sql);
if ($res == true) {
        echo "Departments inserted successfully";
}

else {
    echo "Error in inserting Department";
}


?>