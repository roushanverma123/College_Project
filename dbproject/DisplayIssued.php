<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>ISSUED BOOKS</h2></center>
<br>
<?php
include("DBConnection.php");
$query = "select student_info.roll_no,sname,department,book_info.isbn,title from student_info,book_info,relation where student_info.roll_no = relation.r_no and book_info.isbn = relation.b_id "; 
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ROLL_NO </th>
<th> NAME </th>
<th> DEPARTMENT </th>
<th> BOOK_NO </th>
<th> TITLE </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["roll_no"];?> </td>
<td><?php echo $row["sname"];?> </td>
<td><?php echo $row["department"];?> </td>
<td><?php echo $row["isbn"];?> </td>
<td><?php echo $row["title"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found </center>" ;
?>
</table>
</body>
</html>
<br>