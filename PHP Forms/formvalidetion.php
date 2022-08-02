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
$nameErr = $emailErr = $phoneErr = $genderErr = "";
$name = $email = $phone = $gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    }
    else{
        $email=test_input($_POST["email"]);  
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone required.";
    }
    else{
        $phone=test_input($_POST["phone"]);  
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Input Empty! Select gender.";
    }
    else{
        $gender=test_input($_POST["gender"]);  
    }

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
}



?>    

<form method = 'post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<h1>Html form (Validation)</h1>
Name:<input type="text" name="name"> 
<span class="error">* <?php echo $nameErr;?></span></br></br>
Email:<input type="text" name="email"> 
<span class="error">* <?php echo $emailErr;?></span></br></br>
Phone:<input type="text" name="phone"> 
<span class="error">* <?php echo $phoneErr;?></span></br></br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
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