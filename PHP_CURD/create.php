<?php
include("connection.php");
$name=$email="";
$name_err=$email_err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err="Plase input a name.";
    }

    elseif(!filter_var($input_name,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp" => "/^[a-zA-Z\s]+$/")))){
        $name_err = "Palse Enter a valade name.";

    }

    else{
        $name=$input_name;
    }


    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err="Palse enter a E-mail";
    }
    elseif (!filter_var($input_email,FILTER_SANITIZE_EMAIL)) {
        $email_err = "Plase Enter a valid Email ID.";
    }
    else {
        $email=$input_email;
    }

    if (empty($name_err) && empty($email_err)) {
        $sql = "INSERT INTO `employee`(`emp_name`, `emp_mail`) VALUES (?,?)";
        if ($stmt=mysqli_prepare($conn,$sql)) {
            mysqli_stmt_bind_param($stmt,"ss",$parma_name,$parma_email);
            $parma_name = $name;
            $parma_email = $email;

            if (mysqli_stmt_execute($stmt)) {
                header("location:index.php");
                exit();
            }

            else {
                echo "Something went wrong!";
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }
    


}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Create Employee</title>
</head>
<body>
    <div class="wraper">
        <div class="container">
            <div class="row">
                <div class="col md-12">
                    <h2 class="mt-5"> Create Employee</h2>
                    <p>Fill the form to create Employee</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                        </div>

                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-3 ">Cancle </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>