<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$a=$_POST["seat"];
$c=$_POST["plate"];
$p=$_POST["date"];
$query="insert into bus(Seats,Plate,Purchase_Date) values ('$a','$c','$p')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Inserted');window.location.href='busread.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}
?>