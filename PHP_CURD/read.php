<?php
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once "connection.php";
    $sql = "SELECT * FROM `employee` WHERE emp_id=?";
    if ($stmt = mysqli_prepare($conn,$sql)) {
        mysqli_stmt_bind_param($stmt,"i",$param_id);
        $param_id = trim($_GET["id"]);

        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($res)==1) {
                $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
                $name= $row["emp_name"];
                $email = $row["emp_mail"];
            }
            else{
                header("location=error.php");
            }
        }

        else{
            echo "Oops! Something went wrong. Please try again later.";
    }
    mysqli_stmt_close($stmt);

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
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
    <title>Read</title>
</head>
<body>
    <div class="wraper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 md-3">View Employee</h2>
                    <div class="form-group">
                        <label>Name</label>
                        <p><b>"<?php echo $row["emp_name"];?>"</b></p>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <p><b>"<?php echo $row["emp_mail"];?>"</b></p>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
</body>
</html>