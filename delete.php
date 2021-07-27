<?php
include_once "connection.php";

if( isset($_GET["id"]))
{
$query="delete from employee where id='".$_GET["id"]."'";
$db=connectdb();
$result=mysqli_query($db,$query);
if($result){
    header("location:dashboard.php?msg=Employee deleted successfully");
}
else{
    header("location:dashboard.php?msg=Employee not deleted successfully"); 
}
}
else{
    header("location:signout.php");

}

?>