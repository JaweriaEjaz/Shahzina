
<?php

if(session_id()==''){

    session_start();
}
?>
<?php
include('connect.php');
if(isset($_POST['submit'])){
$c=$_SESSION["UI"];
$d=$_POST["id"];
$s=$_POST["s1"];
$t=$_POST["tp"];
$av=$_POST["av"];
$new=$av-$s;
$query="insert into booking(Client_Id,Datee_Id,Booking_Seats,Booking_Price,Status) values ('$c','$d','$s','$t','Done')";
$result=mysqli_query($con,$query);
$query1="UPDATE dateview SET Available_Seats='$new' WHERE Date_Id='$d'";
$result1=mysqli_query($con,$query1);
if($result)
{
echo "<script> alert('Booking Done'); window.location.href='./bus.php'; </script>";
}
else
{
echo "<script> alert('Error'); </script>";
}
}


?>