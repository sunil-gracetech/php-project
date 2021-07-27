<?php
include_once "connection.php";
if(isset($_POST))
{
extract($_POST);
$db=connectdb();

$exist="select count(*) as total from employee where email='".$email."'";
$myresult=mysqli_query($db,$exist);

$r= mysqli_fetch_assoc($myresult);
if($r["total"]>=1)
{
//$query="insert into employee (name,email,salary,gender,dept,isActive) values('".$name."','".$email."','".$salary."','".$gender."','".$dept."','".$isActive."')";
$query="update employee set name='".$name."', salary='".$salary."',gender='".$gender."' where id='".$id."'";
$result=mysqli_query($db,$query);

if($result){
    header("location:dashboard.php?msg=Employee updated successfully");
}
else{
    header("location:dashboard.php?msg=Employee not update successfully");
}
}
else{
    header("location:edit.php?msg=Employee not found !");
}
}

?>