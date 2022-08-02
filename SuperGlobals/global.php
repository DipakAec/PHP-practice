<?php
$x=15;
$y=78;
function MyAdd(){
    $GLOBALS['Z']=$GLOBALS['x']+$GLOBALS['y'];
    echo $GLOBALS['Z'];
    
}

MyAdd();
//echo $Z;

?>