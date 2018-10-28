<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Book Returned</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$r_no=$_POST["r_no"];
$b_id=$_POST["b_id"];
 
$query = "delete from relation where r_no='$r_no' and b_id='$b_id' ";
$result = mysqli_query($db,$query);
 
?>
 
<h3> Book returned successfully </h3>
    
    <br>
<h4>to see the issued books</h4><a href="DisplayIssued.php" >click here</a>
 
</body>
</html>