<?php
include('connect.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
<title>SRC _ Traveling Agencies</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assetsmainlayout/css/bootstrap.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/linericon/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href=assetsmainlayout/"vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="assetsmainlayout/css/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/responsive.css">

<style>
ul{list-style-type:none;}

</style>
</head>

   
 <!--== Social Icons Start ==-->
                    <div class="col-lg-2 text-right">
                        <div class="header-social-icons">

<div class="dropdown show">
  <img  type="image"  width="40" height="40"  src="assetsmainlayout/img/cicon.png"  class=" dropdown-toggle"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" background-color: black; color:#ffd000;" >
   <!--== Service Page Content Start ==-->

  <ul class"form-group" style="padding:10px 10px 0px 10px;">
  <?php


$qu="SELECT * FROM user ";
$res=mysqli_query($con,$qu);

?>  <li style="text-align: right"> <img type="image" width:"30px" height:"30px" src="assetsmainlayout/img/64 (6).png"/> <a  style="color: #ffd000;font-size: 12px;" href="editprofil.php">Edit Profile</a></li>
  <center>  <li style="font-size: 22px; color:#ffd000;"><?php while($data=mysqli_fetch_assoc($res)) echo $data['User_Name']; ?></li>
    <br>
   </center>
    <li style="font-size: 15px; color:white;"><?php while($data=mysqli_fetch_assoc($res)) echo $data['Name']; ?></li>
    <li style="font-size: 15px; color:white;"><?php while($data=mysqli_fetch_assoc($res)) echo $data['Email']; ?></li>
    <br>
 
<center> <li> <img type="image" id="blink" width:"20px" height:"20px" src="assetsmainlayout/img/64 (2).png" href="Ef.php"/></li></center>
  

  </ul>   
 


</div>
    </div>

 
 
   </div>
   </div>
                
                    <!--== Social Icons End ==-->
 


    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assetsmainlayout/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assetsmainlayout/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assetsmainlayout/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assetsmainlayout/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assetsmainlayout/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assetsmainlayout/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assetsmainlayout/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assetsmainlayout/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assetsmainlayout/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assetsmainlayout/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assetsmainlayout/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assetsmainlayout/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assetsmainlayout/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assetsmainlayout/js/main.js"></script>

</body>

</html>