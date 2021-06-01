<?php
include('connect.php');
if(isset($_POST["submit"]))
{
$a=$_POST["name"];
$b=$_POST["username"];
$g=$_POST["password"];
$c=$_POST["email"];
$query="insert into user(Name,UserName,Password,Email) values ('$a','$b','$g','$c')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Welcome To SRC-Travel Agency'); window.location.href='./Loginuser.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}
?>