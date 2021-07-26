<?php
echo "<pre>";
//echo readfile("uploads/angular txt.txt");
$fname="uploads/angular2.txt";
#$file=fopen($fname, "r");
#$size=filesize($fname);
#$data=fread($file, $size);
#echo $data;

#$file=fopen($fname, "w");

$file=fopen($fname, "a") or die("file open error !");

$data="hello i am new data from php 2 \n";

fwrite($file, $data);
fclose($file);
echo "file updated....";


?>