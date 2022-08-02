<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}
$sql = "UPDATE employee set lastname='pal' WHERE id=2";
$result = $conn->query($sql);


if ($conn->query($sql) === true) {
    echo "Data updated successfully";
}
else {
    echo "Error " .$conn->error;
}

$conn->close();
?>