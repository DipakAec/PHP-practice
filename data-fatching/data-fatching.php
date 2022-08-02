<?php

 $conn = mysqli_connect("localhost", "root", "", "newdb");

 if ($conn===false) {
    die("Connection failed: " . mysqli_connect_error);
  }

  else{
echo "Connection Successfully <br>  "; 
  }
$sql = "SELECT * FROM `person`";
$result = mysqli_query($conn,$sql);
$num= mysqli_num_rows($result);
echo "Number of rows in database is " .$num ."<br>" ;
if ($num>0){
    // $row= mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row= mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row= mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //While loop

    while($row= mysqli_fetch_assoc($result)){
        echo "Hello! ".$row['fname'] ." " .$row['lname'] . "Your mail id is " .$row['email'] ;
        echo "<br>";
    }
}

  ?>