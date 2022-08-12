<?php
$nameErr =$phoneErr = $emailErr = $webErr ="";
$name = $phone =$email =$website ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($POST["phone"])) {
        $phoneErr= "Phone no is required";
    }
    else{
        $phone = test_input($_POST["phone"]);
    }

    if (empty($POST["email"])) {
        $emailErr = "Input Your Email Id";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($POST["website"])) {
        $webErr = "Website is requeir";
    } else {
        $website = test_input($_POST["website"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Basic HTML form</h1>
    <p><span class="error">* required field</span></p><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name"><br>
        <span class="error">* <?php echo $nameErr;?></span><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" name="phone"><br>
        <span class="error">* <?php echo $phoneErr;?></span><br><br>

        <label for="email">Email</label><br>
        <input type="text" name="email"><br>
        <span class="error">* <?php echo $emailErr;?></span><br><br>

        <label for="website">Website:</label><br>
        <input type="text" name="website"><br><br>
        <span class="error">* <?php echo $webErr;?></span><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<h1>Your Inputs are:
</h1>

<?php
echo $name;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $website;

?>