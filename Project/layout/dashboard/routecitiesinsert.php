<?php
include('connect.php');
if(isset($_POST["btn"]))
{

$a=$_POST["ro"];
$b=$_POST["cty"];

$query="insert into routecities(Routes_Id,Cities) values ('$a','$b')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Inserted');window.location.href='routecitiesread.php'; </script>";
}
else
{
echo("Error description: " . mysqli_error($con));
}
}
else
{echo"error";}
?>