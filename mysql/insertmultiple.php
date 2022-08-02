<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}

   $sql = "INSERT INTO employee (fristname, lastname, email) 
    VALUES ('Deb','Paul','pauldeb@gmail.com');";

   $sql .= "INSERT INTO employee (fristname, lastname, email) 
    VALUES ('Subhas','Bose','sbose@gmail.com');";

$sql .= "INSERT INTO employee (fristname, lastname, email) 
VALUES ('Isac','Newton','inw@gmail.com');";
    

if ($conn->multi_query($sql) === true) {
    echo "insert multiple data successfully";
}
else {
    echo "Error " .$conn->error;
}

$conn->close();
?>