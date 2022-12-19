<?php include("dbcon.php");
$Id=$_GET['Id'];
$query="SELECT * FROM user2 WHERE Id='$Id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>
<html>
<head>
	<title>Update form</title>
	<link rel="stylesheet" type="text/css" href="./style4.css">
</head>
<body>
	<div class="Registeration-form">
		<h1>Update form</h1>
		<form action="update_info.php" method="post">
			<p>Firstname</p>
				<input type="text" value="<?php echo $result['Firstname'];?>"name="Firstname" placeholder="Enter Firstname" required>
				<p>Lastname</p>
				<input type="text"value="<?php echo $result['Lastname'];?> "name="Lastname" placeholder="Enter Lastname"required>
				<p>Email</p>
				<input type="Email"value="<?php echo $result['Email'];?>" name="Email" pattern="[^ @]*@[^ @]*"  placeholder="Enter Email"required>
				<p>Phone number</p>
				<input type="number"value="<?php echo $result['Phone'];?>" name="Phone" placeholder="Please enter Phone number">

				<p>Password</p>
				<input type="Password" value="<?php echo $result['Password'];?>"name="Password" placeholder="Enter Password"required>
				
				
                <p>Date of birth</p>
				<input type="Date"value="<?php echo $result['DOB'];?>" name="DOB" placeholder="Enter DOB">
				<p>Bio</p>
				<input type="text"value="<?php echo $result['Bio'];?>" name="Bio" placeholder="Please enter bio">
				 <a href="display.php">
				 <button onclick="message()"type="submit">Update </button>
				</a>
				<button type="reset">Reset</button>
			
			</a>
		</form>

	</div>
	<!-- <script >funcation message(){
		alert ("upload");
	}
	</script> -->
</body>
</html>
