<?php
include("connection.php");
$sql = "CREATE TABLE dept(
    dpt_id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dpt_name VARCHAR(50) NOT NULL   
)";

$res = mysqli_query($conn,$sql);
if ($res == true) {
    echo "Table created successfully";
}
else{
    echo "Error in creating Table";
}
?>