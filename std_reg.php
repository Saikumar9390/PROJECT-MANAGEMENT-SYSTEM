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
            <center><h1>ADD STUDENT BATCH</h1></center>
            <div>
                <input type="text" placeholder="Enter Batch Name" required name="bname" />
            </div>
            <div>
                <input type="text" placeholder="Enter Roll No Student 1" required name="roll1" />
            </div>
            <div>
                <input type="text" placeholder="Enter Roll No Student 2" required name="roll2" />
            </div>
            <div>
                <input type="text" placeholder="Enter Roll No Student 3" required name="roll3" />
            </div>
            <div>
                <input type="text" placeholder="Enter Roll No Student 4" required name="roll4" />
            </div>
        <div>
                <input type="text" placeholder="Enter Project title" required name="title" />
            </div>
            </div>
            <div>
                <input type="text" placeholder="Enter branch" required name="branch" />
            </div>
            </div>
            <div>
                <input type="text" placeholder="Enter Section" required name="sname" />
            </div>
        
        <div>
                <input type="text" placeholder="Enter Projrct type" required name="ptname" />
            </div>
<div>
                <input type="tel" placeholder="Enter Project ID" required name="pid" />
            </div>
        <div>
                <input type="password" placeholder=" Enter password" required name="password"/>
            </div>
<div>
<br>
        
        <input type="submit" value="Submit" name="submit"/>
            </div>

        </form>

<?php     
if(isset($_POST['submit'])){
$bname=$_POST['bname'];
$roll1=$_POST['roll1'];
$roll2=$_POST['roll2'];
$roll3=$_POST['roll3'];
$roll4=$_POST['roll4'];
$title=$_POST['title'];
$branch=$_POST['branch'];
$sname=$_POST['sname'];
$ptname=$_POST['ptname'];
$pid=$_POST['pid'];
$password=$_POST['password'];
if($bname==''){
    echo 'bname empty';
}
else if($roll1==''){
    echo 'Roll1 empty';
}
else if($roll2==''){
    echo 'Roll2 empty';
}
else if($roll3==''){
    echo 'Roll3 empty';
}
else if($roll4==''){
    echo 'Roll4 empty';
}
else if($title==''){
    echo 'Title empty';
}
else if($branch==''){
    echo 'Branch empty';
}
else if($sname==''){
    echo 'sname empty';
}
else if($sname==''){
    echo 'sname empty';
}
else if($pid==''){
    echo 'proj_id empty';
}
else if($password==''){
 echo 'Password empty';
}
else if($bname==''|| $roll1=='' || $roll2=='' || $roll3=='' || $roll4=='' || $title=='' || $branch=='' || $sname=='' ||$ptname=='' || $pid=='' || $password=='')
{
echo "Please fill the empty field.";
}

$sql="insert into student_reg (batch_name,rn1,rn2,rn3,rn4,proj_title,branch,section,proj_type,pid,password) values('$bname','$roll1','$roll2','$roll3','$roll4','$title','$branch','$sname','$ptname','$pid','$password')";
$res=mysqli_query($con,$sql) or die("<b>Error:</b> PID already exists<br/>" . mysqli_error($con));
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
