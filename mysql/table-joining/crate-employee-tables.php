<?php
include("connection.php");
$sql = "CREATE TABLE employee(
    emp_id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(50) NOT NULL,
    emp_mail VARCHAR(50) NOT NULL,
    emp_dept VARCHAR(50) NOT NULL
)";

$res = mysqli_query($conn,$sql);
if ($res == true) {
    echo "Table created successfully";
}
else{
    echo "Error in creating Table";
}
?>