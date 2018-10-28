<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Return Books</h2></center>

<form action="DeleteIssue.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter RollNo :</td>
<td> <input type="text" name="r_no" size="48"> </td>
</tr>
<tr>
<td> Enter Book ID :</td>
<td> <input type="text" name="b_id" size="48"> </td>
</tr>
    <tr>
<td>
<input type="submit" value="Return">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>

    
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