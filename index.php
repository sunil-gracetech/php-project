

<?php

if(isset($_COOKIE["user"]))
{
	$data=$_COOKIE["user"];
	$data= explode(',', $data);
	$email=$data[0];
	$pass=$data[1];
}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="card">
<form action="signin.php" method="post">
	<table>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email" value="<?php echo @$email; ?>"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" name="password" value="<?php echo @$pass; ?>"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="checkbox" name="chk">
				<span>Remember me ?</span>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="sub" value="Signin"></td>
		</tr>

		<tr>
			<td></td>
			<td>
				<p>
					<?php echo @$_GET["error"]; ?>
				</p>
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>