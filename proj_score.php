<?php
$con = mysqli_connect('localhost','root','','demo');
$query="select * from add_score";
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
<body style="margin-top: 40px;
    ">
<table align="center" border="1px"  style="width:600px;line-height:40px;">
	<tr>
		<th colspan=6 class="aa"><h2>MARKS RECORD</h2></th></tr>
		<t>
		<th>PROJECT ID</th>
		<th>MARKS</th>
		<th>REMARKS</th>
		<?php
			while($rows=mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?php echo $rows['ID']; ?></td>
					<td><?php echo $rows['MAKS']; ?></td>
					<td><?php echo $rows['REMARKS']; ?></td>
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

