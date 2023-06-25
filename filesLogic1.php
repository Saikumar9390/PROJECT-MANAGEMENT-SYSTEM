<?php
error_reporting(E_ALL);
$conn=mysqli_connect('localhost','root','','demo');
$sql="SELECT * FROM files";
$result=mysqli_query($conn,$sql);
$files=mysqli_num_rows($result);

if(isset($_POST['save']))
{
   
 $filename=$_FILES['myfile']['name'];
 $destination='uploads/'.$filename;
 $extension=pathinfo($filename,PATHINFO_EXTENSION);
 $file=$_FILES['myfile']['tmp_name'];
 $size=$_FILES['myfile']['size'];
 if(!in_array($extension,['zip','pdf','png','jpg','docx','pptx']))
 {
  echo "your file extension must be .zip, .pdf or .png";
 }
 elseif($_FILES['myfile']['size']>10000000)
 {
  echo "file is too large";
 }
 else
 {
  if(move_uploaded_file($file,$destination))
  {
     $sql="INSERT INTO files(id,name,size,downloads) VALUES('$id',$filename','$size',0)";
     if(mysqli_query($conn,$sql))
     {
        echo "file uploaded successfully";
        exit;
     }
     else
     {
        echo "failed to upload file";
     }
  }
 }
}
if(isset($_GET['file_id']))
{
  $id=$_GET['file_id'];
  $sql="SELECT * FROM files WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $file=mysqli_fetch_assoc($result);
  $filepath='uploads/'.$file['name'];
  if(file_exists($filepath))
  {
    header('Content-Type:application/octet_stream');
    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename=' .basename($filepath));
    header('Expires: 0');
    header('Cache-Control:must-revalidate');
    header('Pragma:public');
    header('Content-Length:'.filesize('uploads/'.$file['name']));
    readfile('uploads/'.$file['name']);
    $newCount=$file['downloads']+1;
    $updatQuery="UPDATE files SET downloads=$newCount WHERE id=$id";
    mysqli_query($conn,$updatQuery);
    exit;
}
}
?>