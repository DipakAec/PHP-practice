<?php
$Emp = array (
  array("Jack",22,1),
  array("Sam",25,2),
  array("Saab",35,3),
  array("Lina",27,4)
);
for($row=0; $row<4; $row++){
    echo "Details of employee $row <br>";
    echo "<ul>";

for($col=0; $col<3; $col++){
    echo "<li>".$Emp[$row][$col]."</li>";
}
echo "</ul>";
}

echo "<h1> Next code </h1>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>