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
            <center><h1>ADD SCORE</h1></center>
            <div>
                <input type="tel" placeholder="Enter Project id" required name="id" />
            </div>
            <div>
                <input type="tel" placeholder="Enter Score " required name="score" />
            </div>
            <div>
                <input type="text" placeholder="Remarks " required name="remark" />
            </div>

        
<div>
<br></br>
        <input type="submit" value="Submit" name="submit"/>
            </div>

        </form>

<?php     
if(isset($_POST['submit'])){
    //echo "Hi";
$id=$_POST['id'];
$score=$_POST['score'];
$remark=$_POST['remark'];
if($id==''){
    echo 'id empty';
}
else if($score==''){
    echo 'score empty';
}
else if($remark==''){
    echo 'remark empty';
}
else if($id=='' || $score=='' || $remark=='')
{
echo "Please fill the empty field.";
}
$sql="insert into add_score (ID,MAKS,REMARKS) values('$id','$score','$remark')";
$res=mysqli_query($con,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
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
