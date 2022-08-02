<?php


 
 $conn = mysqli_connect("localhost", "root", "", "test1");

 if ($conn===false) {
    die("Connection failed: " . mysqli_connect_error);
  }

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];

if(isset($_FILES['file']['name']))
{
  $fn=$_FILES['file']['name'];
    $ext=explode(".",$fn);
    $cn=count($ext);
    if($ext[$cn-1]=='jpg' || $ext[$cn-1]=='jpeg' || $ext[$cn-1]=='png'){

  $tm=$_FILES['file']['tmp_name'];
  move_uploaded_file($tm,"images/".$fn);
  
  $sql = "INSERT INTO form (fname, lname, email,pimg)
  VALUES ('$fname', '$lname', '$email','$fn')";
    
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else{
  echo "File type is not allows.";
}
}

  $conn->close();
  


?>