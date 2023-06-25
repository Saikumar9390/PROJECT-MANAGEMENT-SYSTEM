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
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table align="center" border="1px" style="width:1500px;line-height:40px;">
	<tr>
		<th colspan="11" class="aa"><h2>Student RECORD</h2></th></tr>
		<t>
		<th>BATCH NAME</th>
		<th>ROLLNO OF STUDENT 1</th>
		<th>ROLLNO OF STUDENT 2</th>
		<th>ROLLNO OF STUDENT 3</th>
		<th>ROLLNO OF STUDENT 4</th>
		<th>PROJECT TITLE</th>
		<th>BRANCH</th>
		<th>SECTION</th>
		<th>PROJECT TYPE</th>
		<th>PROJECT ID</th>
		<th>PASSWORD</th></t>
		<?php
			while($rows=mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?php echo $rows['batch_name']; ?></td>
					<td><?php echo $rows['rn1']; ?></td>
					<td><?php echo $rows['rn2']; ?></td>
					<td><?php echo $rows['rn3']; ?></td>
					<td><?php echo $rows['rn4']; ?></td>
					<td><?php echo $rows['proj_title']; ?></td>
					<td><?php echo $rows['branch']; ?></td>
					<td><?php echo $rows['section']; ?></td>
					<td><?php echo $rows['proj_type']; ?></td>
					<td><?php echo $rows['pid']; ?></td>
					
					<td><?php echo $rows['password']; ?></td>
				  
				</tr>							
		<?php
			}			
		?>		
</table>

</script>
</body>
</html>

