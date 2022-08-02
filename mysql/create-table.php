<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}

    $sql = "CREATE TABLE employee(
        id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fristname VARCHAR(15) NOT NULL,
        lastname VARCHAR(15) NOT NULL,
        email VARCHAR(30),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    )";

if ($conn->query($sql) === true) {
    echo "table created successfully";
}
else {
    echo "Error in creating table " .$conn->error;
}

$conn->close();
?>