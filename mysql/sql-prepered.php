<?php
$servername = "localhost";
$usernam = "root";
$pasword = "";
$dbname = "mynewdb1";

$conn = new mysqli($servername,$usernam,$pasword,$dbname);
if ($conn -> connect_error) {
    die ("Connection faild ".$conn -> connect_error);
}

//$stmt=$conn->prepare("INSERT INTO employee (fristname, lastname, email)  VALUES(?,?,?)");

//$stmt -> bind_parm("sss",$firstname,$lastname,$email);

$stmt = $conn->prepare("INSERT INTO employee (fristname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);


$firstname = "Albert";
$lastname = "Eninstine";
$email = "ea@gmail.com";
$stmt->execute();

$firstname = "Nicolas";
$lastname = "Tesla";
$email = "nt@gmail.com";
$stmt->execute();

$firstname = "Akbar";
$lastname = "Mughal";
$email = "ak@gmail.com";
$stmt->execute();

    
echo "New records created sucessfully";

$stmt->close();
$conn->close();
?>