<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="$_SERVER['PHP_SELF']">
        <level>Name </level>
        <input type="text" name="name">
        <input type="submit" name="submit">
</body>
</html>

<?php
if($_SERVER['PHP_SELF']=='post'){
    $name = htmlspecialchars($_REQUEST['name']);
    if (empty($name)) {
        echo "No text is there! plase enter some.";
    }

    else{
        echo $name;
    }
}

?>