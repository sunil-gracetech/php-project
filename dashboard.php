<?php
include_once "connection.php";
$db=connectdb();
session_start();
if(!isset($_SESSION["email"])){
	header("location:index.php?error=user must be login first");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include "header.php"; ?>
<!-- 
<form method="post" action="upload.php" enctype="multipart/form-data">
<table>
	<tr>
		<th><label>Please Select File : </label></th>
		<th><input type="file" name="image"></th>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="sub" value="Upload"></td>
	</tr>
	<tr><td></td>
		<td>
			<?php
			echo @$_GET["msg"];;
			 ?>
		</td>
	</tr>
</table>
</form> -->
<div class="container">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Dept</th>
			<th>Salary</th>
			<th>Gender</th>
			<th>IsActive</th>
			<th>Action</th>
		</tr>
	</thead>
<tbody>
<?php
$query="select* from employee";
$result=mysqli_query($db,$query);
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["dept"]; ?></td>
	<td><?php echo $row["salary"]; ?></td>
	<td><?php echo $row["gender"]; ?></td>
	<td><?php echo $row["isActive"]==1?"Active":"InActive"; ?></td>
	<td>
		<a href='edit.php?id=<?php echo $row["id"]; ?>' onclick="return confirm('Are you sure to edit this record')">Edit</a>|
		<a href='delete.php?id=<?php echo $row["id"]; ?>' onclick="return confirm('Are you sure to delete this record')">Delete</a>
</td>

</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>