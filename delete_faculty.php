<?php
$con = mysqli_connect('localhost','root','','demo');
$query="select * from addfaculty";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin-top: 50px;">
<table align="center" border="2px" style="width:900px;line-height:50px; ">
	<tr>
		<th colspan="7" class="aa"><h2>FACULTY RECORD</h2></th></tr>
		<t>
		<th>NAME</th>
		<th>ID</th>
		<th>EMAIL</th>
		<th>PHONE NUMBER</th>
		<th>BRANCH</th>
		<th>PASSWORD</th>
		<th>DELETE</th></t>
		<?php
			while($rows=mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['email']; ?></td>
					<td><?php echo $rows['phone']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['password']; ?></td>
				   <td>
				   	<a href='delete.php?id=<?php echo $rows['id'];?>'onclick='return checkdelete()'>
				   	<button type="button" style="background-color:green;width: 100% ;height: 70%;" class="btn btn-danger">Delete</button>
				   	
				   </td>
				</tr>							
		<?php
			}			
		?>		
</table>
<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Are you sure you want to Delete this record');
	}

</script>
</body>
</html>

