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
#page-title-area {
	background-image:url('assetsmainlayout/img/car/12.jpg');
	background-position: center center;
	background-size: cover;
	padding-top:220px;}
 .abc {
     background-image: url("assetsmainlayout/img/abc.jpg");


     } 
  ul{list-style-type:none;}
 .b{ 
        background-color:black;
     color:  #ffd000;
      border: 2px solid #ffd000;

      text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     width:160px;
        height:40px;
      }
       .b:hover{

      background-color: #ffd000;
      border-color: black;
     color: black;

     }

h3{ color:white; }

.footer-widget-area
{background-color:#ffd000;
  
 
 }
#hello{ 
        background-color:black;
     color:  #ffd000;
      border: 2px dashed #ffd000;
padding: 4.6px 2px 2px 2px;
      text-align:center;
     text-decoration: none;
     display: inline-block;
     font-size:18px;
     width:160px;
        height:40px;
  cursor: pointer;
  outline: none;
  
  border-radius: 7px;
  box-shadow: 5px 10px 18px #888888:
  text-decoration: none; }
#hello:hover{

      background-color: #ffd000;
      border-color: black;
     color: black;

     } 
</style>

</head>

 
<body style="background-color:black;">

<?php
 include('header.php');
 ?>
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>About</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>“TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER.”</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->
<!--== FAQ Area Start ==-->

<?php


$qu="SELECT * FROM about ";
$res=mysqli_query($con,$qu);

?>

  <section id="about-area">
     <div class="container">
            <div class="row">
                                         <!-- About Content Start -->
                                         <div class="col-lg-12 " >
                                           <div class="section-title  text-center ">
                                    <br>
<center><h1 style=" color:#ffd000;text-align:center; " ><i>Travel More To Discover Yourself!<i> </h1></center><br>
                                    
                                   <div class="about-content  abc" style="padding-right:15px;padding-left:15px;">
                               <br>
<p style="color:#ffd000;font: 25;  text-align:center;" ><?php while($data=mysqli_fetch_assoc($res)) echo $data['About']; ?>
                                              
                                                </p><br>
                                                
     </div>       </div> 
     </div></div><div>
    </section>

  <section> 
        <div class="about-feature-area">
      <div class="row">
                    <!-- Single Fretutes Start -->



                    <div class="col-lg-4">
                        <div class="about-feature-item" style=" color:white;">
                            <i class="fa fa-clock-o"></i>
                            <h3>PUNCTUALITY</h3>
                            <p>Time is the most precious asset at this age & we care about it.</p>
                        </div> 
                   </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                              <div class="about-feature-item" style=" color:white;">
                              <i class="fa fa-life-ring"></i>
                              <h3>Safety & Security</h3>
                               <p>SRC Travel assures its passengers a safe & secure journey.</p>
                              </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item" style=" color:white;">
                             <i class="fa fa-cog"></i>
                        <h3>Trained Crew</h3>
                        <p>Quality service can be provided by quality conscious people.</p>       </div>
                    </div>
                    <!-- Single Fretutes End -->
     </div> <br><br>
       </div>
     <!-- About Fretutes End --> 
   </section>

   <?php
   include('footer.php');
   ?>
                 
<!--== FAQ Area End ==-->
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
<script src="~assetsmainlayout/js/plugins/waypoints.min.js"></script>
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


