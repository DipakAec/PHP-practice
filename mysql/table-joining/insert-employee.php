<?php
include("connection.php");
$sql ="INSERT INTO `employee`(`emp_name`, `emp_mail`, `emp_dept`) 
VALUES ('Nirmal Paul','nirmalpaul@gmail.com','Database'),
        ('Utpal Pal','utpallpal@gmail.com','Blockchain'),
        ('Dipak KUmar Paul','dipakpaul@gmail.com','Web'),
        ('Madhu deb','madhu@gmail.com','Android')
"; 

$res = mysqli_query($conn,$sql);
if ($res == true) {
    echo "Employees inserted succressfully";
}
else {
    echo "Error in inserting emlopyee";
}

?>