<?php
include('dashboard.php');
include('connect.php');
$id=$_GET['id'];
$qu="Delete from route where Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='routeread.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>