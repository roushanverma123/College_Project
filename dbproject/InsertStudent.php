
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>ISSUE BOOKS</h2></center>
<br>
 
<?php
include("DBConnection.php");
 
$roll_no=$_POST["roll_no"];
$sname=$_POST["sname"];
$department=$_POST["department"];
$mobile_no=$_POST["mobile_no"];
$email=$_POST["email"];

 
$query = "insert into student_info(roll_no,sname,department,mobile_no,email) values('$roll_no','$sname','$department','$mobile_no','$email')"; //Insert query to add student details into the student_info table
$result = mysqli_query($db,$query);
 
?>
 
<h3> Book issued successfully </h3>
 
<a href="SearchBooks.php"> To search for the Book information click here </a>
 
</body>
</html>