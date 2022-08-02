<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}
$sql = "SELECT id, fristname, lastname FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["fristname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>