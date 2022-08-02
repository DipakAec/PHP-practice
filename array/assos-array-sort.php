<?php
$ages=array("Anil"=>"25","Sunil"=>"30","Nikhil"=>"48","Vikil"=>"85");
// asort($ages); //sort associative arrays in ascending order, according to the value
//ksort($ages); //sort associative arrays in ascending order, according to the key
//arsort($ages);  //sort associative arrays in descending order, according to the value
krsort($ages);  //sort associative arrays in descending order, according to the key

foreach($ages as $x=>$x_value){
    echo "Name is " .$x .", Age is ".$x_value ."<br>";
}


?>