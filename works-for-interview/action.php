<?php
$servername="localhost";
$username="root";
$password="";
$database="bd-interview";

$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection faild".$conn->connect_error);
}

// else{
//     echo "Connected successfully";
// }
$name=$_REQUEST['name'];
$surname=$_REQUEST['surname'];
$mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$jobs=$_REQUEST['jobs'];
// $filename = $_FILES["file"]["name"];
// $tempname = $_FILES["file"]["tmp_name"];
// $folder = "./image/" . $filename;

$sql = "INSERT INTO `application`(`name`, `surname`, `mobile`, `email`, `address`, `gender`, `jobs`) 
VALUES ('$name','$username','$mobile','$email','$address','$gender','$jobs')";

if ($conn->query($sql) === true) {
    echo "Record inserted sucessfully <br> <br>";
   ?>

   <a href="show.php"> Click here to see datas</a>

   <?php
}

else{
    echo "Erro in inserting data". $mysql->error;
}

// if(mysqli_query($conn, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }

$conn -> close();
?>