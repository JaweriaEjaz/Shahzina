<?php
include('connect.php');
if(isset($_POST["btn"]))
{

$a=$_POST["about"];
$c=$_POST["contactno"];
$e=$_POST["email"];
$ad=$_POST["address"];
$h=$_POST["hr"];
$image = $_FILES['image']['name'];
$imgtn=$_FILES['image']['tmp_name'];
$imgty=$_FILES['image']['type'];
$imgsi=$_FILES['image']['size'];
$folder="myimages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg")
{
if($imgsi<=1000000)
{
$path= $folder . $image;
move_uploaded_file($imgtn,$path);


$q="insert into about(Image,About,ContactNo,Email,Address,aboutfooter) values('$path','$a','$c','$e','$ad','$h') ";
$run=mysqli_query($con,$q);
if($run){
echo "<script> alert('Inserted');window.location.href='aboutread.php'; </script>";

}
else{
echo "<script> alert('Insertion Failed'); </script>";
}

}


else
{
echo "<script> alert('Image Size Error'); </script>";
}


}

else{
echo "<script> alert('Image Format Error'); </script>";
}
}
?>















