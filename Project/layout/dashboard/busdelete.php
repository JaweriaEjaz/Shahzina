<?php
include('connect.php');
$id=$_GET['id'];
$qu="Delete from bus where Bus_Id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Record Deleted');window.location.href='busread.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>