<?php

$servername="localhost";
$username="root";
$password="";
$dbname="ecom_store";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection error".$conn->connect_error);
}

echo "connected successfully<br>";
?>