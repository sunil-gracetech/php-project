<?php

/*
$ip="127.3.4.5";
if(filter_var($ip,FILTER_VALIDATE_IP)){
	echo "valid IP";
}
else{
	echo "Invalid IP";
}
*/

$email="xyz@gmail.com";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "valid Email";
}
else{
	echo "Invalid Email";
}
?>