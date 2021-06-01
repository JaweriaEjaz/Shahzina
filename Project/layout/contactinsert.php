<?php
include('connect.php');
if(isset($_POST["submit"]))
{
$n=$_POST["name"];
$e=$_POST["email"];

$m=$_POST["message"];
$q="insert into Contact(Name,Email,Message) values('$n','$e','$m') ";
$run=mysqli_query($con,$q);
if($run){
echo "<script> alert('Message Has Been Sent Successfully');window.location.href='contact.php'; </script>";

 }
else{
echo "<script> alert('Message Unsuccessful'); </script>";
}
}
?>
