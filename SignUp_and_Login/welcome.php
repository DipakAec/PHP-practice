<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<h1> Welcome</h1> <?php echo $_SESSION['username'] ?> <br>
<a href="logout.php">Click here to log out</a>