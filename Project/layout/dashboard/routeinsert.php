<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$a=$_POST["starting"];
$b=$_POST["ending"];
$g=$_POST["busservice"];
$c=$_POST["bus"];
$p=$_POST["name"];
$query="insert into route(Starting_Point,Ending_Point,Service,Bus,Route_Name) values ('$a','$b','$g','$c','$p')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Inserted');window.location.href='routeread.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}
else
{echo"error";}
?>