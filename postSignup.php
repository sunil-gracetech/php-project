<?php
include_once "connection.php";
if(isset($_POST))
{
extract($_POST);
$db=connectdb();

$exist="select count(*) as total from customer where email='".$email."'";
$myresult=mysqli_query($db,$exist);

$r= mysqli_fetch_assoc($myresult);
if($r["total"]<=0)
{
$pass=md5($pass);
$query="insert into customer (name,email,password,address) values('".$name."','".$email."','".$pass."','".$address."')";
$result=mysqli_query($db,$query);

if($result){
    header("location:dashboard.php?msg=Customer created successfully");
}
else{
    header("location:dashboard.php?msg=Customer not created successfully");
}
}
else{
    header("location:signup.php?msg=Customer already registered !");
}
}

?>