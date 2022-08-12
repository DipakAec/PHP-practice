<?php
$conn = mysqli_connect("localhost","root","","officedb");
if($conn==false){
    die("Connection Error".mysqli_connect_error());
}
// else {
//     echo "Connected successfully";
// }
?>