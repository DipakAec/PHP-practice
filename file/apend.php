<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "I am appending this file.\n";
fwrite($myfile, $txt);
$txt = "This is new line by append.\n";
fwrite($myfile, $txt);

fclose($myfile);
?>