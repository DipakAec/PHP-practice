<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}
$sql = "DELETE FROM employee where id=1";
$result = $conn->query($sql);


if ($conn->query($sql) === true) {
    echo "Data deleted successfully";
}
else {
    echo "Error " .$conn->error;
}

$conn->close();
?>