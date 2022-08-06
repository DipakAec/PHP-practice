<?php
$conn = mysqli_connect("localhost","root","","dbnew");
if($conn==false){
    die("Connection error".mysqli_connect_error());
}
// else{
//     echo"connect successfully";
// }
?>