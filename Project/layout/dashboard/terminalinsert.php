

<?php
include('connect.php');
if(isset($_POST["btn"]))
{
$c=$_POST["city"];
$p=$_POST["contact"];
$a=$_POST["address"];
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


$q="insert into terminal(Image,City,Contact,Address) values('$path','$c','$p','$a') ";
$run=mysqli_query($con,$q);
if($run){
echo "<script> alert('Inserted');window.location.href='terminalread.php'; </script>";

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















