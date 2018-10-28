<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Issue Books</h2></center>

<form action="InsertIssue.php" method="post">
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
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
    
<?php
include("DBConnection.php");
   
$query = "select ISBN,Title,Author,Edition,Publication from book_info ";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books </center>" ;
?>
</table>
</body>
</html>