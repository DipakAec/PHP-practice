<?php

$con = mysqli_connect("localhost","root","","ul-form");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
else {
    echo "connected";
}
?>