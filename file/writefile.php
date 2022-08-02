<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "I am over writting this file.\n";
fwrite($myfile, $txt);
$txt = "This is new text line 2.\n";
fwrite($myfile, $txt);
fclose($myfile);
?>