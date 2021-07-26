<?php
include_once "connection.php";
if(isset($_POST))
{
extract($_POST);
$query="insert into employee (name,email,salary,gender,dept,isActive) values('".$name."','".$email."','".$salary."','".$gender."','".$dept."','".$isActive."')";
$db=connectdb();
$result=mysqli_query($db,$query);
if($result){
    header("location:dashboard.php?msg=Employee created successfully");
}
else{
    header("location:dashboard.php?msg=Employee not created successfully");
}
}

?>