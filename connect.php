<?php

    $Firstname=$_POST['Firstname'];
	$Lastname=$_POST['Lastname'];
	$Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
	$Password=$_POST['Password'];
	$DOB=$_POST['DOB'];
	$Bio=$_POST['Bio'];
	 

	$conn=new mysqli('localhost','root','','db');
	if($conn->connect_error){
		die('Connection failed :'.$conn->connect_error);

	}
	else{
		$passwordmd5 = md5($Password);
		$stmt=$conn->prepare("INSERT INTO user2(Firstname,Lastname,Email,Phone,Password,DOB,Bio)
		values(?,?,?,?,?,?,?)");
		$stmt->bind_param("sssisss",$Firstname,$Lastname,$Email,$Phone,$passwordmd5,$DOB,$Bio);
		$stmt->execute();

		echo '<script>alert("Record inserted successfully")
		window.location.href="Login.php";</script>';
		

        $stmt->close();
        $conn->close();


	}
	?>
	