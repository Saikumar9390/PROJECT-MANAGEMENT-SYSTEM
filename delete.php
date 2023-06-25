<?php
$con=mysqli_connect('localhost','root','','demo');
$id=$_GET['id'];
$query="DELETE FROM ADDFACULTY WHERE id='$id'";
$result=mysqli_query($con,$query);
if($result){
	echo "<script>alert ('Record deleted') </script>";}
header('Location:delete_faculty.php');

?>


