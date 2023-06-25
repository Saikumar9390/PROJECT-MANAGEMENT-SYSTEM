<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" align="center">
	<div class="row">
		<form action="index.php" method="post" enctype="multipart/form-data">
			<h3>Upload Files</h3>
			<input type="file" name="myfile"><br>
			 <input type="text" placeholder="Enter Id" required name="id" /><br> 
			<button type="submit" name="save">Upload</button>
			
		</form>	
		
	</div>
	<div class="row">
		<table align="center" border="1px" style="width:900px;line-height:50px;">
			<thead>
				<th>ID</th>
				<th>FileName</th>
				<th>Size(in mb)</th>
				<th>Downloads</th>
				<th>Action</th>

		</thead>
			<tbody>
				<?php while($files=mysqli_fetch_assoc($result)){?> 
					<tr>
						<td><?php echo $files['id'];?></td>
						<td><?php echo $files['name'];?></td>
						<td><?php echo $files['size']/1000;?></td>
						<td><?php echo $files['downloads'];?></td>
						<td>
							<a href="index.php?file_id=<?php echo $files['id']?>"><button type="button" style="background-color:green;width: 100% ;height: 75%;" class="btn btn-danger">Download</button></a>
        </a>
						</td>
					</tr>
					<?php }?>

			</tbody>
		</table>
	</div>
</div>

</body>
</html>
