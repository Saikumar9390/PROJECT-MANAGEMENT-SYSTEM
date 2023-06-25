<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$con = mysqli_connect('localhost','root','','demo');
if(mysqli_connect_errno()){
    echo "Failed to connect ".mysqli_connect_error();
}
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="stdregister.css" />
</head>
<body>

<center>
<div class="container">
    <section id="content">
        <form name="frmImage" enctype="multipart/form-data" action="" method="POST">
            <center><h1>ADD FACULTY</h1></center>
            <div>
                <input type="text" placeholder="Enter Name" required name="name" />
            </div>
            <div>
                <input type="text" placeholder="Enter Id" required name="roll" />
            </div>
        <div>
                <input type="email" placeholder="Enter email-id" required name="email" />
            </div>
        
        <div>
                <input type="tel" placeholder="Enter phone number" required name="phone" />
            </div>
<div>
                <input type="text" placeholder="Enter branch" required name="branch" />
            </div>
        <div>
                <input type="password" placeholder="password" required name="password"/>
            </div>
<div>
<br></br>
               
        
        <input type="submit" value="Submit" name="submit"/>
            </div>

        </form>

<?php     
if(isset($_POST['submit'])){
 
$name=$_POST['name'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$branch=$_POST['branch'];
$password=$_POST['password'];
if($name==''){
    echo 'Name empty';
}
else if($roll==''){
    echo 'Roll empty';
}
else if($email==''){
    echo 'Email empty';
}
else if($phone==''){
    echo 'Phone empty';
}
else if($branch==''){
    echo 'Branch empty';
}
else if($password==''){
 echo 'Password empty';
}

else if($name=='' || $roll=='' || $email=='' || $phone=='' || $branch=='' || $password=='')
{
echo "Please fill the empty field.";
}
$sql="insert into addfaculty (name,id,email,phone,branch,password) values('$name','$roll','$email','$phone','$branch','$password')";
$res=mysqli_query($con,$sql) or die("<b>Error:</b> Enterd existing id<br/>" . mysqli_error($con));
if($res)
{
echo "Record successfully inserted";
}
else{
    echo "There is some problem in inserting record";

}
}
?>
</div>
</body>
</html>
