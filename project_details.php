<?php
$con = mysqli_connect('localhost','root','','demo');
$query="select * from student_reg";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<table align="center" border="1px" style="width:1500px;line-height:40px;">
	<tr>
		<th colspan="11" class="aa"><h2>Student RECORD</h2></th></tr>
		<t>
		<th>BATCH NAME</th>
		<th>PROJECT TITLE</th>
		<th>BRANCH</th>
		<th>SECTION</th>
		<th>PROJECT TYPE</th>
		<th>PROJECT ID</th>
		<?php
			while($rows=mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?php echo $rows['batch_name']; ?></td>
					<td><?php echo $rows['proj_title']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['section']; ?></td>
					<td><?php echo $rows['proj_type']; ?></td>
					<td><?php echo $rows['pid']; ?></td>
				  <!-- <td>
				   	<a href='delete.php?id=$rows[id]'onclick='return checkdelete()'>
				   	<button type="button" style="background-color:green;" class="btn btn-danger">Delete</button>
				   </td>-->
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

