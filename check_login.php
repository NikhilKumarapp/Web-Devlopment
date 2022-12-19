<?php
$Email=$_POST['Email'];
$Password=md5($_POST['Password']);
$conn=new mysqli("localhost","root"," ","db");


if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
else{
	$stmt= $conn->prepare("SELECT * FROM user2 WHERE Email=?");
	$stmt->bind_param("s",$Email);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0){
		$data = $stmt_result->fetch_assoc();
		if($data['Password'] === $Password){
			session_start();
			$_SESSION['login']=true;
			$_SESSION['email'] = $Email;
			$_SESSION['id']=$data['Id'];
			$_SESSION['username']=$data['Firstname'];
			$_SESSION['username1']=$data['Lastname'];

		
			
			echo '<script>alert("login successfully")
            window.location.href="dashboard2.php";</script>';
	

		}
		else{
			echo '<script>alert("Invalid Email or Password")
            window.location.href="login.php";</script>';
	
		}

	}
	
}
?>