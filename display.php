<html>
<head>
	<title>Display all details</title>
	<style>
		body{
			background: #D071f9;

		}
		table{
			background-color: white;
		}
		
	</style>
<?php
include ("dbcon.php");
$query="SELECT * FROM user2";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total!=0){
	?>
	<h2 align="center"><mark>Displaying all details<mark></h2>
	<center><table border="1" cellspacing="7" width="80%">
		<tr>
		<th width="10%">Firstname</th>
		<th width="10%">Lastname</th>
		<th width="10%">Email</th>
		<th width="10%">Phone</th>
		<th width="10%">Password</th>
		<th width="10%">DOB</th>
		<th width="10%">Bio</th>
		

	</tr>
		
	
	<?php
	
	while($result=mysqli_fetch_assoc($data)){
		echo"<tr>
		
		<td>".$result['Firstname']."</td>
		<td>".$result['Lastname']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Phone']."</td>
		<td>".$result['Password']."</td>
		<td>".$result['DOB']."</td>
		<td>".$result['Bio']."</td>
		
	    </tr>";
		

	}
}
else{
	echo "no records founds";
}
?>
</table>
</center>
