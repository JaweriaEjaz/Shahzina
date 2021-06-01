<?php
include('connect.php');
if(isset($_POST["btn"]))
{

$a=$_POST["sto"];
$b=$_POST["date"];
$q="select * from stops join route on stops.Route_Id=route.Id join bus on route.Bus=bus.Bus_Id where stops.Stops_Id='$a'";
$rows=mysqli_query($con,$q);
$r1=mysqli_fetch_assoc($rows);
$s=$r1['Seats'];
$q="insert into dateview(Stop_Id,Date,Available_Seats) values('$a','$b','$s')";
$run=mysqli_query($con,$q);
if($run){
	echo "<script>alert('Inserted');window.location.href='dateviewread.php';</script>";
}
else{
	echo "<script>alert('Error');window.location.href='date.php';</script>";
}
}
?>