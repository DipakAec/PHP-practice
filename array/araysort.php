<?php
$num=array(7,8,3,1,9);
//sort($num);
rsort($num);
$numlen=count($num);
echo "Sorting of array: <br>";
for($x=0; $x<$numlen ;$x++){
    echo $num[$x] ."<br>";
}

?>