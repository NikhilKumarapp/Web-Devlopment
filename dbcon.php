<?php
$servername="localhost";
$username="root";
$password="";
$db="DB";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("error detected".mysqli_error($con));
}
else{
	//echo "Connection stablished successfully";
}