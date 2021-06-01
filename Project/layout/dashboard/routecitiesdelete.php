<?php
include('dashboard.php');
include('connect.php');
$id=$_GET['id'];
$qu="Delete from routecities where RC_Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='routecitiesread.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>