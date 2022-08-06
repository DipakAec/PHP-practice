<?php
$conn=mysqli_connect("localhost","root","","newdb");
if ($conn===false) {
    die("Connection Error".mysqli_connect_error);
}

$sql="SELECT * FROM `formdata`";

$res=mysqli_query($conn,$sql);

echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Name</th>";
                echo "<th>Phone</th>";
                echo "<th>Email</th>";
                echo "<th>Address</th>";
                echo "<th>Gender</th>";
                echo "<th>Subject</th>";
            echo "</tr>";

if ($res) {
    if (mysqli_num_rows($res) > 0) {
                

            while ($rows=mysqli_fetch_array($res)) {

                $id=$rows["id"];
                $name=$rows["name"];
                $phone=$rows["phone"];
                $email=$rows["email"];
                $address=$rows["address"];
                $gender=$rows["gender"];
                $subject=$rows["subject"];
                
                echo "<tr>";
                echo "<td> .$id. </td>";
                echo "<td> .$name. </td>";
                echo "<td>.$phone . </td>";
                echo "<td> .$email. </td>";
                echo "<td> .$address. </td>";
                echo "<td> .$gender. </td>";
                echo "<td> .$subject. </td>";
            echo "</tr>";
            }
         
    }
}