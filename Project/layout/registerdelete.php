<?php
if(session_id()==''){

    session_start();
}
include('connect.php');
$id=$_SESSION['UI'];
$qu="Delete from user where id='$id'";
$res=mysqli_query($con,$qu);
if($res){
echo "<script>alert('Account Deleted');window.location.href='logout.php'; </script>";
}
else{
echo mysqli_error($con);
}
?>