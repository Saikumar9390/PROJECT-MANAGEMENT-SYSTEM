<?php 
session_start();
$con=mysqli_connect("localhost","root","","demo") or die("Connection Failed");
if(!empty($_POST['save'])){
    
    $id=$_POST['un'];
    $password=$_POST['pw'];
    
    $sql="select * from addfaculty where id='".$id."'AND password='".$password."' limit 1";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){

        echo "<align=centre><font color=blue> You Have Successfully Logged in";
        
        header("Location: ttt.html");  
    }
    else{
        echo " <align=centre><font color=red>You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
	
<body style=" background-image: url('back_image.jpg');background-repeat: no-repeat;background-size:1575px 800px
">
	<h1 align="center" style="color: white;">FACULTY LOGIN</h1>
	<div class="container" style="border-radius:50%;background-color: #ffffff54;margin-right: 550px;margin-left: 550px;padding-top: 10px;padding-bottom: 10px;" align="center">
	<img src="login_image.jpg"/ style="border-radius:50%">
		<form method='POST' action=''>
			<div class="form-input" style="font-size: 20px;">
				<b>Enter UserID</b><br><input type="text" name="un" placeholder="Enter the User id" required="username" />		
			</div>
			<div class="form-input"style="font-size: 20px;">
				<b>Enter Password</b><br><input type="password" name="pw" placeholder="password"required="password"/>
			</div>
			<br><input type="submit" name="save" value="LOGIN" class="btn-login"/>
		</form>
	</div>

</body>
</html>