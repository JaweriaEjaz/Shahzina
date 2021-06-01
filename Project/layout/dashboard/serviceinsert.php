<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$n=$_POST["Service"];
$p=$_POST["price"];


$q="insert into services(Service,price) values('$n','$p') ";
$run=mysqli_query($con,$q);
if($run){
echo "<script> alert('Inserted');window.location.href='serviceread.php'; </script>";

}
else{
echo "<script> alert('Insertion Failed'); </script>";
}


}
?>















