<?php
include('connect.php');
  $i=$_GET['id'];
  $a=$_POST["name"];
 $e=$_POST["email"];
 $p=$_POST["pass"];

      $q="update user set Name ='$a',Email='$e',Password='$p' where Id='$i'";
      $res=mysqli_query($con,$q);
      if($res)
      {
        echo "<script> alert('Updated'); window.location.href='editprofile2.php';</script>";
      }
      else
      {
        echo "<script> alert('Error'); </script>";
      }
    
 


?>