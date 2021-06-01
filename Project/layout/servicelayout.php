<?php
include('connect.php');
if(session_id()==''){

    session_start();
}
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
    <link rel="stylesheet" href="assetsmainlayout/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assetsmainlayout/vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="assetsmainlayout/css/style.css">
    <link rel="stylesheet" href="assetsmainlayout/css/responsive.css">


<style>
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
      ul{list-style-type:none;}
#page-title-area {
	background-image:url('assetsmainlayout/img/car/12.jpg');
	background-position: center center;
	background-size: cover;
	padding-top: 220px;
}

.ser-thumb-bg-1 {
	background-image: url('assetsmainlayout/img/car/secure.jpg');
}


.ser-thumb-bg-2 {
	background-image: url('assetsmainlayout/img/car/life.jpg');
}

.ser-thumb-bg-3 {
	background-image: url('assetsmainlayout/img/car/l.jpg');
}

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
                    <h2>Our Services</h2>
                    <span class="title-line"><i class="fa fa-bus"></i></span>
                    <p>“TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER.”</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<br>
<center><h1 style=" color:#ffd000;text-align:center; " ><i>Travel More To Discover Yourself!<i> </h1></center><br>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb  ser-thumb-bg-1 "></div>
                        <div class="service-item-content">
                           <h3>Safety & Security</h3>
                        <p Style="color:white;">
                            SRC Travel assures its passengers a safe & secure journey. For this purpose a separate Security Department is working with highly professional staff.
                            Some of the security & safety measures followed are:
                            • Security checking of passengers at boarding time.
                            • Lost & Found department for the security of luggage.
                            • Movie capturing of all passengers before the departure.
                            • Before boarding, carry-on baggage of each passenger is checked.
                        </p>         </div>
                    </div>
                    <!-- Single Services End -->


                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-2 d-lg-none d-md-block"></div>
                        <div class="service-item-content">
                            <h3>LIFE INSURANCE</h3>
                           <p Style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicingedsedsis elited. Necessitatibus aliquid, architecto ullam esdefugiat quasi! Doloribus eaque quam soluta quae porro reprehenderit edsconsequuntur hic ducimus consequatur, dicta officia excepturi quos, quis voluptatum optio deserunt sit. Totam ab dolorum at, labore quisquamn earum, magni reiciendis officiis dolores nemo nostrum perspiciatis!</p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none"></div>
                    </div>
                    <!-- Single Services End -->

                   <div class="single-service-item">
                        <div class="service-item-thumb  ser-thumb-bg-3 "></div>
                        <div class="service-item-content">
                           <h3>Luggage</h3>
                        <p Style="color:white;">
                             Every possible support is available for carrying personal luggage while traveling. Please be aware that depending on local regulations, certain items which may cause

                            injuries may not be taken on board in your carry-on baggage. Following are some available facilities:
                            • Luggage upto 30-kgs can be carried by each passenger.
                            • In case of extra luggage, ELT facility can be availed.
                            • Attachment of luggage tags for safety and security.
                            • Luggage is handled by trained loaders.
                            • Porters providing free service.
                   
                        </p>         </div>
                    </div>

                    <!-- Single Services Start -->
                 
                    <!-- Single Services End -->
                </div>
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->


                    <!-- Single Services End -->
                </div>
            </div>
        </div>
    </section>
    <?php
 include('footer.php');
 ?>
    <!--== Service Page Content End ==-->
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


