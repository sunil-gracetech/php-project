<?php
include_once "connection.php";
if(isset($_POST))
{
extract($_POST);
$db=connectdb();

$exist="select count(*) as total from employee where email='".$email."'";
$myresult=mysqli_query($db,$exist);

$r= mysqli_fetch_assoc($myresult);
if($r["total"]<=0)
{
$query="insert into employee (name,email,salary,gender,dept,isActive) values('".$name."','".$email."','".$salary."','".$gender."','".$dept."','".$isActive."')";
$result=mysqli_query($db,$query);

if($result){
    header("location:dashboard.php?msg=Employee created successfully");
}
else{
    header("location:dashboard.php?msg=Employee not created successfully");
}
}
else{
    header("location:createEmployee.php?msg=Employee already registered !");
}
}

?>