<?php 

session_start();
$con=mysqli_connect("localhost","root","","demo") or die("Connection Failed");
if(!empty($_POST['save'])){
    
    $pid=$_POST['un'];
    $password=$_POST['pw'];
    
    $sql="select * from student_reg where pid='".$pid."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo " You Have Successfully Logged in";
        header("Location: tt.html");
    }
    else{
        echo " You Have Entered Incorrect Password";
        
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
	
<body style=" background-image: url('https://image.shutterstock.com/image-photo/student-word-written-on-wood-260nw-296711855.jpg');background-repeat: no-repeat;background-size:cover;">
	<h1 align="center" style="color: white;">STUDENT LOGIN</h1>
	<div class="container"  style="border-radius:50%;background-color: #ffffff54;margin-right: 550px;margin-left: 550px;padding-top: 10px;padding-bottom: 10px;"  align="center">
	<img src="login_image.jpg"/ style="border-radius:50%">
		<form method='POST'  action=''>
			<div class="form-input"style="font-size: 20px;">
				<b>Enter UserID</b><br><input type="text" name="un" placeholder="Enter the ID" required="id"/>	
			</div>
			<div class="form-input"style="font-size: 20px;">
				<b>Enter Password</b><br><input type="password" name="pw" placeholder="password" required="password"/>
			</div>
			<br><input type="submit" name="save" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>