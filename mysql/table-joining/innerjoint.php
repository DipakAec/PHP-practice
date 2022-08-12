<?php
include("connection.php");
$sql= "SELECT t1.emp_id,t1.emp_name,t1.emp_mail,t2.dpt_name
        FROM employee AS t1 INNER JOIN dept AS t2
        ON t1.dept_id  t2.dtp_id ORDER BY emp_id
        ";
$res = mysqli_query($conn,$sql);

?>