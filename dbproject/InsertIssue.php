<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Book Issued</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$r_no=$_POST["r_no"];
$b_id=$_POST["b_id"];
 
$query = "insert into relation(r_id,b_id,r_no)values('NULL','$b_id','$r_no')";
$result = mysqli_query($db,$query);
 
?>
 
<h3> Book issued successfully </h3>
 
</body>
</html>