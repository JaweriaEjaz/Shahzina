

<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$n=$_POST["name"];
$e=$_POST["email"];
$c=$_POST["contact"];
$b=$_POST["booking"];
$eq=$_POST["enquiry"];


$q="insert into enquiry(Name,Email,Contact,Booking_ID,Customer_Enquiry) values('$n','$e','$c','$b','$eq') ";
$run=mysqli_query($con,$q);
if($run){
echo "<script> alert('Enquiry Has Been Sent Successfully'); </script>";

 }
else{
echo "<script> alert('Enquiry Unsuccessful'); </script>";
}

}


?>















