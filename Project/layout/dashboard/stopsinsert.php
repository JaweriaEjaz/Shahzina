<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$ro=$_POST["route1"];
$p=$_POST["service"];
$s=$_POST["start"];
$e=$_POST["end"];
$t=$_POST["time"];
$d=$_POST["distance"];
$tp=$_POST["totalprice"];
$a=$_POST["stname"];
$query="insert into stops(Route_Id,Price_Per_KM,Come_From,Departure,Time,Distance,Total_Price,Stops_Name) values ('$ro','$p','$s','$e','$t','$d','$tp','$a')";
$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('Inserted');window.location.href='stopsread.php'; </script>";
}
else
{
echo("Error description: " . mysqli_error($con));
}
}
else
{echo"error";}
?>

