<?php

include("conn.php");
$usernamelog = $_POST['username'];
$passwordlog = $_POST['password'];

$sql="SELECT * FROM `singup` WHERE `username`='$usernamelog' AND `pass`= '$passwordlog' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num==1){
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$usernamelog;
    header("location:welcome.php");
}
else{
    echo "Login not done";
}
?>