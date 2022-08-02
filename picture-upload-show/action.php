<?php
include("connection.php");
if (isset($_POST['upload'])) {
    $filename=$_FILES['uploadfile']['name'];
    $tmpname=$_FILES['uploadfile']['tmpname'];
    move_uploaded_file($tmpname,"image/".$filename);
    // $folder="./image/" .$filename;

    $sql="INSERT INTO `image` (`name`) VALUES ('$filename') ";
    $conn->query($sql);

    // if (move_uploaded_file($tmpname,"image/".$filename)) {
    //     echo "Image uploaded sucessfully";
    // }

    // else {
    //     echo "Image didn't uploaded!";
    // }
}
?>