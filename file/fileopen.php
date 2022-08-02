<?php
$myfile = fopen("newfile_27_june.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("newfile_27_june.txt"));
// echo readfile("newfile_27_june.txt")    [This is anather way to read files]

fclose($myfile);
?>