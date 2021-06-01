<?php

include('connect.php');
$id=$_GET['id'];
$qu="Delete from contact where id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Message Deleted');window.location.href='contactread.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>