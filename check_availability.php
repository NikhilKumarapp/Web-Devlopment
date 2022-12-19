<?php
# create database connection
$connect = mysqli_connect("localhost","root","","db");

if(!empty($_POST["Email"])) {
  $query = "SELECT * FROM user2 WHERE Email='" . $_POST["Email"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Sorry Email already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green'> Email available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>
