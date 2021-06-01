<?php
include('dashboard.php');
include('connect.php');
$id=$_GET['id'];
$qu="Delete from dateview where  Date_Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='dateviewread.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>