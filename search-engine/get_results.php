
<?php
if(isset($_POST['search']))
{
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="structure";
 $search_val=$_POST["search_term"];

 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM search where MATCH(title,description) AGAINST('$search_val')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<li><a><span class='title'>".$row['title']."</span><br><span class='desc'>".$row['description']."</span></a></li>";
  }
} else {
  echo "0 results";
}
}
$conn->close();
?>

 