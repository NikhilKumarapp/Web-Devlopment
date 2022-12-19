<?php include("dbcon.php");
$alert="<script>alert('Record upload successfully');</script>";

   $Firstname=$_POST['Firstname'];
	$Lastname=$_POST['Lastname'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Password=$_POST['Password'];
	$DOB=$_POST['DOB'];
	$Bio=$_POST['Bio'];
	$pass=md5($Password);

	

	$query="UPDATE user2 SET Firstname='$Firstname',Lastname='$Lastname',Email='$Email',Phone='$Phone',Password='$pass',DOB='$DOB',Bio='$Bio' WHERE Firstname='$Firstname'";

	$data = mysqli_query($conn,$query);
	if($data){
		
		
		echo '<script>alert("Record upload successfully")
            window.location.href="dashboard2.php";</script>';

		
	}
	else{
		echo 'failed';
	}

?>
