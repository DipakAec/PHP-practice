<?php
$conn=mysqli_connect("localhost","root","","newdb");
if ($conn===false) {
    die("Connection Error".mysqli_connect_error);
}

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$subject=$_REQUEST['subject'];

$sql="INSERT INTO `formdata` (`name`, `phone`, `email`, `address`, `gender`, `subject`) 
VALUES ('$name', '$phone', '$email', '$address', '$gender', '$subject')";

if (mysqli_query($conn,$sql)) {
    echo "Insert sucessfully";
    ?>

    <a href="show.php"> Click here to see datas</a>
 
    <?php
}

else {
    echo "Error in inseting data.";
}
?>