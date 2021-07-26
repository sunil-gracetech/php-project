<?php
//print_r($_FILES);
//echo print_r($_FILES["image"]);
if($_FILES["image"]["size"]>0)
{

if($_FILES["image"]["size"]<=1024*100)
{

$ext=end(explode(".", $_FILES["image"]["name"]));
if($ext=="jpg" ||$ext=="jpeg"||$ext=="png")
{
$path="uploads/";
move_uploaded_file($_FILES["image"]["tmp_name"], $path.$_FILES["image"]["name"]);
header("location:dashboard.php?msg=File uploaded successfully");
}
else{
header("location:dashboard.php?msg=Please select image file only");

}
}
else{
header("location:dashboard.php?msg=please select max file size 100kb !");

}
}
else{
	header("location:dashboard.php?msg=please select file !");
}
?>