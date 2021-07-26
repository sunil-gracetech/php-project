<?php

function connectdb(){
    $host="localhost";
    $user="root";
    $password="12345";
    $db="northwind";
    $con=mysqli_connect($host,$user,$password,$db);
    return $con;
}

?>