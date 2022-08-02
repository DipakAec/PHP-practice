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
    VALUES ('Atul Prasad','Sen','senatulp@gmail.com')";
    

if ($conn->query($sql) === true) {
    
    $last_id = $conn->insert_id;
    

    echo "Data inserted successfully,the last id is" .$last_id;
}
else {
    echo "Error " .$conn->error;
}

$conn->close();
?>