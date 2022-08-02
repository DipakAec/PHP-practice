<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}

   // $sql = "INSERT INTO employee (fristname, lastname, email) 
   // VALUES ('Dipak','Paul','pauldipakkr@gmail.com')";

   $sql = "INSERT INTO employee (fristname, lastname, email) 
    VALUES ('Anuj','Pandey','pabdeyanuj@gmail.com')";
    

if ($conn->query($sql) === true) {
    echo "Data inserting successfully";
}
else {
    echo "Error " .$conn->error;
}

$conn->close();
?>