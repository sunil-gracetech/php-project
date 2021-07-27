<?php
include_once "connection.php";

session_start();

if(isset($_POST["sub"]))
{
	$email=$_POST["email"];
	$pass=md5($_POST["password"]);
	$query="select count(*) as total from customer where email='".$email."' and password='".$pass."'";
	$db=connectdb();
	$result=mysqli_query($db,$query);
	$row=mysqli_fetch_array($result);
	if($row["total"]>=1){
		$_SESSION["email"]=$email;
		if(isset($_POST["chk"])){
			$data=$email.",".$pass;
			setcookie("user",$data);
		}
		header("location:dashboard.php");
		
	}
	else{
		header("location:index.php?error=Invalid login credential !");
	}
	
}


?>