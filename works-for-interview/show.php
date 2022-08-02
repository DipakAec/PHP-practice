<html>
<body>
<?php 

$servername="localhost";
$username="root";
$password="";
$database="bd-interview";

$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection faild".$conn->connect_error);
}


$query = "SELECT * FROM `application` ";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Id</font> </td>
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Surname</font> </td> 
          <td> <font face="Arial">Mobile</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Address</font> </td>
          <td> <font face="Arial">Gender</font> </td>
          <td> <font face="Arial">Jobs</font> </td> 
          <td> <font face="Arial">Delete</font> </td>
          <td> <font face="Arial">Update</font> </td>  
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"]; 
        $name = $row["name"];
        $surname = $row["surname"];
        $mobile = $row["mobile"];
        $email = $row["email"];
        $address = $row["address"]; 
        $gender = $row["gender"];
        $jobs = $row["jobs"];  

        echo '<tr>
                  <td>'.$id.'</td>  
                  <td>'.$name.'</td> 
                  <td>'.$surname.'</td> 
                  <td>'.$mobile.'</td> 
                  <td>'.$email.'</td> 
                  <td>'.$address.'</td> 
                  <td>'.$gender.'</td> 
                  <td>'.$jobs.'</td>
                  <td> <button type="button">Edit</button> </td>
                  <td> <button type="button">Delete</button> </td>
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>