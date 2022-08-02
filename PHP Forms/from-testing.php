<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = $email = $phone = $gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$phone=test_input($_POST["phone"]);
$gender=test_input($_POST["gender"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}

?>    

<form method = 'post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<h1>Html form</h1>
Name:<input type="text" name="name"> </br></br>
Email:<input type="text" name="email"> </br></br>
Phone:<input type="text" name="phone"> </br></br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php

echo "<h1>The input you gives are: </h1> <br>";

echo $name ."<br>";
echo $email ."<br>";
echo $phone ."<br>";
echo $gender ."<br>";


?>

</body>
</html>